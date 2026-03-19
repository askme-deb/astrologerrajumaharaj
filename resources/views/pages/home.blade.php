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
   </div>
   <div class="banner-content">
      <h1>Your Future Begins with the Right Guidance</h1>
      <p>Talk to experienced astrologers for clarity in love, career, health, and finances—anytime, anywhere.</p>
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
                  Get personalized guidance and expert advice tailored to your needs
                  through our professional consultation services.
               </p>
               <div class="card-footer">
                  <div class="schedule">
                     <span>M T W T F S S</span>
                     <small>Available All Week</small>
                  </div>
                  <a href="https://jyotish.astrorajumaharaj.com" class="card-btn">Learn More</a>
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
                  Join our interactive online classes to learn from experts and
                  enhance your knowledge from the comfort of your home.
               </p>
               <div class="card-footer">
                  <div class="schedule">
                     <span>M T W T F S S</span>
                     <small>Flexible Timings</small>
                  </div>
                  <a href="#" class="card-btn">Learn More</a>
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
                  Explore our wide range of authentic products designed to support
                  your journey and improve your lifestyle.
               </p>
               <div class="card-footer">
                  <div class="schedule">
                     <span>M T W T F S S</span>
                     <small>Shop Anytime</small>
                  </div>
                  <a href="https://shop.astrorajumaharaj.com/" class="card-btn">Learn More</a>
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
                  <div class="banner-item">
                     <div class="astro-card">
                        <div class="astro-image">
                           <img src="{{ $astrologer['image_url'] ?? asset('assets/images/top 1 astrologer.png') }}" alt="{{ $astrologer['name'] ?? 'Astrologer' }}">
                        </div>
                        <div class="astro-info">
                           <h3>{{ $astrologer['name'] ?? 'Astrologer Name' }}</h3>
                           <div class="nhgd">
                              @if(!empty($astrologer['skills']) && is_array($astrologer['skills']))
                                 @foreach($astrologer['skills'] as $skill)
                                    <span class="skill-badge">{{ $skill }}</span>
                                 @endforeach
                              @endif
                           </div>
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
            <a href="https://shop.astrorajumaharaj.com/products" class="view-all-btn">View All</a>
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
                              @endif
                           </div>
                           <div class="d-grid gap-2 mt-3">
                              <button class="btn btn-cart" onclick="addToCart()">Add to Cart</button>
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
               <a href="https://shop.astrorajumaharaj.com/products">View All Products →</a>
            </div>
         </div>
      </div>
   </section>
   <section class="sale-banner-wrapper">
      <div class="container">
         <div class="sale-banner-placeholder">
            <div class="banner-content">
               <h2>15% OFF <br> SUPER SALE</h2>
               <button>ORDER NOW</button>
            </div>
         </div>
      </div>
   </section>
   <section class="section-padding uhi drew2">
      <div class="container">
         <div class="section-header">
            <div class="header-text">
               <h2>Our Featured <span class="highlight-text">Courses</span></h2>
               <p class="sub-heading">We Invite you</p>
            </div>
         </div>
         <!-- 
         <div class="courses-grid">
            <div class="course-card" data-aos="fade-right">
                 <div class="course-thumb">
                     <img src="{{ asset('assets/images/courses post.png') }}" alt="Vedic Astrology Course">
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
                     <img src="images/courses post.png" alt="Vedic Astrology Course">
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
                     <img src="images/courses post.png" alt="Vedic Astrology Course">
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
                     <img src="images/courses post.png" alt="Vedic Astrology Course">
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
         </div> -->
         <div class="owl-carousel owl-theme courses-carousel huwe">
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
                        <h4 class="mb-0">Rs.199</h4>
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
                        <h4 class="mb-0">Rs.199</h4>
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
                        <h4 class="mb-0">Rs.199</h4>
                        <button class="btn btn-dark">Enroll Now</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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
         <div class="row g-4">

            <!-- Left -->
            <div class="col-lg-5">

               <div class="info-card">
                  <div class="label">Our Vision</div>
                  <p>
                     Fusce sed pellentesque dui. Nunc lacinia, nibh vitae gravida
                     condimentum, turpis neque commodo mauris, id rutrum lacus nisl a risus.
                  </p>
               </div>

               <div class="info-card">
                  <div class="label">Our Mission</div>
                  <p>
                     Our vision is to become a trusted leader in our industry by continuously improving our services and
                     embracing new technologies. We aim to inspire growth, creativity, and positive change for our
                     clients and communities. </p>
               </div>

               <div class="info-card dark">
                  <div class="label">Our History</div>
                  <p>
                     Astrologer Raju Maharaj is a highly respected and experienced Vedic astrologer, known for his deep
                     knowledge of astrology, horoscope analysis, and spiritual guidance.
                  </p>
               </div>

            </div>

            <!-- Right -->
            <div class="col-lg-7">
               <div class="image-box">

                  <div class="image-overlay"></div>

                  <div class="image-content">

                     <h2>
                        About Me – Your Trusted Astrologer
                     </h2>

                     <button class="contact-btn">Read More</button>

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
               <h2>Small Acts. Big Change.</h2>
               <p>Join hands with us to support meaningful causes and create a brighter future.</p>
               <a href="donation.php" class="donate-btn">Make a Donation</a>
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
