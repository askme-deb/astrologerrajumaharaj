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
          <img src="{{ asset('assets/images/courses post.png') }}" alt="">
          <span class="category">Vedic Astrology</span>
        </div>
        <div class="card-content">
          <div class="meta">
            <span>Jan 3, 2026</span>
            <span>Astro Tungeesh</span>
          </div>
          <h3>Understanding Your Birth Chart: A Complete Guide</h3>
          <p>Your birth chart reveals planetary positions influencing your destiny, personality, and life path.</p>
          <a href="{{ route('blog.details') }}" class="read-more">Read More →</a>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-img">
          <img src="{{ asset('assets/images/courses post.png') }}" alt="">
          <span class="category">Gemstones</span>
        </div>
        <div class="card-content">
          <div class="meta">
            <span>Dec 28, 2025</span>
            <span>Dr. Meera Sharma</span>
          </div>
          <h3>Top 5 Gemstones for Career Success</h3>
          <p>Discover powerful gemstones that can boost professional growth and financial stability.</p>
          <a href="{{ route('blog.details') }}" class="read-more">Read More →</a>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-img">
          <img src="{{ asset('assets/images/courses post.png') }}" alt="">
          <span class="category">Vastu</span>
        </div>
        <div class="card-content">
          <div class="meta">
            <span>Dec 20, 2025</span>
            <span>Pt. Rajesh Kumar</span>
          </div>
          <h3>Vastu Tips for a Harmonious Home</h3>
          <p>Simple Vastu principles to bring peace, prosperity, and positive energy to your home.</p>
          <a href="{{ route('blog.details') }}" class="read-more">Read More →</a>
        </div>
      </div>
      <!-- <div class="blog-card">
        <div class="card-img">
          <img src="{{ asset('assets/images/courses post.png') }}" alt="">
          <span class="category">Zodiac</span>
        </div>
        <div class="card-content">
          <div class="meta">
            <span>Dec 15, 2025</span>
            <span>Acharya Vikram</span>
          </div>
          <h3>2026 Horoscope Predictions for All Zodiac Signs</h3>
          <p>Explore love, career, health, and finance predictions for every zodiac sign.</p>
          <a href="{{ route('blog.details') }}" class="read-more">Read More →</a>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-img">
          <img src="{{ asset('assets/images/courses post.png') }}" alt="">
          <span class="category">Remedies</span>
        </div>
        <div class="card-content">
          <div class="meta">
            <span>Dec 10, 2025</span>
            <span>Dr. Meera Sharma</span>
          </div>
          <h3>Powerful Mantras for Planetary Peace</h3>
          <p>Ancient mantras to reduce planetary doshas and enhance positive cosmic energies.</p>
          <a href="{{ route('blog.details') }}" class="read-more">Read More →</a>
        </div>
      </div> -->
    </div>
    <!-- Pagination -->
    <!-- <div class="pagination">
      <a class="active">1</a>
      <a>2</a>
      <a>3</a>
      <a>Next →</a>
    </div> -->
    
  </div>
</section>
@endsection
