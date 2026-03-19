@extends('layouts.app')

@section('title', 'Blog Details')

@section('content')
<section class="breadcrumb-section">
<div class="container">
    <h1>Unlock Your Destiny: What the Stars Reveal About Your Future</h1>
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li class="active">Blog Details</li>
    </ul>
</div>
</section>
<div class="container my-5">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <div class="blog-hero mb-4">
                <span class="date">
                    <i class="far fa-calendar-alt"></i>
                    {{ \Carbon\Carbon::parse($post['published_at'] ?? $post['data']['published_at'] ?? '')->format('F d, Y') }}
                </span>
                <img src="{{ $post['featured_image_url'] ?? $post['data']['featured_image_url'] ?? asset('assets/images/default-blog.png') }}" alt="{{ $post['title'] ?? $post['data']['title'] ?? '' }}">
            </div>
            <div class="post-meta-user">
                <span class="author">
                    <i class="fa fa-user"></i>
                    <a href="#">
                        @if(isset($post['author']) && is_array($post['author']))
                            {{ trim(($post['author']['first_name'] ?? '') . ' ' . ($post['author']['last_name'] ?? '')) }}
                        @elseif(isset($post['author']) && is_string($post['author']))
                            {{ $post['author'] }}
                        @elseif(isset($post['data']['author']) && is_array($post['data']['author']))
                            {{ trim(($post['data']['author']['first_name'] ?? '') . ' ' . ($post['data']['author']['last_name'] ?? '')) }}
                        @elseif(isset($post['data']['author']) && is_string($post['data']['author']))
                            {{ $post['data']['author'] }}
                        @else
                            Admin
                        @endif
                    </a>
                </span>
                <span class="categories-links">
                    <i class="fas fa-folder-open"></i>
                    <a href="{{ route('blog', ['category' => $post['category']['slug'] ?? $post['category']['id'] ?? $post['data']['category']['slug'] ?? $post['data']['category']['id'] ?? '']) }}">
                        {{ $post['category']['name'] ?? $post['data']['category']['name'] ?? '' }}
                    </a>
                </span>
                <span class="comment-count">
                    <i class="fas fa-comments"></i>
                    <a href="#">({{ $post['comments_count'] ?? $post['data']['comments_count'] ?? 0 }})</a>
                </span>
            </div>
            <h1 class="blog-title">{{ $post['data']['title'] ?? '' }}</h1>
                        <h1 class="blog-title">{{ $post['title'] ?? $post['data']['title'] ?? '' }}</h1>
            <div class="meta mb-4">
                By
                @if(isset($post['author']) && is_array($post['author']))
                    {{ trim(($post['author']['first_name'] ?? '') . ' ' . ($post['author']['last_name'] ?? '')) }}
                @elseif(isset($post['author']) && is_string($post['author']))
                    {{ $post['author'] }}
                @elseif(isset($post['data']['author']) && is_array($post['data']['author']))
                    {{ trim(($post['data']['author']['first_name'] ?? '') . ' ' . ($post['data']['author']['last_name'] ?? '')) }}
                @elseif(isset($post['data']['author']) && is_string($post['data']['author']))
                    {{ $post['data']['author'] }}
                @else
                    Admin
                @endif
                |
                {{ \Carbon\Carbon::parse($post['published_at'] ?? $post['data']['published_at'] ?? '')->format('F d, Y') }}
            </div>
            <div class="blog-content">
                {!! $post['content'] ?? $post['data']['content'] ?? '' !!}
            </div>
            <!-- Share -->
            <div class="mt-4">
                <h6>Share this article:</h6>
                <div class="share-btns mt-2">
                    <a href="#" class="fb">Facebook</a>
                    <a href="#" class="tw">Twitter</a>
                    <a href="#" class="wh">WhatsApp</a>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    <div class="col-lg-4 blog_warpp">
            <!-- Search -->
            <!-- <div class="sidebar">
                <h5>Search</h5>
                <input type="text" class="form-control" placeholder="Search blog...">
            </div> -->
            <!-- Categories -->
            <div class="sidebar">
                <h5>Categories</h5>
                <div class="category-list">
                    @php
                        $categoryList = [];
                        if(isset($categories['data']) && is_array($categories['data'])) {
                            $categoryList = $categories['data'];
                        } elseif(is_array($categories)) {
                            $categoryList = $categories;
                        }
                    @endphp
                    @if(!empty($categoryList))
                        @foreach($categoryList as $cat)
                            <a href="{{ route('blog', ['category' => $cat['slug'] ?? $cat['id']]) }}">
                                {{ $cat['name'] ?? '' }}
                                <span class="badge bg-secondary ms-1">{{ $cat['posts_count'] ?? 0 }}</span>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- Recent Posts -->
            <div class="sidebar">
                <h5>Related Posts</h5>
                @php
                    $relatedList = [];
                    if(isset($related['data']) && is_array($related['data'])) {
                        $relatedList = $related['data'];
                    } elseif(is_array($related)) {
                        $relatedList = $related;
                    }
                @endphp
                @if(!empty($relatedList))
                    @foreach($relatedList as $relatedPost)
                        <a href="{{ route('blog.details', ['identifier' => $relatedPost['slug'] ?? $relatedPost['id']]) }}" class="recent-post">
                            <img src="{{ $relatedPost['featured_image_url'] ?? $relatedPost['image_url'] ?? asset('assets/images/default-blog.png') }}">
                            <div class="bcxi">
                                <h6>{{ $relatedPost['title'] ?? '' }}</h6>
                                <small>{{ isset($relatedPost['published_at']) ? \Carbon\Carbon::parse($relatedPost['published_at'])->format('F d, Y') : '' }}</small>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p>No related posts found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
