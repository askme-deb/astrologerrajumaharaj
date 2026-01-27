<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $endpoint =  'https://admin.astrorajumaharaj.com/api/v1/astrologers';
        $productsResponse = Http::get('https://admin.astrorajumaharaj.com/api/v1/products');
        $products = $productsResponse->json('data.data') ?? [];

        return view('home', [
            'astrologersEndpoint' => $endpoint,
            'products' => $products,
        ]);
    }
}
