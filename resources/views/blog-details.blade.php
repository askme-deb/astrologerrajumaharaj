@extends('layouts.app')

@php
use Carbon\Carbon;
@endphp
@section('title', $blog['title'] ?? 'Blog Details')

@section('content')
    <!-- BLOG HERO -->
    <section class="blog-hero">
        <div class="container">
            <span class="blog-category">{{ $blog['category']['name'] ?? '' }}</span>
            <h1>{{ $blog['title'] ?? '' }}</h1>
            <div class="blog-meta">
                <span><i class="far fa-calendar"></i> {{ isset($blog['published_at']) ? Carbon::parse($blog['published_at'])->format('F d, Y') : '' }}</span>
                <span><i class="far fa-user"></i> {{ trim(($blog['author']['first_name'] ?? '').' '.($blog['author']['last_name'] ?? '')) }}</span>
                <!-- <span><i class="far fa-comments"></i> 24 Comments</span> -->
            </div>
        </div>
    </section>
    <!-- BLOG CONTENT -->
    <section class="blog-details section-padding">
        <div class="container">
            <div class="blog-wrapper">
                <!-- MAIN CONTENT -->
                <article class="blog-main">
                    <img src="{{ $blog['featured_image_url'] ?? asset('assets/images/default.png') }}" class="featured-img" alt="Blog Image">
                    @if(!empty($blog['content']))
                        {!! $blog['content'] !!}
                    @endif

                    <!-- TAGS -->
                    <div class="post-tags">
                        <a href="#">Astrology</a>
                        <a href="#">Birth Chart</a>
                        <a href="#">Horoscope</a>
                        <a href="#">Vedic</a>
                    </div>
                    <!-- AUTHOR BOX -->
                    <div class="author-box">
                        <img src="{{ asset('assets/images/about.png') }}" alt="">
                        <div>
                            <h4>Astro Tungeesh</h4>
                            <p>Vedic astrologer with 15+ years of experience in horoscope analysis and gemstone
                                recommendations.</p>
                        </div>
                    </div>
                    <!-- COMMENTS -->
                    <div class="comments">
                        <h3>Comments ({{ count($comments) }})</h3>
                        @forelse($comments as $comment)
                            <div class="comment">
                                <strong>{{ $comment['name'] ?? 'Anonymous' }}</strong>
                                <span>{{ isset($comment['created_at']) ? Carbon::parse($comment['created_at'])->format('F d, Y') : '' }}</span>
                                <p>{{ $comment['comment'] ?? '' }}</p>
                            </div>
                        @empty
                            <p>No comments yet.</p>
                        @endforelse
                        <!-- COMMENT FORM (static, not functional) -->
                        <form class="comment-form">
                            <h4>Leave a Comment</h4>
                            <input type="text" placeholder="Your Name" required>
                            <input type="email" placeholder="Your Email" required>
                            <textarea placeholder="Your Comment"></textarea>
                            <button type="submit">Post Comment</button>
                        </form>
                    </div>
                </article>
                <!-- SIDEBAR -->
                <aside class="blog-sidebar">
                    <div class="sidebar-box">
                        <h4>Related Blogs</h4>
                        @forelse($related as $item)
                            <div class="related-blog">
                                <a href="{{ url('/blog/'.$item['slug']) }}">
                                    <img src="{{ $item['featured_image_url'] ?? asset('assets/images/default.png') }}" alt="{{ $item['title'] }}" style="width: 100%; max-width: 80px; float:left; margin-right:10px;">
                                    <div style="overflow:hidden;">
                                        {{ $item['title'] }}
                                        <div style="font-size:12px; color:#888;">{{ isset($item['published_at']) ? Carbon::parse($item['published_at'])->format('M d, Y') : '' }}</div>
                                    </div>
                                </a>
                                <div style="clear:both;"></div>
                            </div>
                        @empty
                            <p>No related blogs found.</p>
                        @endforelse
                    </div>
                    <div class="sidebar-box" style="margin-top: 32px;">
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
        </div>
    </section>
@endsection
