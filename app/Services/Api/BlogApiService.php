<?php

namespace App\Services\Api;

use App\Services\Api\Clients\BaseApiClient;

class BlogApiService extends BaseApiClient
{
    protected string $blogEndpoint = 'blog-posts';
    protected string $categoryEndpoint = 'blog-categories';
    protected int $cacheTtl = 300;

    public function getAllPosts(): array
    {
        return $this->request('get', $this->blogEndpoint, [], 'all_blog_posts', $this->cacheTtl);
    }

    public function getPost($identifier): array
    {
        return $this->request('get', $this->blogEndpoint . "/$identifier", [], "blog_post_$identifier", $this->cacheTtl);
    }

    public function getCategories(): array
    {
        return $this->request('get', $this->categoryEndpoint, [], 'all_blog_categories', $this->cacheTtl);
    }

    public function getCategoryPosts($category): array
    {
        return $this->request('get', $this->categoryEndpoint . "/$category/posts", [], "category_posts_$category", $this->cacheTtl);
    }

    public function getRelatedPosts($identifier): array
    {
        return $this->request('get', $this->blogEndpoint . "/$identifier/related", [], "related_posts_$identifier", $this->cacheTtl);
    }
}
