@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="about_rtp">

<div class="container-fluid hero">
      <img src="{{ asset('assets/images/product_25.png') }}">
      <div class="hero-text">
         <h1>Gallery</h1>
         <div class="breadcrumb">Home / Gallery</div>
      </div>
   </div>
</div>
<section class="inner_banner">
     
<!-- <div class="hero-slider">

  <div class="slide active">
    <img src="{{ asset('assets/images/banner/banner-1.jpg') }}" alt="">
    <div class="overlay"></div>
    <div class="slide-content">
      <h1>Our Gallery</h1>
       <p>Home | Gallery</p>
    </div>
  </div>

  <div class="slide">
    <img src="{{ asset('assets/images/banner/banner-2.jpg') }}" alt="">
    <div class="overlay"></div>
     <div class="slide-content">
      <h1>Our Gallery</h1>
    </div>
  </div>

  <div class="slide">
    <img src="{{ asset('assets/images/banner/banner-3.jpg') }}" alt="">
    <div class="overlay"></div>
     <div class="slide-content">
      <h1>Our Gallery</h1>
    </div>
  </div>
  <div class="arrow left">&#10094;</div>
  <div class="arrow right">&#10095;</div>
  <div class="dots"></div>
</div> -->
</section>
<section class="section galary_warp">
<div class="container">
   <div class="art-grid">
        <!-- Old Masters -->
        <div class="art-column">
            <div class="art-header">
                <h2>Old Masters</h2>
                <div class="arrow-btn" onclick="openCategory('old')">→</div>
            </div>
            <div class="art-image">
                <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=600&q=80" alt="Old Masters">
            </div>
            <ul class="artist-list">
                <li onclick="viewArtist('Jan Van Eyck')">Jan Van Eyck</li>
                <li onclick="viewArtist('Lucas Cranach The Elder')">Lucas Cranach The Elder</li>
                <li onclick="viewArtist('Sandro Botticelli')">Sandro Botticelli (Sandro Filipepi)</li>
            </ul>
        </div>
        <!-- Modern Art -->
        <div class="art-column">
            <div class="art-header">
                <h2>Modern Art</h2>
                <div class="arrow-btn" onclick="openCategory('modern')">→</div>
            </div>
            <div class="art-image">
                <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=600&q=80" alt="Modern Art">
            </div>
            <ul class="artist-list">
                <li onclick="viewArtist('Ernst Ludwig Kirchner')">Ernst Ludwig Kirchner</li>
                <li onclick="viewArtist('Pablo Picasso')">Pablo Picasso</li>
                <li onclick="viewArtist('Johann Heinrich Wilhelm Tischbein')">Johann Heinrich Wilhelm Tischbein</li>
            </ul>
        </div>
        <!-- Contemporary Art -->
        <div class="art-column">
            <div class="art-header">
                <h2>Contemporary Art</h2>
                <div class="arrow-btn" onclick="openCategory('contemporary')">→</div>
            </div>
            <div class="art-image">
                <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=600&q=80" alt="Contemporary Art">
            </div>
            <ul class="artist-list">
                <li onclick="viewArtist('Gerhard Richter')">Gerhard Richter</li>
                <li onclick="viewArtist('Martin Kippenberger')">Martin Kippenberger</li>
                <li onclick="viewArtist('Francis Bacon')">Francis Bacon</li>
            </ul>
        </div>
    </div>
</div>
</section>
<section class="hero-section gtrz">
    <div class="hero-content">
        <div class="content-wrapper">
            <h1>
                Welcome To <br>
                The World of Astrology <br>
                and Astrological Wonders
            </h1>
            <p>
                Explore a universe of astrological wisdom, rare manuscripts, mystical artifacts, and celestial art.<br>
                Our gallery celebrates the rich heritage of astrology, renowned astrologers, and the cosmic wonders that inspire seekers across generations.
            </p>
            <a href="https://jyotish.astrorajumaharaj.com/" class="hero-btn" onclick="moreAbout()">
                More About
                <span>→</span>
            </a>
        </div>
    </div>
    <div class="hero-image"></div>
</section>
<section class="collection-section">
    <div class="section-header fdcfre">
        <h2>Collection</h2>
        <a href="#" class="view-all">
            View All Collection
            <span>→</span>
        </a>
    </div>
    <p class="section-desc">
        Our collection currently contains more than 100,000 works of art and design
        dating from ancient times to today.
    </p>
    <div class="gallery">
        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=600&q=80" alt="">
            <div class="art-info">
                <h4>Madonna with Saints</h4>
                <p>from 1484 until 1485</p>
            </div>
        </div>
        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=600&q=80" alt="">
            <div class="art-info">
                <h4>Pallas and the Centaur</h4>
                <p>1482</p>
            </div>
        </div>
        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=600&q=80" alt="">
            <div class="art-info">
                <h4>The Adoration of the Magi</h4>
                <p>from 1478 until 1482</p>
            </div>
        </div>
        <div class="gallery-item" onclick="openLightbox(this)">
            <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?w=600&q=80" alt="">
            <div class="art-info">
                <h4>Portrait of a Lady</h4>
                <p>1480</p>
            </div>
        </div>
    </div>
</section>
<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <span class="lightbox-close" onclick="closeLightbox()">×</span>
    <img id="lightbox-img" src="">
</div>
@endsection
