@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>About Us</h1>
        <p class="breadcrumb">Home / About Us</p>
    </div>
</section>

<section class="section-padding drew2">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <img src="{{ asset('assets/images/about.png') }}" alt="About Us">
            </div>
            <div class="about-content">
                <h2>About <span class="highlight-text">Astrologer Raju Maharaj</span></h2>
                <p>Astrologer <b>Raju Maharaj</b> is a highly respected and experienced Vedic astrologer, known for his deep knowledge of astrology, horoscope analysis, and spiritual guidance. With years of dedicated practice, he has helped thousands of individuals find clarity, balance, and direction in their lives.</p>
                <p>Raju Maharaj specializes in <b>Vedic Astrology, Kundli Matching, Marriage & Relationship Guidance, Career and Business Astrology, Health Predictions, and Gemstone Consultation</b>. His predictions are based on precise planetary calculations and traditional astrological principles, combined with practical remedies that are easy to follow.</p>
                <p>Known for his honest approach and compassionate guidance, Astrologer Raju Maharaj believes astrology is not about fear, but about empowerment, self-awareness, and positive transformation. His consultations focus on identifying challenges, uncovering opportunities, and guiding clients toward a prosperous and peaceful future.</p>
                <p>Whether you are facing personal, professional, or spiritual challenges, Astrologer Raju Maharaj is committed to offering <b>accurate predictions, effective remedies, and trusted solutions</b> to help you move forward with confidence.</p>
                <a href="https://jyotish.astrorajumaharaj.com/consultation-booking" target="_blank" class="cta-btn">Book Consultation</a>
            </div>
        </div>
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
</section>

<section class="section-padding about-me-section">
    <div class="container about-container">
        <div class="about-text">
            <h2>Mission</h2>
            <p>To guide individuals toward clarity, confidence, and positive transformation through authentic Vedic astrology, spiritual wisdom, and ethical practices. Astrologer Raju Maharaj is committed to providing accurate insights and meaningful remedies that help people overcome challenges and achieve balance in life.</p>
        </div>
        <div class="about-text">
            <h2>Vision</h2>
            <p>To become a trusted and respected astrologer known for integrity, compassion, and results, empowering people worldwide to make informed life decisions and live harmoniously with cosmic energies.</p>
        </div>
    </div>
</section>
@endsection
