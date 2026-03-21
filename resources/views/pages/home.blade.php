@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
   .owl-prev,
   .owl-next {
      display: none !important;
   }
</style>
<section class="banner">
   <div class="slider">
      <img src="{{ asset('assets/images/banner/banner-1.jpg') }}" alt="">
      <img src="{{ asset('assets/images/banner/banner-2.jpg') }}" alt="">
      <img src="{{ asset('assets/images/banner/banner-3.jpg') }}" alt="">
      <img src="{{ asset('assets/images/banner/banner3.jpg') }}" alt="">
   </div>
   <div class="banner-content">
      <h2>Seek Guidance from Astrologer Raju Maharaj Ji</h2>
      <div>Get guidance for:</div>
      <ul class="guidance-list" style="list-style: none; padding-left: 0;">
         <li>✔ Health & Illness</li>
         <li>✔ Career & Business</li>
         <li>✔ Marriage & Relationships</li>
         <li>✔ Finance & Life Decisions</li>
      </ul>
      <p>Experience authentic Vedic astrology with practical remedies that bring clarity and direction to your life.</p>
      <a href="https://jyotish.astrorajumaharaj.com/raju-maharaj" class="btn">Get an Appointment</a>
   </div>
</section>
<section class="info-cards-section py-5">
   <div class="container">
      <div class="row g-4">
         <!-- Consultation -->
         <div class="col-lg-4 col-md-6">
            <div class="service-card">
               <div class="card-icon">
                  <img src="{{ asset('assets/images/cunsul.png') }}" alt="Consultation">
               </div>
               <h3>Consultation</h3>
               <p>
                 Professional Astrology Consultation
Get personalized guidance and accurate Kundli analysis from experienced astrologers.
Whether you are facing challenges in health, career, business, finance, marriage, or personal life, our experts provide clear insights and practical solutions based on Vedic astrology.
<ul class="consultation-list" style="list-style: none; padding-left: 0;">
   <li>✔ Detailed Kundli Analysis</li>
   <li>✔ Personalized Remedies & Guidance</li>
   <li>✔ Career, Business & Financial Advice</li>
   <li>✔ Marriage & Relationship Solutions</li>
</ul>
Make informed life decisions with the right guidance.
      Available All Week
               </p>
               <div class="card-footer">
                  <!-- <div class="schedule">
                     <span>M T W T F S S</span>
                     <small>Available All Week</small>
                  </div> -->
                  <a href="https://jyotish.astrorajumaharaj.com/consultation" class="card-btn"> Book Consultation</a>
               </div>
            </div>
         </div>
         <!-- Online Classes -->
         <div class="col-lg-4 col-md-6">
            <div class="service-card">
               <div class="card-icon">
                  <img src="{{ asset('assets/images/class.png') }}" alt="Online Classes">
               </div>
               <h3>Online Classes</h3>
               <p>
                  Learn Astrology from Experts
Join our structured and interactive astrology courses designed for all levels — from beginners to advanced learners.
Gain practical knowledge of Kundli reading, planetary analysis, and real-life case studies, guided by experienced mentors.
<ul class="classes-list" style="list-style: none; padding-left: 0;">
   <li>✔ Beginner to Advanced Courses</li>
   <li>✔ Live Interactive Sessions</li>
   <li>✔ Practical Kundli Analysis Training</li>
   <li>✔ Certification & Skill Development</li>
</ul>
Start your journey into the world of astrology and build your expertise.
    Flexible Timings
               </p>
               <div class="card-footer">
                  <!-- <div class="schedule">
                     <span>M T W T F S S</span>
                     <small>Flexible Timings</small>
                  </div> -->
                  <a href="#" class="card-btn">Join Classes</a>
               </div>
            </div>
         </div>
         <!-- Products -->
         <div class="col-lg-4 col-md-6">
            <div class="service-card">
               <div class="card-icon">
                  <img src="{{ asset('assets/images/products.png') }}" alt="Products">
               </div>
               <h3>Products</h3>
               <p>
                 Authentic Spiritual & Astrology Products
Explore a curated range of high-quality spiritual and astrology products designed to support your life journey.
All products are selected based on astrological principles to enhance positivity, balance energies, and support your goals.
<ul class="products-list" style="list-style: none; padding-left: 0;">
   <li>✔ Natural Gemstones</li>
   <li>✔ Energized Yantras & Puja Items</li>
   <li>✔ Astrology Tools & Books</li>
</ul>
Choose the right products to align your energy and improve your lifestyle.
      Shop Anytime
               </p>
               <div class="card-footer">
                  <!-- <div class="schedule">
                     <span>M T W T F S S</span>
                     <small>Shop Anytime</small>
                  </div> -->
                  <a href="https://shop.astrorajumaharaj.com/" class="card-btn">Explore Products</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
   <section class="section-padding light-bg">
      <div class="container">
         <div class="section-header">
            <h2>Top Online <span class="highlight-text">Astrologers</span></h2>
            <a href="https://jyotish.astrorajumaharaj.com/consultants" class="view-all-btn">View All</a>
         </div>
         <div class="row g-2 astrologers-grid">
            <div class="owl-carousel owl-theme">
               @if(!empty($astrologers['data']) && is_array($astrologers['data']))
                  @foreach($astrologers['data'] as $astrologer)
                     @if(($astrologer['name'] ?? '') !== 'Raju Maharaj')
                     <div class="banner-item">
                        <div class="astro-card">
                           <div class="astro-image">
                              <img src="{{ $astrologer['image_url'] ?? asset('assets/images/top 1 astrologer.png') }}" alt="{{ $astrologer['name'] ?? 'Astrologer' }}">
                           </div>
                           <div class="astro-info">
                              <h3>{{ $astrologer['name'] ?? 'Astrologer Name' }}</h3>
                              <div class="nhgd">
                                 @if(!empty($astrologer['skills']) && is_array($astrologer['skills']))
                                    @php
                                       $skills = $astrologer['skills'];
                                       $displayCount = 2;
                                       $totalSkills = count($skills);
                                       $uniqueId = 'skills_' . ($astrologer['id'] ?? uniqid());
                                    @endphp
                                    <span id="{{ $uniqueId }}_skills_short">
                                       @foreach(array_slice($skills, 0, $displayCount) as $skill)
                                          <span class="skill-badge">{{ $skill }}</span>
                                       @endforeach
                                       @if($totalSkills > $displayCount)
                                          <span class="skill-badge show-more-btn" style="cursor:pointer;" onclick="toggleSkills('{{ $uniqueId }}', true)">+{{ $totalSkills - $displayCount }} more</span>
                                       @endif
                                    </span>
                                    <span id="{{ $uniqueId }}_skills_full" style="display:none;">
                                       @foreach($skills as $skill)
                                          <span class="skill-badge">{{ $skill }}</span>
                                       @endforeach
                                       <span class="skill-badge show-less-btn" style="cursor:pointer;" onclick="toggleSkills('{{ $uniqueId }}', false)">Show less</span>
                                    </span>
                                 @endif
                              </div>
                              @push('scripts')
                              <script>
                                 function toggleSkills(id, showAll) {
                                    var shortEl = document.getElementById(id + '_skills_short');
                                    var fullEl = document.getElementById(id + '_skills_full');
                                    if (showAll) {
                                       shortEl.style.display = 'none';
                                       fullEl.style.display = '';
                                    } else {
                                       shortEl.style.display = '';
                                       fullEl.style.display = 'none';
                                    }
                                 }
                              </script>
                              @endpush
                              <p class="language">
                                 @if(!empty($astrologer['languages']) && is_array($astrologer['languages']))
                                    {{ implode(', ', $astrologer['languages']) }}
                                 @else
                                    {{ $astrologer['languages'] ?? '' }}
                                 @endif
                              </p>
                              <div class="astro-meta mb-2">
                                 <span class="me-2"><i class="fas fa-briefcase"></i> {{ $astrologer['experience'] ?? '0' }} yrs exp</span>
                                 <span class="me-2"><i class="fas fa-clock"></i> {{ $astrologer['duration'] ?? '0' }} min</span>
                                 <span><i class="fas fa-rupee-sign"></i> ₹{{ $astrologer['rate'] ?? '0' }}</span>
                              </div>
                              <div class="astro-actions">
                                 <a href="https://jyotish.astrorajumaharaj.com/consultant/{{ $astrologer['id'] ?? '' }}" class="btn btn-success btn-appointment">
                                    <i class="fas fa-calendar-check"></i> Get an Appointment
                                 </a>
                              </div>
                              <div class="rating">
                                 <i class="fas fa-star"></i> {{ $astrologer['rating'] ?? '4.5' }} | {{ $astrologer['reviews_count'] ?? '0' }} reviews
                              </div>
                           </div>
                        </div>
                     </div>
                     @endif
                  @endforeach
               @else
                  <!-- Fallback static astrologer if $astrologers is empty -->
                
               @endif
            </div>
         </div>
      </div>
   </section>
   <section class="section-padding drew">
      <div class="container">
         <div class="section-header ypoe">
            <div class="header-text">
               <h2>Buy Gemstones <span class="highlight-text">Online</span></h2>
               <p class="sub-heading">Products Of Trusted Excellence</p>
            </div>
            <a href="https://shop.astrorajumaharaj.com" class="view-all-btn">View All</a>
         </div>
         <div class="container my-2 mb-5 product_warp">
            <!-- Desktop Grid -->
            <div class="row g-4 d-md-flex">
               @if(!empty($products['data']['data']) && is_array($products['data']['data']))
                  @foreach($products['data']['data'] as $product)
                     <div class="col-md-3">
                        <div class="product-card">
                           <i class="bi bi-heart wishlist" onclick="toggleWishlist(this)"></i>
                           <img src="{{ $product['image_url'] ?? asset('assets/images/product_1.png') }}" alt="{{ $product['name'] ?? 'Product' }}">
                           <div class="rating">⭐ 4.5 | {{ $product['stock'] ?? '0' }}</div>
                           <h6 class="mt-2">{{ $product['name'] ?? 'Product Name' }}</h6>
                           <span class="price">₹{{ $product['final_price'] ?? $product['price'] ?? '0' }}</span>
                           @if(!empty($product['discount_price']) && $product['discount_price'] > 0)
                              <span class="old-price ms-2">₹{{ $product['price'] }}</span>
                           @endif
                           <div class="offer">
                              @if(!empty($product['discount_rate']) && $product['discount_rate'] > 0)
                                 {{ $product['discount_rate'] }}% OFF
                              @else
                              &nbsp;
                              @endif
                           </div>
                           <div class="d-grid gap-2 mt-3">
                              <button class="btn btn-cart" onclick="window.location.href='https://shop.astrorajumaharaj.com/products/{{ $product['slug'] ?? '' }}'">Add to Cart</button>
                              <button class="btn btn-buy" onclick="window.location.href='https://shop.astrorajumaharaj.com/products/{{ $product['slug'] ?? '' }}'">Buy Now</button>
                           </div>
                        </div>
                     </div>
                  @endforeach
               @else
                  <!-- Fallback static products if $products is empty -->
                  <div class="col-md-3">
                     <div class="product-card">
                        <i class="bi bi-heart wishlist" onclick="toggleWishlist(this)"></i>
                        <img src="{{ asset('assets/images/product_1.png') }}">
                        <div class="rating">⭐ 4.8 | 316</div>
                        <h6 class="mt-2">Rose Gold Princess Earrings</h6>
                        <span class="price">₹3,499</span>
                        <span class="old-price ms-2">₹5,799</span>
                        <div class="offer">EXTRA 16% OFF with coupon</div>
                        <div class="d-grid gap-2 mt-3">
                           <button class="btn btn-cart" onclick="window.location.href='https://shop.astrorajumaharaj.com/products/{{ $product['slug'] ?? '' }}'">Add to Cart</button>
                           <button class="btn btn-buy" onclick="window.location.href='https://shop.astrorajumaharaj.com/products/{{ $product['slug'] ?? '' }}'">Buy Now</button>
                        </div>
                     </div>
                  </div>
               @endif
            </div>
            <div class="view-all">
               <a href="https://shop.astrorajumaharaj.com">View All Products →</a>
            </div>
         </div>
      </div>
   </section>
   <section class="sale-banner-wrapper">
      <div class="container">
         <div class="sale-banner-placeholder">
            <div class="banner-content">
               <h4>Special Offer on Astrology Products</h4>
               <p>Authentic Gemstones, Yantras & Spiritual Remedies</p>
               <p>Carefully selected and energized products to support your health, career, relationships, and financial growth</p>
               <button>ORDER NOW</button>
            </div>
         </div>
      </div>
   </section>
   <section class="section-padding uhi drew2">
      <div class="container">
         <div class="section-header">
            <div class="header-text">
               <h2>Become a Skilled Vedic Astrologer <span class="highlight-text">Courses</span></h2>
               <p class="sub-heading">Learn Kundli analysis with practical, real-world application</p>
            </div>
         </div>
         <div class="courses-grid">
            <div class="course-card" data-aos="fade-right">
                 <div class="course-thumb">
                     <img src="{{ asset('assets/images/course-1.webp') }}" alt="Vedic Astrology Course">
                 </div>
                 <div class="course-body">
                     <div class="stars text-yellow">
                         <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                     </div>
                     <h3>Learn Vedic Astrology</h3>
                     <div class="instructor">
                         <div class="inst-icon"><i class="fas fa-user-circle"></i></div>
                         <span>Astro Tungeesh</span>
                     </div>
                     <div class="course-footer">
                         <button class="enroll-btn">Enroll Course</button>
                     </div>
                 </div>
             </div>
         
             <div class="course-card" data-aos="fade-up">
                 <div class="course-thumb">
                     <img src="{{ asset('assets/images/course-2.webp') }}" alt="Vedic Astrology Course">
                 </div>
                 <div class="course-body">
                     <div class="stars text-yellow">
                         <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                     </div>
                     <h3>Learn Vedic Astrology</h3>
                     <div class="instructor">
                         <div class="inst-icon"><i class="fas fa-user-circle"></i></div>
                         <span>Astro Tungeesh</span>
                     </div>
                     <div class="course-footer">
                         <div class="course-price">
                             <span>Rs. 1000/-</span>
                             <small>Inclusive of 18% GST</small>
                         </div>
                         <button class="icon-btn-outline"><i class="fas fa-shopping-bag"></i></button>
                     </div>
                 </div>
             </div>
         
             <div class="course-card" data-aos="fade-left">
                 <div class="course-thumb">
                     <img src="{{ asset('assets/images/course-3.webp') }}" alt="Vedic Astrology Course">
                 </div>
                 <div class="course-body">
                     <div class="stars text-yellow">
                         <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                     </div>
                     <h3>Learn Vedic Astrology</h3>
                     <div class="instructor">
                         <div class="inst-icon"><i class="fas fa-user-circle"></i></div>
                         <span>Astro Tungeesh</span>
                     </div>
                     <div class="course-footer">
                          <div class="course-price">
                             <span>Rs. 1000/-</span>
                             <small>Inclusive of 18% GST</small>
                         </div>
                         <button class="icon-btn-outline"><i class="fas fa-shopping-bag"></i></button>
                     </div>
                 </div>
             </div>
             
              <div class="course-card">
                 <div class="course-thumb">
                     <img src="{{ asset('assets/images/course-4.webp') }}" alt="Vedic Astrology Course">
                 </div>
                 <div class="course-body">
                     <div class="stars text-yellow">
                         <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                     </div>
                     <h3>Learn Vedic Astrology</h3>
                     <div class="instructor">
                         <div class="inst-icon"><i class="fas fa-user-circle"></i></div>
                         <span>Astro Tungeesh</span>
                     </div>
                     <div class="course-footer">
                          <div class="course-price">
                             <span>Rs. 1000/-</span>
                             <small>Inclusive of 18% GST</small>
                         </div>
                         <button class="icon-btn-outline"><i class="fas fa-shopping-bag"></i></button>
                     </div>
                 </div>
             </div>
         </div>
         <!-- <div class="owl-carousel owl-theme courses-carousel huwe">
            <div class="course-card" data-aos="fade-right">
               <div class="card h-100">
                  <img src="{{ asset('assets/images/course1.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-warning text-dark">Beginner</span>
                        <span class="text-muted"><i class="fas fa-clock"></i> 8 Weeks</span>
                     </div>
                     <h3>Diploma in Vedic Astrology</h3>
                     <p class="text-muted">Master the 12 Houses, Rashis, and Planet movements. Includes live sessions
                        with Gurus.</p>
                     <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-warning" style="width: 0%"></div>
                     </div>
                     <ul class="list-unstyled small text-muted mb-3">
                        <li><i class="fas fa-check text-success me-2"></i> Reading Birth Charts</li>
                        <li><i class="fas fa-check text-success me-2"></i> Dasha System</li>
                        <li><i class="fas fa-check text-success me-2"></i> Certification included</li>
                     </ul>
                     <div class="d-flex justify-content-between align-items-center mt-4">
                        <h4 class="mb-0">Rs 19999</h4>
                        <button class="btn btn-dark">Enroll Now</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-card" data-aos="fade-right">
               <div class="card h-100">
                  <img src="{{ asset('assets/images/course2.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-warning text-dark">Beginner</span>
                        <span class="text-muted"><i class="fas fa-clock"></i> 8 Weeks</span>
                     </div>
                     <h3>Diploma in Vedic Astrology</h3>
                     <p class="text-muted">Master the 12 Houses, Rashis, and Planet movements. Includes live sessions
                        with Gurus.</p>
                     <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-warning" style="width: 0%"></div>
                     </div>
                     <ul class="list-unstyled small text-muted mb-3">
                        <li><i class="fas fa-check text-success me-2"></i> Reading Birth Charts</li>
                        <li><i class="fas fa-check text-success me-2"></i> Dasha System</li>
                        <li><i class="fas fa-check text-success me-2"></i> Certification included</li>
                     </ul>
                     <div class="d-flex justify-content-between align-items-center mt-4">
                        <h4 class="mb-0">Rs 19999</h4>
                        <button class="btn btn-dark">Enroll Now</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="course-card" data-aos="fade-right">
               <div class="card h-100">
                  <img src="{{ asset('assets/images/course3.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-warning text-dark">Beginner</span>
                        <span class="text-muted"><i class="fas fa-clock"></i> 8 Weeks</span>
                     </div>
                     <h3>Diploma in Vedic Astrology</h3>
                     <p class="text-muted">Master the 12 Houses, Rashis, and Planet movements. Includes live sessions
                        with Gurus.</p>
                     <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-warning" style="width: 0%"></div>
                     </div>
                     <ul class="list-unstyled small text-muted mb-3">
                        <li><i class="fas fa-check text-success me-2"></i> Reading Birth Charts</li>
                        <li><i class="fas fa-check text-success me-2"></i> Dasha System</li>
                        <li><i class="fas fa-check text-success me-2"></i> Certification included</li>
                     </ul>
                     <div class="d-flex justify-content-between align-items-center mt-4">
                        <h4 class="mb-0">Rs 19999</h4>
                        <button class="btn btn-dark">Enroll Now</button>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
   </section>
   <div class="stats-bar">
      <div class="container stats-container">
         <div class="stat-item">
            <i class="fas fa-users"></i>
            <span>
               <strong>5,000+</strong><br>
               Verified Astrologers
            </span>
         </div>
         <div class="stat-item">
            <i class="fas fa-calendar-alt"></i>
            <span>
               <strong>24+ Years</strong><br>
               Trusted Experience
            </span>
         </div>
         <div class="stat-item">
            <i class="fas fa-smile"></i>
            <span>
               <strong>3 Crore+</strong><br>
               Satisfied Clients
            </span>
         </div>
         <div class="stat-item">
            <i class="fas fa-globe"></i>
            <span>
               <strong>85+</strong><br>
               Countries Served
            </span>
         </div>
      </div>
   </div>
   <section class="kundali-banner">
      <div class="container kundali-content">
         <!-- <h2>Check Your <span class="text-orange">Kundali</span> & Find Your <span class="text-orange">Best Match</span></h2>
   <button class="check-now-btn">CHECK NOW</button> -->
      </div>
   </section>
   <section class="section-padding horoscope-section">
      <div class="container">
         <div class="section-header-center">
            <h2>Horoscope - Daily, Weekly, Monthly & Yearly Predictions</h2>
            <p>Horoscopes provide daily, weekly, monthly and yearly astrological predictions,<br>helping you understand
               the influences of planets on your life.</p>
         </div>
         <div class="horoscope-section">
            <!-- Tabs -->
            <div class="horoscope-tabs">
               <button class="tab-btn active" data-tab="daily">Daily</button>
               <button class="tab-btn" data-tab="weekly">Weekly</button>
               <button class="tab-btn" data-tab="monthly">Monthly</button>
               <button class="tab-btn" data-tab="yearly">Yearly</button>
            </div>
            <!-- Zodiac Grid -->
            <div class="zodiac-grid">
               <div class="container">
                  <div class="row g-4">
                     <!-- Zodiac Card -->
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/download-1.svg"
                                 alt="Aries">
                           </div>
                           <h5>Aries</h5>
                           <p>Mar 21 – Apr 19</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/taurus.svg"
                                 alt="Taurus">
                           </div>
                           <h5>Taurus</h5>
                           <p>Apr 20 – May 20</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/12/Gemini1.svg"
                                 alt="Gemini">
                           </div>
                           <h5>Gemini</h5>
                           <p>May 21 – Jun 20</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/cancer.svg"
                                 alt="Cancer">
                           </div>
                           <h5>Cancer</h5>
                           <p>Jun 21 – Jul 22</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/leo.svg"
                                 alt="Leo">
                           </div>
                           <h5>Leo</h5>
                           <p>Jul 23 – Aug 22</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                 alt="Virgo">
                           </div>
                           <h5>Virgo</h5>
                           <p>Aug 23 – Sep 22</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                 alt="Virgo">
                           </div>
                           <h5>Libra</h5>
                           <p>Aug 23 – Sep 22</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                 alt="Virgo">
                           </div>
                           <h5>Scorpio</h5>
                           <p>Aug 23 – Sep 22</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                 alt="Virgo">
                           </div>
                           <h5>Sagittarius</h5>
                           <p>Aug 23 – Sep 22</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                 alt="Virgo">
                           </div>
                           <h5>Capricorn</h5>
                           <p>Aug 23 – Sep 22</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                 alt="Virgo">
                           </div>
                           <h5>Aquarius</h5>
                           <p>Aug 23 – Sep 22</p>
                        </a>
                     </div>
                     <div class="col-lg-2 col-md-4 col-6">
                        <a href="#" class="zodiac-card">
                           <div class="zodiac-icon">
                              <img
                                 src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                 alt="Virgo">
                           </div>
                           <h5>Pisces</h5>
                           <p>Aug 23 – Sep 22</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Horoscope Content -->
            <div class="horoscope-content">
               <div class="tab-content active" id="daily">Your daily horoscope will appear here.</div>
               <div class="tab-content" id="weekly">Your weekly horoscope will appear here.</div>
               <div class="tab-content" id="monthly">Your monthly horoscope will appear here.</div>
               <div class="tab-content" id="yearly">Your yearly horoscope will appear here.</div>
            </div>
         </div>
         <div class="prediction-box">
            <div class="prediction-date">December 11, 2025</div>
            <div class="prediction-section">
               <!-- Date Navigation -->
               <div class="date-nav">
                  <span data-day="yesterday">Yesterday</span>
                  <span class="active" data-day="today">Today</span>
                  <span data-day="tomorrow">Tomorrow</span>
               </div>
               <!-- Vertical Tabs Wrapper -->
               <div class="prediction-content-wrapper">
                  <!-- Vertical Tabs -->
                  <ul class="prediction-categories">
                     <li class="active" data-tab="personal">Personal</li>
                     <li data-tab="health">Health</li>
                     <li data-tab="profession">Profession</li>
                     <li data-tab="emotions">Emotions</li>
                     <li data-tab="travel">Travel</li>
                     <li data-tab="luck">Luck</li>
                  </ul>
                  <!-- Content Area -->
                  <div class="prediction-text">
                     <div class="tab-content active" id="personal">
                        <p>This day promises a mix of excitement and stability. Engage with loved ones and explore
                           activities that bring joy and growth.</p>
                     </div>
                     <div class="tab-content" id="health">
                        <p>Your health remains steady. Focus on hydration, balanced meals, and short breaks to
                           recharge your energy.</p>
                     </div>
                     <div class="tab-content" id="profession">
                        <p>Professional matters favor clear communication. Strategic planning will help you overcome
                           minor challenges.</p>
                     </div>
                     <div class="tab-content" id="emotions">
                        <p>Emotional clarity improves today. Express feelings calmly and avoid impulsive reactions.
                        </p>
                     </div>
                     <div class="tab-content" id="travel">
                        <p>Short-distance travel is favorable. Plan ahead to avoid last-minute stress.</p>
                     </div>
                     <div class="tab-content" id="luck">
                        <p>Luck supports thoughtful decisions. Trust your intuition while staying grounded.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <section class="about-section">
      <div class="container">
           <div class="section-header-center">
            <h2>A Journey of Wisdom, Guidance & Trust
Astrologer Raju Maharaj Ji</h2>
           
         </div>
         <div class="row g-4">

            <!-- Left -->
            <div class="col-lg-8">

               <div class="info-card">
                  <div class="label">Our Vision</div>
                  <p>
                     To become a trusted source of authentic Vedic astrology guidance, helping individuals gain clarity, confidence, and direction in life.
We envision empowering people to make better decisions through accurate Kundli analysis, spiritual wisdom, and practical solutions, creating a balanced and successful life.
                  </p>
               </div>

               <div class="info-card">
                  <div class="label">Our Mission</div>
                  <p>
                      Our mission is to provide honest, accurate, and meaningful astrology services that truly make a difference in people’s lives.
                  We are committed to:
                  <ul class="commitment-list" style="list-style: none; padding-left: 0;">
                     <li>✔ Delivering personalized guidance based on Kundli analysis</li>
                     <li>✔ Offering practical remedies rooted in Vedic traditions</li>
                     <li>✔ Making astrology simple, accessible, and trustworthy</li>
                     <li>✔ Supporting individuals in overcoming life challenges</li>
                  </ul>
Through our services, we aim to bring clarity, positivity, and transformation. </p>
               </div>

               <div class="info-card dark">
                  <div class="label">Our Journey</div>
                  <p>
                    Astrologer Raju Maharaj Ji is a highly respected and experienced Vedic astrologer, known for his deep knowledge of astrology, Kundli analysis, and spiritual guidance.
With years of dedicated practice and study, he has helped individuals from different walks of life gain clarity and direction in areas such as health, career, marriage, business, and finances.
His journey is rooted in traditional Vedic wisdom, combined with a practical approach to solving real-life problems. Through accurate analysis and meaningful remedies, he continues to guide people toward a more balanced and fulfilling life.
                  </p>
               </div>

            </div>

            <!-- Right -->
            <div class="col-lg-4">
               <div class="image-box">

                  <div class="image-overlay"></div>

                  <div class="image-content">

                     <!-- <h2>
                        About Me – Your Trusted Astrologer
                     </h2>

                     <a href="{{ url('/about') }}" class="contact-btn">Read More</a> -->

                  </div>

               </div>
            </div>

         </div>
      </div>
   </section>




   <section class="donation-section">
      <div class="container">
         <div class="donation-banner" style="background-image: url('{{ asset('assets/images/donate-now-banner.png') }}');">
            <div class="donation-overlay"></div>
            <div class="donation-content">
               <h4>Support Education. Change Lives.</h4>
               <p>
An Initiative by Astrologer Raju Maharaj Ji
Your contribution can help provide education, resources, and a better future for underprivileged children.
Even a small step from you can create a big positive impact in someone’s life.

<br>Support Our School Initiative
</p>

               <a href="donation.php" class="donate-btn" style="margin-bottom: 38px;">Make a Donation</a>
            </div>
         </div>
      </div>
      </div>
   </section>


   <section class="section-padding gallery-section">
      <div class="container">

         <div class="section-header">
            <h2>Celestial Moments <span class="highlight-text">Gallery</span></h2>
            <a href="#" class="view-all-btn">View All</a>
         </div>

         <div class="video-grid">

            <div class="video-wrapper">
               <iframe src="https://www.youtube.com/embed/VIDEO_ID1" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen>
               </iframe>
            </div>

            <div class="video-wrapper">
               <iframe src="https://www.youtube.com/embed/VIDEO_ID2" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen>
               </iframe>
            </div>

            <div class="video-wrapper">
               <iframe src="https://www.youtube.com/embed/VIDEO_ID3" title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen>
               </iframe>
            </div>

         </div>
      </div>
   </section>




   <section class="newsletter-section">
      <div class="container">
         <div class="newsletter-box">
            <div class="row align-items-center">
               <!-- Left Content -->
               <div class="col-lg-6 mb-4 mb-lg-0">
                  <div class="newsletter-icon"><img src="{{ asset('assets/images/mail.png') }}" alt="Newsletter Icon"></div>
                  <h2 class="newsletter-title">Subscribe to our newsletter</h2>
                  <p class="newsletter-text">
                     Enter your contact details to get the latest news and trends
                     to help boost your business.
                  </p>
               </div>
               <!-- Right Form -->
               <div class="col-lg-6">
                  <form class="newsletter-form" onsubmit="subscribe(event)">
                     <div class="mb-3">
                        <input type="email" id="email" class="form-control" placeholder="Email address" required>
                     </div>
                     <p class="small-text">
                        We collect and process your personal data to better respond to your requests.
                        Learn more about how we manage your data and your rights.
                     </p>
                     <button type="submit" class="newsletter-btn">Sign up</button>
                     <div class="success-message" id="successMsg">
                        Thank you for subscribing!
                     </div>
                     <div class="error-message" id="errorMsg">
                        Please enter a valid email address.
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>@endsection
