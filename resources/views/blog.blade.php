@extends('layouts.app')

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
      <!-- Blog Card -->
      <div class="blog-card">
        <div class="card-img">
          <img src="{{ asset('assets/images/top-7.png') }}" alt="">
          <span class="category">Vedic Astrology</span>
        </div>
        <div class="card-content">
          <div class="meta">
            <span>Jan 3, 2026</span>
            <span>Astro Tungeesh</span>
          </div>
          <h3>Top 7 Signs the Universe Is Trying to Send You a Message</h3>
          <p>Have you ever felt like life is trying to tell you something—but you can’t quite figure out what?</p>
          <a href="{{ route('blog.details') }}" class="read-more">Read More →</a>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-img">
          <img src="{{ asset('assets/images/how-astrology.png') }}" alt="">
          <span class="category">Gemstones</span>
        </div>
        <div class="card-content">
          <div class="meta">
            <span>Dec 28, 2025</span>
            <span>Dr. Meera Sharma</span>
          </div>
          <h3>How Astrology Can Help You Make Better Career & Business Decisions</h3>
          <p>In today’s fast-moving professional world, career and business decisions are rarely simple.</p>
          <a href="{{ route('blog.details2') }}" class="read-more">Read More →</a>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-img">
          <img src="{{ asset('assets/images/common-astrology.png') }}" alt="">
          <span class="category">Vastu</span>
        </div>
        <div class="card-content">
          <div class="meta">
            <span>Dec 20, 2025</span>
            <span>Pt. Rajesh Kumar</span>
          </div>
          <h3>Common Astrology Myths People Still Believe (And the Truth Behind Them)</h3>
          <p>Astrology has been practiced for thousands of years, yet it remains one of the most misunderstood subjects in the modern world. </p>
          <a href="{{ route('blog.details3') }}" class="read-more">Read More →</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection