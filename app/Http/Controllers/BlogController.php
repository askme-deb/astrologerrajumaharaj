<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\Api\BlogApiService;

class BlogController extends Controller
{
    protected BlogApiService $blogApiService;

    public function __construct(BlogApiService $blogApiService)
    {
        $this->blogApiService = $blogApiService;
    }

    public function index(Request $request)
    {
        $category = $request->query('category');
        $categories = $this->blogApiService->getCategories();
        if ($category) {
            $posts = $this->blogApiService->getCategoryPosts($category);
        } else {
            $posts = $this->blogApiService->getAllPosts();
        }
        return view('pages.blog', [
            'posts' => $posts,
            'categories' => $categories,
            'selectedCategory' => $category,
        ]);
    }
}
