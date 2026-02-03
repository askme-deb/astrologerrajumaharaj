@extends('layouts.app')

@section('title', ucfirst(str_replace('-', ' ', $categoryName)) . ' Blogs')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>{{ ucfirst(str_replace('-', ' ', $categoryName)) }} Blogs</h1>
        <p class="breadcrumb">Home / <a href="{{ url('/blog') }}" style="color:inherit;text-decoration:underline;">Blog</a> / {{ ucfirst(str_replace('-', ' ', $categoryName)) }}</p>
    </div>
</section>
<section class="section-padding">
    <div class="container">
        <div class="blog-grid">
            @if(!empty($posts))
                @foreach($posts as $blog)
                <div class="blog-card">
                    <div class="card-img">
                        <img src="{{ $blog['featured_image_url'] ?? asset('assets/images/default.png') }}" alt="">
                        <span class="category">{{ $blog['category']['name'] ?? '' }}</span>
                    </div>
                    <div class="card-content">
                        <div class="meta">
                            <span>{{ isset($blog['published_at']) ? \Carbon\Carbon::parse($blog['published_at'])->format('M d, Y') : '' }}</span>
                            <span>{{ trim(($blog['author']['first_name'] ?? '').' '.($blog['author']['last_name'] ?? '')) }}</span>
                        </div>
                        <h3>{{ $blog['title'] }}</h3>
                        <p>{!! $blog['excerpt'] ? $blog['excerpt'] : \Illuminate\Support\Str::limit(strip_tags($blog['content'] ?? ''), 120) !!}</p>
                        <a href="{{ url('/blog/'.$blog['slug']) }}" class="read-more">Read More →</a>
                    </div>
                </div>
                @endforeach
            @else
                <p>No blog posts found.</p>
            @endif
        </div>
        <aside class="blog-sidebar" style="margin-top:40px;">
            <div class="sidebar-box">
                <h4>Categories</h4>
                <ul style="list-style:none; margin:0; padding:0;">
                    @foreach($categories as $cat)
                        <li style="display:flex; justify-content:space-between; align-items:center; padding:7px 0; border-bottom:1px solid #f0f0f0; font-size:15px;">
                            <a href="{{ url('/blog/category/'.$cat['slug']) }}" style="color:#2a2e4a; text-decoration:none;">{{ $cat['name'] }}</a>
                            <span style="background:#e3e7ff; color:#5e35b1; font-size:13px; border-radius:10px; padding:2px 10px; margin-left:8px; font-weight:500;">{{ $cat['posts_count'] ?? $cat['posts'] ?? 0 }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</section>
@endsection
