@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="banner">
    <div class="slider">
        <img src="{{ asset('assets/images/banner/banner-1.png') }}" alt="">
        <img src="{{ asset('assets/images/banner/banner-2.png') }}" alt="">
        <img src="{{ asset('assets/images/banner/banner-3.png') }}" alt="">
        <img src="{{ asset('assets/images/banner/banner-4.png') }}" alt="">
        <img src="{{ asset('assets/images/banner/banner-5.png') }}" alt="">
        <img src="{{ asset('assets/images/banner/banner-6.png') }}" alt="">
        <img src="{{ asset('assets/images/banner/banner-7.png') }}" alt="">

    </div>

    <div class="banner-content">
        <h1>Your Future Begins with the Right Guidance</h1>
        <p>Talk to experienced astrologers for clarity in love, career, health, and finances—anytime, anywhere.</p>
        <a href="#" class="btn">Talk to an Expert</a>
    </div>
</section>





<section class="info-cards-section">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="card">
                    <div class="card-icon">
                        <img src="{{ asset('assets/images/1st moon.png') }}" alt="Planet Icon">
                    </div>
                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <div class="card-footer">
                        <div class="schedule">
                            <span>M T W T F S S</span>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                        <a href="#" class="card-btn">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="card">
                    <div class="card-icon">
                        <img src="{{ asset('assets/images/blue dimond.png') }}" alt="Gem Icon">
                    </div>
                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <div class="card-footer">
                        <div class="schedule">
                            <span>M T W T F S S</span>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                        <a href="#" class="card-btn">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="card">
                    <div class="card-icon">
                        <img src="{{ asset('assets/images/2nd moon.png') }}" alt="Zodiac Icon">
                    </div>
                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <div class="card-footer">
                        <div class="schedule">
                            <span>M T W T F S S</span>
                            <small>Lorem ipsum dolor sit amet</small>
                        </div>
                        <a href="#" class="card-btn">Learn more</a>
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
            <a href="#" class="view-all-btn">View All</a>
        </div>

        <div class="row g-2 astrologers-grid">


            <div class="owl-carousel owl-theme">
                <div class="banner-item">
                    <div class="astro-card">

                        <div class="astro-image">
                            <img src="{{ asset('assets/images/top 1 astrologer.png') }}" alt="Acharyaa Parul Verma">
                        </div>
                        <div class="astro-info">
                            <h3>Acharyaa Parul Verma</h3>
                            <p class="skills">Vedic, Vastu</p>
                            <p class="language">Hindi, Bengali</p>
                            <div class="astro-actions">
                                <button class="btn-call"><i class="fas fa-phone-alt"></i> Call</button>
                                <button class="btn-chat"><i class="fas fa-comment-dots"></i> Chat</button>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i> 4.3 | 2228 orders
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="banner-item">
   <div class="astro-card">
                    <div class="astro-image">
                        <img src="images/top 1 astrologer.png" alt="Acharyaa Parul Verma">
                    </div>
                    <div class="astro-info">
                        <h3>Acharyaa Parul Verma</h3>
                        <p class="skills">Vedic, Vastu</p>
                        <p class="language">Hindi, Bengali</p>
                        <div class="astro-actions">
                            <button class="btn-call"><i class="fas fa-phone-alt"></i> Call</button>
                            <button class="btn-chat"><i class="fas fa-comment-dots"></i> Chat</button>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i> 4.3 | 2228 orders
                        </div>
                    </div>
                </div>
  </div>

  <div class="banner-item">
     <div class="astro-card">
                    <div class="astro-image">
                        <img src="images/top 1 astrologer.png" alt="Acharyaa Parul Verma">
                    </div>
                    <div class="astro-info">
                        <h3>Acharyaa Parul Verma</h3>
                        <p class="skills">Vedic, Vastu</p>
                        <p class="language">Hindi, Bengali</p>
                        <div class="astro-actions">
                            <button class="btn-call"><i class="fas fa-phone-alt"></i> Call</button>
                            <button class="btn-chat"><i class="fas fa-comment-dots"></i> Chat</button>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i> 4.3 | 2228 orders
                        </div>
                    </div>
                </div>
  </div> -->
            </div>







        </div>
    </div>
</section>

<section class="section-padding drew">
    <div class="container">
        <div class="section-header">
            <div class="header-text">
                <h2>Buy Gemstones <span class="highlight-text">Online</span></h2>
                <p class="sub-heading">Products Of Trusted Excellence</p>
            </div>
            <a href="#" class="view-all-btn">View All</a>
        </div>


        <div class="owl-carousel gemstones-carousel owl-theme">

            <div class="item">
                <div class="gem-card" data-aos="fade-up">
                    <div class="gem-img-box">
                        <img src="{{ asset('assets/images/product_4.png') }}" alt="Yellow Sapphire">
                    </div>
                    <h3>Yellow Sapphire</h3>
                    <p class="gem-desc">Divine Luck, Prosperity, Blissful Matrimony</p>
                    <div class="price">Rs. 3000/-</div>
                    <div class="gem-footer">
                        <button class="icon-btn"><i class="fas fa-shopping-bag"></i></button>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="gem-card">
                    <div class="badge-off">20% Off</div>
                    <div class="gem-img-box">
                        <img src="{{ asset('assets/images/product_1.png') }}" alt="Blue Sapphire">
                    </div>
                    <h3>Blue Sapphire</h3>
                    <p class="gem-desc">Great Fame, Discipline, Removes Misfortunes</p>
                    <div class="price">
                        <span class="old-price">Rs. 5000/-</span>
                        <span class="new-price">Rs. 3000/-</span>
                    </div>
                    <div class="gem-footer">
                        <button class="icon-btn"><i class="fas fa-shopping-bag"></i></button>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="gem-card">
                    <div class="gem-img-box">
                        <img src="{{ asset('assets/images/product_2.png') }}" alt="Emerald">
                    </div>
                    <h3>Emerald</h3>
                    <p class="gem-desc">Vocal Charm, Creativity, Success in Business</p>
                    <div class="price">Rs. 800/-</div>
                    <div class="gem-footer">
                        <button class="icon-btn"><i class="fas fa-shopping-bag"></i></button>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="gem-card">
                    <div class="gem-img-box">
                        <img src="{{ asset('assets/images/product_3.png') }}" alt="Ruby">
                    </div>
                    <h3>Ruby</h3>
                    <p class="gem-desc">Great Health, Will Power, Fame & Reputation</p>
                    <div class="price">Rs. 3500/-</div>
                    <div class="gem-footer">
                        <button class="icon-btn"><i class="fas fa-shopping-bag"></i></button>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>
            </div>

        </div>




</section>

<section class="sale-banner-wrapper">
    <div class="container">
        <div class="sale-banner-placeholder">
            <div class="banner-content">
                <h2>20% OFF <br> SUPER SALE</h2>
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
                <div class="course-thumb">
                    <img src="{{ asset('assets/images/courses-post.png') }}" alt="Vedic Astrology Course">
                </div>
                <div class="course-body">
                    <div class="stars text-yellow">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
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
                    <img src="{{ asset('assets/images/courses-post.png') }}" alt="Vedic Astrology Course">
                </div>
                <div class="course-body">
                    <div class="stars text-yellow">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
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
                    <img src="images/courses-post.png" alt="Vedic Astrology Course">
                </div>
                <div class="course-body">
                    <div class="stars text-yellow">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
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
                <!-- <div class="zodiac-item active"><img src="images/hs1.png"><span>Aries</span></div>
            <div class="zodiac-item"><img src="images/hs2.png"><span>Taurus</span></div>
            <div class="zodiac-item"><img src="images/hs3.png"><span>Gemini</span></div>
            <div class="zodiac-item"><img src="images/hs4.png"><span>Cancer</span></div>
            <div class="zodiac-item"><img src="images/hs5.png"><span>Leo</span></div>
            <div class="zodiac-item"><img src="images/hs6.png"><span>Virgo</span></div>
            <div class="zodiac-item"><img src="images/hs7.png"><span>Libra</span></div>
            <div class="zodiac-item"><img src="images/hs1.png"><span>Scorpio</span></div>
            <div class="zodiac-item"><img src="images/hs1.png"><span>Sagittarius</span></div>
            <div class="zodiac-item"><img src="images/hs1.png"><span>Capricorn</span></div>
            <div class="zodiac-item"><img src="images/hs1.png"><span>Aquarius</span></div>
            <div class="zodiac-item"><img src="images/hs1.png"><span>Pisces</span></div> -->

                <div class="container">
                    <div class="row g-4">

                        <!-- Zodiac Card -->
                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/download-1.svg"
                                        alt="Aries">
                                </div>
                                <h5>Aries</h5>
                                <p>Mar 21 – Apr 19</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/taurus.svg"
                                        alt="Taurus">
                                </div>
                                <h5>Taurus</h5>
                                <p>Apr 20 – May 20</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/12/Gemini1.svg"
                                        alt="Gemini">
                                </div>
                                <h5>Gemini</h5>
                                <p>May 21 – Jun 20</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/cancer.svg"
                                        alt="Cancer">
                                </div>
                                <h5>Cancer</h5>
                                <p>Jun 21 – Jul 22</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/leo.svg"
                                        alt="Leo">
                                </div>
                                <h5>Leo</h5>
                                <p>Jul 23 – Aug 22</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                        alt="Virgo">
                                </div>
                                <h5>Virgo</h5>
                                <p>Aug 23 – Sep 22</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                        alt="Virgo">
                                </div>
                                <h5>Libra</h5>
                                <p>Aug 23 – Sep 22</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                        alt="Virgo">
                                </div>
                                <h5>Scorpio</h5>
                                <p>Aug 23 – Sep 22</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                        alt="Virgo">
                                </div>
                                <h5>Sagittarius</h5>
                                <p>Aug 23 – Sep 22</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                        alt="Virgo">
                                </div>
                                <h5>Capricorn</h5>
                                <p>Aug 23 – Sep 22</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
                                        alt="Virgo">
                                </div>
                                <h5>Aquarius</h5>
                                <p>Aug 23 – Sep 22</p>
                            </a>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="#" class="zodiac-card">
                                <div class="zodiac-icon">
                                    <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/virgo.svg"
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

<section class="section-padding about-me-section">
    <div class="container about-container">
        <div class="about-text">
            <h2>About Me – Your Trusted Astrologer</h2>
           <p>Astrologer <b>Raju Maharaj</b> is a highly respected and experienced Vedic astrologer, known for his deep knowledge of astrology, horoscope analysis, and spiritual guidance. With years of dedicated practice, he has helped thousands of individuals find clarity, balance, and direction in their lives.</p>
            <p>Raju Maharaj specializes in <b>Vedic Astrology, Kundli Matching, Marriage & Relationship Guidance, Career and Business Astrology, Health Predictions, and Gemstone Consultation</b>.</p>
           <a href="about.php" class="btn btn-primary header-btn">Read More</a>
        </div>
        <div class="about-image">
            <img src="{{ asset('assets/images/about us circle.png') }}" alt="Zodiac Wheel" class="rotating-wheel">
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
            <div class="video-card">
                <img src="{{ asset('assets/images/video1.png') }}" alt="Celestial Video 1">
            </div>
            <div class="video-card">
                <img src="{{ asset('assets/images/video2.png') }}" alt="Celestial Video 2">
            </div>
            <div class="video-card">
                <img src="{{ asset('assets/images/video3.png') }}" alt="Celestial Video 3">
            </div>
        </div>
    </div>
</section>

<section class="subscribe-section">
    <div class="container">
        <div class="subscribe-box" style="background-image: url('{{ asset('assets/images/subscribe banner.png') }}');">
            <div class="subscribe-content">
                <h3>Subscribe for exclusive offers and updates!</h3>
                <form class="subscribe-form">
                    <input type="email" placeholder="Email" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
