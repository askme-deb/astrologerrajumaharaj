<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Api\ProductApiService;
use App\Services\Api\AstrologerApiService;
class HomeController extends Controller
{
    protected ProductApiService $productApiService;
    protected AstrologerApiService $astrologerApiService;

    public function __construct(ProductApiService $productApiService, AstrologerApiService $astrologerApiService)
    {
        $this->productApiService = $productApiService;
        $this->astrologerApiService = $astrologerApiService;
    }

    public function index()
    {
        try {
            $products = $this->productApiService->getAllProducts();
        } catch (\Throwable $e) {
            $products = [];
        }
        try {
            $astrologers = $this->astrologerApiService->getAllAstrologers();
        } catch (\Throwable $e) {
            $astrologers = [];
        }
        return view('pages.home', [
            'products' => $products,
            'astrologers' => $astrologers,
        ]);
    }
}
