<?php

namespace App\Services\Api;

use App\Services\Api\Clients\BaseApiClient;

class AstrologerApiService extends BaseApiClient
{
    protected string $astrologerEndpoint = 'astrologers';
    protected int $cacheTtl = 300; // 5 minutes (configurable)

    /**
     * Fetch all astrologers with caching.
     */
    public function getAllAstrologers(): array
    {
        return $this->request('get', $this->astrologerEndpoint, [], 'all_astrologers', $this->cacheTtl);
    }

    /**
     * Fetch a single astrologer by ID with caching.
     */
    public function getAstrologerById($id): array
    {
        return $this->request('get', $this->astrologerEndpoint . "/$id", [], "astrologer_$id", $this->cacheTtl);
    }

    /**
     * Invalidate astrologer cache (for background sync or admin updates).
     */
    public function invalidateAstrologerCache($id = null): void
    {
        if ($id) {
            $this->invalidateCache("astrologer_$id");
        } else {
            $this->invalidateCache('all_astrologers');
        }
    }
}
