@extends('layouts.app')


@php
use Illuminate\Support\Str;
use Carbon\Carbon;
@endphp
@section('title', 'Astrology Blog')

@section('content')
<section class="page-hero">
  <div class="container">
    <h1>Astrology Blog</h1>
    <p class="breadcrumb">Home / Blog</p>
  </div>
</section>
<section class="section-padding">
  <div class="container">
    <div class="blog-grid">
      @if(!empty($blogs))
        @foreach($blogs as $blog)
        <div class="blog-card">
          <div class="card-img">
            <img src="{{ $blog['featured_image_url'] ?? asset('assets/images/default.png') }}" alt="">
            <span class="category">{{ $blog['category']['name'] ?? '' }}</span>
          </div>
          <div class="card-content">
            <div class="meta">
              <span>{{ \Carbon\Carbon::parse($blog['published_at'])->format('M d, Y') }}</span>
              <span>{{ trim(($blog['author']['first_name'] ?? '').' '.($blog['author']['last_name'] ?? '')) }}</span>
            </div>
            <h3>{{ $blog['title'] }}</h3>
            <p>{!! $blog['excerpt'] ? $blog['excerpt'] : Str::limit(strip_tags($blog['content']), 120) !!}</p>
            <a href="{{ url('/blog/'.$blog['slug']) }}" class="read-more">Read More →</a>
          </div>
        </div>
        @endforeach
      @else
        <p>No blog posts found.</p>
      @endif
    </div>
  </div>
</section>
@endsection