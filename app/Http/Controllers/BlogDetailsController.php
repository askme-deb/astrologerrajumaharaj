<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\Api\BlogApiService;

class BlogDetailsController extends Controller
{
    protected BlogApiService $blogApiService;

    public function __construct(BlogApiService $blogApiService)
    {
        $this->blogApiService = $blogApiService;
    }

    public function show($identifier)
    {
        $post = $this->blogApiService->getPost($identifier);
        $related = $this->blogApiService->getRelatedPosts($identifier);
        $categories = $this->blogApiService->getCategories();
       // dd($post, $related, $categories);
        return view('pages.blog-details', [
            'post' => $post,
            'related' => $related,
            'categories' => $categories,
        ]);
    }
}
