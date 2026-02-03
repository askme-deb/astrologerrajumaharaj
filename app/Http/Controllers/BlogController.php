<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [];
        try {
            $response = Http::get('https://admin.astrorajumaharaj.com/api/v1/blog-posts');
            if ($response->successful() && isset($response['data'])) {
                $blogs = $response['data'];
            }
        } catch (\Exception $e) {
            // Optionally log error
        }
        return view('blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = null;
        $related = [];
        $comments = [];
        $categories = [];
        try {
            $response = Http::get('https://admin.astrorajumaharaj.com/api/v1/blog-posts/' . $slug);
            if ($response->successful() && isset($response['id'])) {
                $blog = $response->json();
            }
            // Related blogs using new endpoint
            $relatedResp = Http::get('https://admin.astrorajumaharaj.com/api/v1/blog-posts/' . $slug . '/related');
            if ($relatedResp->successful()) {
                $related = $relatedResp->json();
            }
            // Comments for this blog (if API exists)
            $commentsResp = Http::get('https://admin.astrorajumaharaj.com/api/v1/blog-posts/' . $slug . '/comments');
            if ($commentsResp->successful() && isset($commentsResp['data'])) {
                $comments = $commentsResp['data'];
            }
            // Blog categories for sidebar
            $catResp = Http::get('https://admin.astrorajumaharaj.com/api/v1/blog-categories');
            if ($catResp->successful()) {
                $categories = $catResp->json();
            }
        } catch (\Exception $e) {
            // Optionally log error
        }
        if (!$blog) {
            abort(404);
        }
        return view('blog-details', compact('blog', 'related', 'comments', 'categories'));
    }

    public function category($category)
    {
        $categoryName = $category;
        $posts = [];
        $categories = [];
        try {
            $response = Http::get('https://admin.astrorajumaharaj.com/api/v1/blog-categories/' . $category . '/posts');
            if ($response->successful() && isset($response['data'])) {
                $posts = $response['data'];
            }
            // Also fetch categories for sidebar
            $catResp = Http::get('https://admin.astrorajumaharaj.com/api/v1/blog-categories');
            if ($catResp->successful()) {
                $categories = $catResp->json();
            }
        } catch (\Exception $e) {
            // Optionally log error
        }
        return view('blog-category', compact('categoryName', 'posts', 'categories'));
    }
}
