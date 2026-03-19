<?php

namespace App\Http\Controllers;

use App\Services\Api\ProductApiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    protected ProductApiService $productApiService;

    public function __construct(ProductApiService $productApiService)
    {
        $this->productApiService = $productApiService;
    }

    /**
     * Display a listing of products.
     */
    public function index()
    {
        try {
            $products = $this->productApiService->getAllProducts();
            // Optionally validate/transform $products here
            return response()->json(['data' => $products]);
        } catch (\Throwable $e) {
            Log::error('Product API error', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Unable to fetch products'], 500);
        }
    }
    /**
     * Show home page with products (for Blade view).
     */

    /**
     * Display a single product.
     */
    public function show($id)
    {
        try {
            $product = $this->productApiService->getProductById($id);
            return response()->json(['data' => $product]);
        } catch (\Throwable $e) {
            Log::error('Product API error', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Unable to fetch product'], 500);
        }
    }
}
