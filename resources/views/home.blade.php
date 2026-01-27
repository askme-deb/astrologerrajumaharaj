@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="banner home_warp">
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
        <a href="https://jyotish.astrorajumaharaj.com/consultation-booking" target="_blank" class="btn">Talk to an Expert</a>
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
                    <h3>Personal Horoscope Analysis</h3>
                    <p>Get a detailed reading of your birth chart to understand your strengths, challenges, and life path. Discover how planetary positions influence your personality and destiny.</p>
                    <div class="card-footer">
                        <div class="schedule">
                            <span>M T W T F S S</span>
                            <small>Available: Mon-Sun, 9am-9pm</small>
                        </div>
                        <a href="https://jyotish.astrorajumaharaj.com/consultation" class="card-btn">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="card">
                    <div class="card-icon">
                        <img src="{{ asset('assets/images/blue dimond.png') }}" alt="Gem Icon">
                    </div>
                    <h3>Gemstone Recommendations</h3>
                    <p>Find the perfect gemstone to enhance your luck, health, and prosperity. Receive expert advice on which stones suit your astrological profile and how to wear them for maximum benefit.</p>
                    <div class="card-footer">
                        <div class="schedule">
                            <span>M T W T F S S</span>
                            <small>Consultation: Daily, 10am-8pm</small>
                        </div>
                        <a href="https://ecommerce.astrorajumaharaj.com/" class="card-btn">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

                <div class="card">
                    <div class="card-icon">
                        <img src="{{ asset('assets/images/2nd moon.png') }}" alt="Zodiac Icon">
                    </div>
                    <h3>Daily & Yearly Predictions</h3>
                    <p>Stay ahead with accurate daily, weekly, and yearly horoscopes. Get insights on love, career, health, and finances tailored to your zodiac sign.</p>
                    <div class="card-footer">
                        <div class="schedule">
                            <span>M T W T F S S</span>
                            <small>Updated: Every Morning</small>
                        </div>
                        <a href="https://jyotish.astrorajumaharaj.com/consultation" class="card-btn">Learn more</a>
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
            <a href="https://jyotish.astrorajumaharaj.com/consultation" target="_blank" class="view-all-btn">View All</a>
        </div>

        <div class="astrologers-carousel-wrapper">
            <div id="astrologersLoading" style="padding: 30px 0; text-align: center;">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div id="astrologersError" class="alert alert-danger" style="display:none;"></div>
            <div id="astrologersGrid" class="owl-carousel owl-theme astrologers-carousel"></div>
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
            <a href="https://ecommerce.astrorajumaharaj.com/" target="_blank" class="view-all-btn">View All</a>
        </div>


        <div class="owl-carousel gemstones-carousel owl-theme">
            @foreach($products as $product)
                <div class="item">
                    <div class="gem-card" data-aos="fade-up">
                        @if(isset($product['discount_rate']) && $product['discount_rate'] > 0)
                            <div class="badge-off">{{ (int)$product['discount_rate'] }}% Off</div>
                        @endif
                        <div class="gem-img-box">
                            <img src="{{ $product['image_url'] ?? asset('assets/images/default.png') }}" alt="{{ $product['name'] }}">
                        </div>
                        <h3>{{ $product['name'] }}</h3>
                        {!! $product['sort_description'] ?? '' !!}
                        <div class="price">
                            @if(isset($product['discount_price']) && $product['discount_price'] > 0)
                                <span class="old-price">Rs. {{ $product['price'] }}/-</span>
                                <span class="new-price">Rs. {{ $product['discount_price'] }}/-</span>
                            @else
                                Rs. {{ $product['price'] }}/-
                            @endif
                        </div>
                        <div class="gem-footer">
                            <button class="icon-btn"><i class="fas fa-shopping-bag"></i></button>
                            <a href="https://ecommerce.astrorajumaharaj.com/product/details/{{ $product['slug'] }}" target="_blank" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>

<section class="sale-banner-wrapper">
    <div class="container">
        <div class="sale-banner-placeholder">
            <div class="banner-content">
                <h2>20% OFF <br> SUPER SALE</h2>
                <button onclick="https://ecommerce.astrorajumaharaj.com/">ORDER NOW</button>
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
        <div class="owl-carousel owl-theme courses-carousel huwe">

            <div class="course-card" data-aos="fade-right">
                <div class="course-thumb">
                    <img src="{{ asset('assets/images/course1.png') }}" alt="Vedic Astrology Course">
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
                    <img src="{{ asset('assets/images/course2.png') }}" alt="Vedic Astrology Course">
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
                    <!-- <div class="course-footer">
                        <div class="course-price">
                            <span>Rs. 1000/-</span>
                            <small>Inclusive of 18% GST</small>
                        </div>
                        <button class="icon-btn-outline"><i class="fas fa-shopping-bag"></i></button>
                    </div> -->
                    <div class="course-footer">
                        <button class="enroll-btn">Enroll Course</button>
                    </div>
                </div>
            </div>

            <div class="course-card" data-aos="fade-left">
                <div class="course-thumb">
                    <img src="{{ asset('assets/images/course3.png') }}" alt="Vedic Astrology Course">
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
                    <!-- <div class="course-footer">
                        <div class="course-price">
                            <span>Rs. 1000/-</span>
                            <small>Inclusive of 18% GST</small>
                        </div>
                        <button class="icon-btn-outline"><i class="fas fa-shopping-bag"></i></button>
                    </div> -->
                    <div class="course-footer">
                        <button class="enroll-btn">Enroll Course</button>
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
                <strong>100+</strong><br>
                Verified Astrologers
            </span>
        </div>

        <div class="stat-item">
            <i class="fas fa-calendar-alt"></i>
            <span>
                <strong>15+ Years</strong><br>
                Trusted Experience
            </span>
        </div>

        <div class="stat-item">
            <i class="fas fa-smile"></i>
            <span>
                <strong>10k+</strong><br>
                Satisfied Clients
            </span>
        </div>

        <div class="stat-item">
            <i class="fas fa-globe"></i>
            <span>
                <strong>10+</strong><br>
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



        <section class="section-padding horoscope-section">
            <div class="container">
                <div class="section-header-center">
                    <h2>Horoscope Predictions</h2>
                    <p>Daily, Weekly, Monthly & Yearly Horoscope based on your Zodiac sign</p>
                </div>

                <!-- Tabs -->
                <div class="horoscope-tabs text-center mb-4">
                    <button class="tab-btn active" data-period="daily">Daily</button>
                    <button class="tab-btn" data-period="weekly">Weekly</button>
                    <button class="tab-btn" data-period="monthly">Monthly</button>
                    <button class="tab-btn" data-period="yearly">Yearly</button>
                </div>

                <!-- Zodiac Grid -->
                <div class="row g-4 zodiac-grid">
                    @php
                    $zodiacs = [
                    ['name'=>'Aries','sign'=>'aries','date'=>'Mar 21 – Apr 19','icon'=>'download-1.svg'],
                    ['name'=>'Taurus','sign'=>'taurus','date'=>'Apr 20 – May 20','icon'=>'taurus.svg'],
                    ['name'=>'Gemini','sign'=>'gemini','date'=>'May 21 – Jun 20','icon'=>'Gemini1.svg'],
                    ['name'=>'Cancer','sign'=>'cancer','date'=>'Jun 21 – Jul 22','icon'=>'cancer.svg'],
                    ['name'=>'Leo','sign'=>'leo','date'=>'Jul 23 – Aug 22','icon'=>'leo.svg'],
                    ['name'=>'Virgo','sign'=>'virgo','date'=>'Aug 23 – Sep 22','icon'=>'virgo.svg'],
                    ['name'=>'Libra','sign'=>'libra','date'=>'Sep 23 – Oct 22','icon'=>'libra.svg'],
                    ['name'=>'Scorpio','sign'=>'scorpio','date'=>'Oct 23 – Nov 21','icon'=>'scorpio.svg'],
                    ['name'=>'Sagittarius','sign'=>'sagittarius','date'=>'Nov 22 – Dec 21','icon'=>'sagittarius.svg'],
                    ['name'=>'Capricorn','sign'=>'capricorn','date'=>'Dec 22 – Jan 19','icon'=>'capricorn.svg'],
                    ['name'=>'Aquarius','sign'=>'aquarius','date'=>'Jan 20 – Feb 18','icon'=>'aquarius.svg'],
                    ['name'=>'Pisces','sign'=>'pisces','date'=>'Feb 19 – Mar 20','icon'=>'pisces.svg'],
                    ];
                    @endphp

                    @foreach($zodiacs as $zodiac)
                    <div class="col-lg-12 col-md-4 col-6">
                        <a href="javascript:void(0)"
                            class="zodiac-card"
                            data-sign="{{ $zodiac['sign'] }}">
                            <div class="zodiac-icon">
                                <img src="https://kamleshyadav.com/wp/astrologer/demo2/wp-content/uploads/sites/3/2021/09/{{ $zodiac['icon'] }}"
                                    alt="{{ $zodiac['name'] }}">
                            </div>
                            <h5>{{ $zodiac['name'] }}</h5>
                            <p>{{ $zodiac['date'] }}</p>
                        </a>
                    </div>
                    @endforeach
                </div>

                <!-- Horoscope Output -->
                <div class="horoscope-content mt-4">
                    <div id="horoscopeResult" class="alert alert-info text-center">
                        Select a zodiac sign to see horoscope.
                    </div>
                </div>
            </div>
        </section>


        <div class="prediction-box">
            <div class="prediction-date" id="predictionDate">Today</div>
            <div class="prediction-section">
                <!-- Date Navigation -->
                <div class="date-nav" id="predictionDateNav">
                    <span data-day="yesterday" id="predDayYesterday">Yesterday</span>
                    <span class="active" data-day="today" id="predDayToday">Today</span>
                    <span data-day="tomorrow" id="predDayTomorrow">Tomorrow</span>
                </div>
                <!-- Vertical Tabs Wrapper -->
                <div class="prediction-content-wrapper">
                    <!-- Vertical Tabs -->
                    <ul class="prediction-categories" id="predictionCategories">
                        <li class="active" data-tab="personal" id="predCatPersonal">Personal</li>
                        <li data-tab="health" id="predCatHealth">Health</li>
                        <li data-tab="profession" id="predCatProfession">Profession</li>
                        <li data-tab="emotions" id="predCatEmotions">Emotions</li>
                        <li data-tab="travel" id="predCatTravel">Travel</li>
                        <li data-tab="luck" id="predCatLuck">Luck</li>
                    </ul>
                    <!-- Content Area -->
                    <div class="prediction-text">
                        <div class="tab-content active" id="personal"><p>Loading prediction...</p></div>
                        <div class="tab-content" id="health"><p></p></div>
                        <div class="tab-content" id="profession"><p></p></div>
                        <div class="tab-content" id="emotions"><p></p></div>
                        <div class="tab-content" id="travel"><p></p></div>
                        <div class="tab-content" id="luck"><p></p></div>
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
                <a href="#" class="donate-btn">Make a Donation</a>
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
            <a href="{{ route('about') }}" class="btn btn-primary header-btn">Read More</a>
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
            <!-- <a href="#" class="view-all-btn">View All</a> -->
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

@push('scripts')
<script>
    (function() {
        const endpoint = @json($astrologersEndpoint);
        console.log('Astrologers API endpoint:', endpoint);
        const loadingEl = document.getElementById('astrologersLoading');
        const errorEl = document.getElementById('astrologersError');
        const gridEl = document.getElementById('astrologersGrid');

        const escapeHtml = (value) => {
            const text = String(value ?? '');
            return text
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');
        };

        const renderCard = (a) => {
            const name = escapeHtml(a.name);
            let skills = '';
            if (Array.isArray(a.skills)) {
                if (typeof a.skills[0] === 'object' && a.skills[0] !== null && 'name' in a.skills[0]) {
                    skills = a.skills.map(s => escapeHtml(s.name)).join(', ');
                } else {
                    skills = a.skills.map(escapeHtml).join(', ');
                }
            } else {
                skills = escapeHtml(a.skills);
            }
            const languages = Array.isArray(a.languages) ? a.languages.map(escapeHtml).join(', ') : escapeHtml(a.languages);
            const exp = Number(a.experience ?? 0);
            const rating = Number(a.rating ?? 0).toFixed(1);
            const consults = Number(a.consultations ?? 0);
            const imageUrl = escapeHtml(a.image_url);

            return `
                <div class="astro-card">
                    <div class="astro-image">
                        <img src="${imageUrl}" alt="${name}">
                    </div>
                    <div class="astro-info">
                        <h3>${name}</h3>
                        <div class="skills">
                            ${skills.split(', ').map(skill => `<span class="skill-badge">${skill}</span>`).join(' ')}
                        </div>
                        <style>
                            .skill-badge {
                                display: inline-block;
                                background: #e3e7ff;
                                color: #2a2e4a;
                                font-size: 13px;
                                padding: 4px 10px;
                                border-radius: 12px;
                                margin: 2px 4px 2px 0;
                                font-weight: 500;
                                letter-spacing: 0.02em;
                            }
                        </style>
                        <p class="language">${languages}</p>
                        <p class="experience"><i class="fas fa-briefcase"></i> ${exp} Years Experience</p>
                        <div class="astro-actions">
                                <a href="https://jyotish.astrorajumaharaj.com/consultation-booking?astrologer=${encodeURIComponent(name)}" class="btn btn-success btn-appointment">
                                    <i class="fas fa-calendar-check"></i> Get an Appointment
                                </a>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i> ${rating} | ${consults.toLocaleString()}+ consultations
                        </div>
                    </div>
                </div>
            `;
        };

        const showError = (message) => {
            if (loadingEl) loadingEl.style.display = 'none';
            if (gridEl) gridEl.innerHTML = '';
            if (errorEl) {
                errorEl.style.display = '';
                errorEl.textContent = message;
            }
        };


        const load = async () => {
            try {
                const res = await fetch(endpoint, {
                    headers: {
                        'Accept': 'application/json'
                    }
                });
                if (!res.ok) throw new Error(`Request failed: ${res.status}`);

                const payload = await res.json();
                console.log('Astrologers API response:', payload);
                const items = Array.isArray(payload?.data) ? payload.data : [];
                if (!Array.isArray(payload?.data)) {
                    showError('API response format error.');
                    return;
                }

                if (loadingEl) loadingEl.style.display = 'none';
                if (errorEl) errorEl.style.display = 'none';

                gridEl.innerHTML = items.map(renderCard).join('');

                // Initialize Owl Carousel after content is loaded
                if (window.jQuery && typeof window.jQuery.fn.owlCarousel === 'function') {
                    window.jQuery('.astrologers-carousel').owlCarousel({
                        loop: true,
                        margin: 20,
                        nav: true,
                        dots: false,
                        responsive: {
                            0: { items: 1 },
                            600: { items: 2 },
                            1000: { items: 3 }
                        }
                    });
                } else {
                    console.warn('Owl Carousel is not loaded.');
                }
            } catch (e) {
                showError('Could not load astrologers. Please try again.');
            }
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', load);
        } else {
            load();
        }
    })();
</script>

<script>
    (() => {
        // Horoscope Section (unchanged)
        let selectedSign = 'aries';
        let selectedPeriod = 'daily';
        const resultBox = document.getElementById('horoscopeResult');
        const fallbackHoroscopes = {
            aries: 'Today is a day to focus on your goals and take bold steps forward.',
            taurus: 'Patience will bring you rewards. Stay steady and trust your instincts.',
            gemini: 'Communication is key today. Reach out and connect with others.',
            cancer: 'Take care of your emotional well-being. Home brings comfort.',
            leo: 'Your confidence shines. Take the lead in group activities.',
            virgo: 'Attention to detail will help you succeed. Stay organized.',
            libra: 'Seek balance in your relationships. Harmony is within reach.',
            scorpio: 'Trust your intuition. A mystery may be revealed.',
            sagittarius: 'Adventure calls. Be open to new experiences.',
            capricorn: 'Hard work pays off. Stay focused on your ambitions.',
            aquarius: 'Innovation is favored. Share your unique ideas.',
            pisces: 'Creativity flows. Express yourself through art or music.'
        };
        const showLoader = () => {
            resultBox.innerHTML = '<span class="spinner-border spinner-border-sm text-primary" role="status" aria-hidden="true"></span> Loading horoscope...';
        };
        const loadHoroscope = async () => {
            if (selectedPeriod !== 'daily') {
                resultBox.innerHTML = 'Only daily horoscope is available for free.';
                return;
            }
            showLoader();
            try {
                const res = await fetch(`/api/horoscope/${selectedSign}`);
                if (!res.ok) throw new Error('API error');
                const data = await res.json();
                if (!data.horoscope) throw new Error('No data');
                resultBox.innerHTML = `
                <h5 class="mb-2 text-capitalize">${data.sign} – Daily</h5>
                <p class="mt-3">${data.horoscope}</p>
            `;
            } catch (err) {
                // Fallback static message
                resultBox.innerHTML = `
                <h5 class="mb-2 text-capitalize">${selectedSign} – Daily</h5>
                <div class="alert alert-warning">Live horoscope is currently unavailable. Showing a sample prediction:</div>
                <p class="mt-3">${fallbackHoroscopes[selectedSign] || 'Have a positive day!'}</p>
                `;
            }
        };
        document.querySelectorAll('.zodiac-card').forEach(card => {
            card.addEventListener('click', () => {
                document.querySelectorAll('.zodiac-card').forEach(c => {
                    if (c && c.classList) c.classList.remove('active');
                });
                if (card && card.classList) card.classList.add('active');
                selectedSign = card.dataset.sign;
                predSign = selectedSign; // Always sync predSign
                loadHoroscope();
                updatePrediction();
            });
        });
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.tab-btn').forEach(b => {
                    if (b && b.classList) b.classList.remove('active');
                });
                if (btn && btn.classList) btn.classList.add('active');
                selectedPeriod = btn.dataset.period;
                loadHoroscope();
            });
        });
        loadHoroscope();

        // Prediction Box Section (dynamic)
        let predSign = selectedSign;
        let predDate = 'today';
        // Detect initial active tab for prediction category
        let predCategory = document.querySelector('#predictionCategories li.active')?.getAttribute('data-tab') || 'personal';
        const predDateMap = {
            yesterday: () => {
                const d = new Date(); d.setDate(d.getDate() - 1); return d.toLocaleDateString();
            },
            today: () => {
                const d = new Date(); return d.toLocaleDateString();
            },
            tomorrow: () => {
                const d = new Date(); d.setDate(d.getDate() + 1); return d.toLocaleDateString();
            }
        };
        const predictionDateEl = document.getElementById('predictionDate');
        function getActivePredictionContent() {
            return document.querySelector('.tab-content.active p');
        }
        // Date nav
        document.querySelectorAll('#predictionDateNav span').forEach(span => {
            span.addEventListener('click', () => {
                document.querySelectorAll('#predictionDateNav span').forEach(s => {
                    if (s && s.classList) s.classList.remove('active');
                });
                if (span && span.classList) span.classList.add('active');
                predDate = span.getAttribute('data-day');
                updatePrediction();
            });
        });
        // Category tabs
        document.querySelectorAll('#predictionCategories li').forEach(li => {
            li.addEventListener('click', () => {
                document.querySelectorAll('#predictionCategories li').forEach(l => {
                    if (l && l.classList) l.classList.remove('active');
                });
                if (li && li.classList) li.classList.add('active');
                predCategory = li.getAttribute('data-tab');
                updatePrediction();
            });
        });
        // When zodiac changes, update prediction sign
        function updatePredictionSign(newSign) {
            predSign = newSign;
            updatePrediction();
        }
        // Call this when zodiac changes
        function updatePrediction() {
            // Set date label
            if (predictionDateEl && predDateMap[predDate]) {
                predictionDateEl.textContent = predDateMap[predDate]();
            }
            // Show loader in active tab
            const activeContent = getActivePredictionContent();
            if (activeContent) {
                activeContent.innerHTML = '<span class="spinner-border spinner-border-sm text-primary" role="status" aria-hidden="true"></span> Loading...';
            }
            // Fetch prediction
            // Use dynamic base URL for dev/prod
            const apiBase = (window.location.port === '8000' || window.location.hostname === '127.0.0.1')
                ? `${window.location.protocol}//${window.location.hostname}:8000`
                : '';
            fetch(`${apiBase}/api/prediction?sign=${encodeURIComponent(predSign)}&date=${encodeURIComponent(predDate)}&category=${encodeURIComponent(predCategory)}`)
                .then(res => res.json())
                .then(data => {
                    const activeContent = getActivePredictionContent();
                    if (activeContent) {
                        if (data.prediction) {
                            activeContent.textContent = data.prediction;
                        } else {
                            activeContent.textContent = 'Prediction unavailable.';
                        }
                    }
                })
                .catch(() => {
                    const activeContent = getActivePredictionContent();
                    if (activeContent) {
                        activeContent.textContent = 'Prediction unavailable.';
                    }
                });
        }
        // Initial load: ensure correct tab/category
        updatePrediction();
        // Remove duplicate zodiac event listener for prediction sign
    })();

    // Safe tab switching for prediction categories
    document.querySelectorAll('.prediction-categories li').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.prediction-categories li').forEach(t => {
                if (t && t.classList) t.classList.remove('active');
            });
            document.querySelectorAll('.tab-content').forEach(c => {
                if (c && c.classList) c.classList.remove('active');
            });
            if (tab && tab.classList) tab.classList.add('active');
            const contentEl = document.getElementById(tab.dataset.tab);
            if (contentEl && contentEl.classList) contentEl.classList.add('active');
        });
    });
</script>
@endpush