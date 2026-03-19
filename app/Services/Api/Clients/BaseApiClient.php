<?php

namespace App\Services\Api\Clients;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Arr;
use Exception;

/**
 * BaseApiClient: Centralized HTTP client for external API integrations.
 * Handles retries, timeouts, caching, error logging, and token management.
 */
abstract class BaseApiClient
{
    protected string $baseUrl;
    protected string $token;
    protected int $timeout;
    protected int $retries;
    protected int $retryDelay;
    protected ?string $cachePrefix = null;

    public function __construct()
    {
        $this->baseUrl = config('services.astro_api.base_url');
        $this->token = config('services.astro_api.token');
        $this->timeout = (int) config('services.astro_api.timeout', 10);
        $this->retries = (int) config('services.astro_api.retries', 2);
        $this->retryDelay = (int) config('services.astro_api.retry_delay', 200);
        $this->cachePrefix = static::class;
    }

    /**
     * Centralized request handler with caching, retry, and error logging.
     */
    protected function request(
        string $method,
        string $uri,
        array $options = [],
        ?string $cacheKey = null,
        ?int $cacheTtl = null
    ) {
        $fullUrl = rtrim($this->baseUrl, '/') . '/' . ltrim($uri, '/');
        $cacheKey = $cacheKey ? $this->cachePrefix . ':' . $cacheKey : null;

        if ($cacheKey && $cacheTtl) {
            return Cache::remember($cacheKey, $cacheTtl, function () use ($method, $fullUrl, $options) {
                return $this->sendRequest($method, $fullUrl, $options);
            });
        }
        return $this->sendRequest($method, $fullUrl, $options);
    }

    /**
     * Send HTTP request with retry, timeout, and error handling.
     */
    protected function sendRequest(string $method, string $url, array $options = [])
    {
        try {
            $http = Http::timeout($this->timeout)
                ->retry($this->retries, $this->retryDelay, throw: false)
                ->acceptJson();
            if ($this->token) {
                $http = $http->withToken($this->token);
            }
            $response = $http->{$method}($url, Arr::get($options, 'data', []));
            if (!$response->successful()) {
                Log::error('API Error', [
                    'url' => $url,
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                throw new Exception('API request failed: ' . $response->status());
            }
            return $response->json();
        } catch (Exception $e) {
            Log::error('API Exception', [
                'url' => $url,
                'error' => $e->getMessage(),
            ]);
            throw $e;
        }
    }

    /**
     * Invalidate cache for a given key.
     */
    protected function invalidateCache(string $cacheKey): void
    {
        Cache::forget($this->cachePrefix . ':' . $cacheKey);
    }
}
