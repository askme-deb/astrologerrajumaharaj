@extends('layouts.app')

@section('title', 'Blog Details')

@section('content')
<!-- BLOG HERO -->
<section class="blog-hero">
  <div class="container">
    <span class="blog-category">Vedic Astrology</span>
    <h1>Understanding Your Birth Chart: A Complete Guide</h1>
    <div class="blog-meta">
      <span><i class="far fa-calendar"></i> January 3, 2026</span>
      <span><i class="far fa-user"></i> Astro Tungeesh</span>
      <span><i class="far fa-comments"></i> 24 Comments</span>
    </div>
  </div>
</section>
<!-- BLOG CONTENT -->
<section class="blog-details section-padding">
  <div class="container">
    <div class="blog-wrapper">
      <!-- MAIN CONTENT -->
      <article class="blog-main">
        <img src="{{ asset('assets/images/courses post.png') }}" class="featured-img" alt="Blog Image">
        <p class="lead">
          Your birth chart, also known as a natal chart, is a cosmic snapshot of the sky at the exact moment you were born.
        </p>
        <p>
          In Vedic astrology, the birth chart reveals planetary positions that influence your personality, life path,
          career, relationships, and spiritual growth.
        </p>
        <h2>What Is a Birth Chart?</h2>
        <p>
          A birth chart is divided into twelve houses, each representing different areas of life such as wealth,
          marriage, health, and profession.
        </p>
        <blockquote>
          “The stars incline us, they do not bind us.” – Ancient Vedic Wisdom
        </blockquote>
        <h3>Why Is the Birth Chart Important?</h3>
        <ul>
          <li>Provides insight into your strengths and challenges</li>
          <li>Helps choose the right gemstone or remedy</li>
          <li>Guides career, marriage, and life decisions</li>
          <li>Predicts favorable and unfavorable periods</li>
        </ul>
        <p>
          Consulting an experienced astrologer helps you understand these planetary influences and apply remedies
          to balance your life.
        </p>
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
            <p>Vedic astrologer with 15+ years of experience in horoscope analysis and gemstone recommendations.</p>
          </div>
        </div>
        <!-- COMMENTS -->
        <div class="comments">
          <h3>Comments (2)</h3>
          <div class="comment">
            <strong>Rahul Sharma</strong>
            <span>January 5, 2026</span>
            <p>Very informative article. Helped me understand my chart better.</p>
          </div>
          <div class="comment">
            <strong>Priya Singh</strong>
            <span>January 6, 2026</span>
            <p>Excellent explanation. Looking forward to more astrology content.</p>
          </div>
          <!-- COMMENT FORM -->
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
          <h4>Search</h4>
          <input type="text" placeholder="Search blog...">
        </div>
        <div class="sidebar-box">
          <h4>Categories</h4>
          <ul>
            <li><a href="#">Vedic Astrology</a></li>
            <li><a href="#">Gemstones</a></li>
            <li><a href="#">Vastu</a></li>
            <li><a href="#">Zodiac Signs</a></li>
          </ul>
        </div>
        <div class="sidebar-box">
          <h4>Popular Posts</h4>
          <div class="side-post">
            <img src="{{ asset('assets/images/courses post.png') }}" alt="">
            <p>Top 5 Gemstones for Career Success</p>
          </div>
          <div class="side-post">
            <img src="{{ asset('assets/images/courses post.png') }}" alt="">
            <p>2026 Horoscope Predictions</p>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
@endsection
