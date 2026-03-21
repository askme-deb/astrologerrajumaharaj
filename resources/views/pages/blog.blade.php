@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="about_rtp">

<div class="container-fluid hero">
      <img src="https://astrorajumaharaj.com/assets/images/product_25.png">
      <div class="hero-text">
         <h1>Blog</h1>
         <div class="breadcrumb">Home / Blog</div>
      </div>
   </div>
</div>
<div class="blog_warpp">
<section class="breadcrumb-section">
<!-- <div class="container">
    <h1>Unlock Your Destiny: What the Stars Reveal About Your Future</h1>
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Blog</li>
    </ul>
</div> -->
 <!-- <div class="container-fluid hero">
      <img src="{{ asset('assets/images/product_25.png') }}">
      <div class="hero-text">
         <h1>Blog</h1>
         <div class="breadcrumb">Home / Blog</div>
      </div>
   </div>
</section> -->
<section class="section up_comingd">
<div class="container">
    <h2 class="mb-4">Latest Blog Posts</h2>
    <div class="row">
        @if(!empty($posts['data']) && is_array($posts['data']))
            @foreach($posts['data'] as $post)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <span class="date">
                            <i class="far fa-calendar-alt"></i>
                            {{ \Carbon\Carbon::parse($post['published_at'] ?? '')->format('F d, Y') }}
                        </span>
                        <img src="{{ $post['featured_image_url'] ?? asset('assets/images/default-blog.png') }}" class="w-100">
                        <div class="post-meta-user">
                            <span class="author">
                                <i class="fa fa-user"></i>
                                <a href="#">
                                    @if(isset($post['author']) && is_array($post['author']))
                                        {{ trim(($post['author']['first_name'] ?? '') . ' ' . ($post['author']['last_name'] ?? '')) }}
                                    @elseif(isset($post['author']) && is_string($post['author']))
                                        {{ $post['author'] }}
                                    @else
                                        Admin
                                    @endif
                                </a>
                            </span>
                            <span class="categories-links">
                                <i class="fas fa-folder-open"></i>
                                <a href="{{ route('blog', ['category' => $post['category']['slug'] ?? $post['category']['id'] ?? '']) }}">{{ $post['category']['name'] ?? '' }}</a>
                            </span>
                            <span class="comment-count">
                                <i class="fas fa-comments"></i>
                                <a href="#">({{ $post['comments_count'] ?? 0 }})</a>
                            </span>
                        </div>
                        <div class="card-body">
                            <h3>{{ $post['title'] ?? '' }}</h3>
                            <p>{{ $post['excerpt'] ?? '' }}</p>
                            <a class="btn btn-register" href="{{ route('blog.details', ['identifier' => $post['slug'] ?? $post['id']]) }}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <p>No blog posts found.</p>
            </div>
        @endif
    </div>
</section>
<section class="section container bgr">
    <h2 class="mb-4">Blog & Categories</h2>
    <div class="row">
        <!-- Blog Left -->
        <div class="col-lg-8">
            <div class="row g-4">
                @if(!empty($posts['data']) && is_array($posts['data']))
                    @foreach($posts['data'] as $post)
                        <div class="col-md-6">
                            <div class="blog-card">
                                <span class="date">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ \Carbon\Carbon::parse($post['published_at'] ?? '')->format('F d, Y') }}
                                </span>
                                <img src="{{ $post['featured_image_url'] ?? asset('assets/images/default-blog.png') }}" class="w-100">
                                <div class="post-meta-user">
                                    <span class="author">
                                        <i class="fa fa-user"></i>
                                        <a href="#">
                                            @if(isset($post['author']) && is_array($post['author']))
                                                {{ trim(($post['author']['first_name'] ?? '') . ' ' . ($post['author']['last_name'] ?? '')) }}
                                            @elseif(isset($post['author']) && is_string($post['author']))
                                                {{ $post['author'] }}
                                            @else
                                                Admin
                                            @endif
                                        </a>
                                    </span>
                                    <span class="categories-links">
                                        <i class="fas fa-folder-open"></i>
                                        <a href="{{ route('blog', ['category' => $post['category']['slug'] ?? $post['category']['id'] ?? '']) }}">{{ $post['category']['name'] ?? '' }}</a>
                                    </span>
                                    <span class="comment-count">
                                        <i class="fas fa-comments"></i>
                                        <a href="#">({{ $post['comments_count'] ?? 0 }})</a>
                                    </span>
                                </div>
                                <div class="gtrxxs">
                                    <h5>{{ $post['title'] ?? '' }}</h5>
                                    <p>{{ $post['excerpt'] ?? '' }}</p>
                                    <a class="btn btn-read" href="{{ route('blog.details', ['identifier' => $post['slug'] ?? $post['id']]) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <p>No blog posts found.</p>
                    </div>
                @endif
            </div>
        </div>
        <!-- Sidebar Right -->
        <div class="col-lg-4">
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
                            <a href="{{ route('blog', ['category' => $cat['slug'] ?? $cat['id']]) }}" @if(isset($selectedCategory) && $selectedCategory == ($cat['slug'] ?? $cat['id'])) class="active" @endif>
                                {{ $cat['name'] ?? '' }}
                                <span class="badge bg-secondary ms-1">{{ $cat['posts_count'] ?? 0 }}</span>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- Recent Posts -->
            <div class="sidebar">
                <h5>Recent Posts</h5>
                @if(!empty($recentPosts) && is_array($recentPosts))
                    @foreach($recentPosts as $recent)
                        <a href="{{ route('blog.details', ['identifier' => $recent['slug'] ?? $recent['id']]) }}" class="recent-post">
                            <img src="{{ $recent['featured_image_url'] ?? asset('assets/images/default-blog.png') }}">
                            <div class="bcxi">
                                <h6>{{ $recent['title'] ?? '' }}</h6>
                                <small>{{ isset($recent['published_at']) ? \Carbon\Carbon::parse($recent['published_at'])->format('F d, Y') : '' }}</small>
                                                            <small>{{ isset($recent['published_at']) ? \Carbon\Carbon::parse($recent['published_at'])->format('F d, Y') : '' }}</small>
                            </div>
                        </a>
                    @endforeach
                @else
                    <p>No recent posts found.</p>
                @endif
            </div>
        </div>
    </div>
    @if(isset($posts['links']) && is_array($posts['links']))
    <div class="pag_nas">
        <ul class="pagination">
            @foreach($posts['links'] as $link)
                <li class="{{ $link['active'] ? 'active' : '' }} {{ $link['url'] ? '' : 'disabled' }}">
                    @if($link['url'])
                        <a href="{{ $link['url'] }}">{!! $link['label'] !!}</a>
                    @else
                        <span>{!! $link['label'] !!}</span>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    @endif
</section>
</div>
@endsection
