<?php

namespace App\Services\Api;

use App\Services\Api\Clients\BaseApiClient;

class ProductApiService extends BaseApiClient
{
    protected string $productEndpoint = 'products';
    protected int $cacheTtl = 300; // 5 minutes (configurable)

    /**
     * Fetch all products with caching.
     */
    public function getAllProducts(): array
    {
        return $this->request('get', $this->productEndpoint, [], 'all_products', $this->cacheTtl);
    }

    /**
     * Fetch a single product by ID with caching.
     */
    public function getProductById($id): array
    {
        return $this->request('get', $this->productEndpoint . "/$id", [], "product_$id", $this->cacheTtl);
    }

    /**
     * Invalidate product cache (for background sync or admin updates).
     */
    public function invalidateProductCache($id = null): void
    {
        if ($id) {
            $this->invalidateCache("product_$id");
        } else {
            $this->invalidateCache('all_products');
        }
    }
}
