@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="about_rtp">
   <!-- HERO -->
   <div class="container hero">
      <img src="{{ asset('assets/images/product_25.png') }}">
      <div class="hero-text">
         <h1>About Us</h1>
         <div class="breadcrumb">Home / About Us</div>
      </div>
   </div>
   <!-- WHO WE ARE -->
   <section class="section container">
      <div class="about">
         <div class="about-text">
            <h2>Bagda Shankaracharya Mission Vidyapith (H.S.)</h2>
            <p>Bagda Shankaracharya Mission Vidyapith (H.S.) is a service-driven educational and social initiative dedicated to nurturing young minds through learning, guidance, and compassionate support. Rooted in the values of responsibility, knowledge sharing, and community welfare, the mission works to create opportunities for students to grow academically, ethically, and personally. Under the leadership of Raju Maharaj Ji, the institution combines education, mentorship, and traditional wisdom to empower individuals and strengthen society.</p>
            <h2>Who We Are</h2>
            <p>We are a community-focused mission committed to holistic development through education, social care, and knowledge preservation. Our work extends beyond classrooms — focusing on shaping character, confidence, and responsibility.</p>
            <h2>We bring together</h2>
            <ul>
               <li>Academic learning</li>
               <li>Student care and mentorship</li>
               <li>Value-based development</li>
               <li>Astrology consultation and education</li>
               <li>to support both personal and community growth.</li>
            </ul>
         </div>
         <div class="about-img">
            <img src="{{ asset('assets/images/about-2.png') }}">
         </div>
      </div>
   </section>
   <div class="container">
      <!-- STATS -->
      <div class="stats">
         <div class="stat">
            <h3 class="counter" data-target="24">0</h3>
            <p>Available Astrologer</p>
         </div>
         <div class="stat">
            <h3 class="counter" data-target="300">0</h3>
            <p>Happy Customers</p>
         </div>
         <div class="stat">
            <h3 class="counter" data-target="15">0</h3>
            <p>Years of Experience</p>
         </div>
      </div>
   </div>
   <!-- MISSION & VISION -->
   <section class="section container">
      <div class="mission">
         <div style="flex:1;">
            <img src="{{ asset('assets/images/about_ttr.png') }}">
         </div>
         <div class="mission-text">
            <div class="mission-box">
               <img src="{{ asset('assets/images/vition.png') }}" class="img-fluid rounded" alt="mition">
               <h3>Our Mission</h3>
               <p>
                 Our mission is to provide honest, accurate, and meaningful astrology services that truly make a difference in people’s lives.
We are committed to:
<ul class="commitment-list" style="list-style: none; padding-left: 0;">
   <li>✔ Delivering personalized guidance based on Kundli analysis</li>
   <li>✔ Offering practical remedies rooted in Vedic traditions</li>
   <li>✔ Making astrology simple, accessible, and trustworthy</li>
   <li>✔ Supporting individuals in overcoming life challenges</li>
</ul>
Through our services, we aim to bring clarity, positivity, and transformation.
               </p>
            </div>
            <hr>
            <div class="mission-box">
               <img src="{{ asset('assets/images/mition.png') }}" class="img-fluid rounded" alt="mition">
               <h3>Our Vision</h3>
               <p>
                  To become a trusted source of authentic Vedic astrology guidance, helping individuals gain clarity, confidence, and direction in life.
We envision empowering people to make better decisions through accurate Kundli analysis, spiritual wisdom, and practical solutions, creating a balanced and successful life.
               </p>
            </div>
         </div>
      </div>
   </section>
   <section class="section-padding ret_o">
      <div class="container">
         <h2 class="text-center fw-bold mb-5">Why Your Support Matters</h2>
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="gcdxsww">
                  <h3>Astrology Classes &amp; Training</h3>
                  <p>We conduct structured learning programs for individuals interested in studying astrology.</p>
                  <ul>
                     <li>Program includes:-</li>
                     <li>Fundamentals of astrology</li>
                     <li>Chart interpretation basics</li>
                     <li>Practical analysis techniques</li>
                     <li>Ethical consultation practices</li>
                     <li>Supervised practical exposure</li>
                     <li>Students may participate in consultations as part of their learning.</li>
                  </ul>
                  <h3>Our Core Values</h3>
                  <ul>
                     <li>Compassion</li>
                     <li>Integrity</li>
                     <li>Responsibility</li>
                     <li>Knowledge Sharing</li>
                     <li>Ethical Practice</li>
                     <li>Service to Humanity</li>
                  </ul>
                  <h3>Our Impact</h3>
                  <p>Through our combined educational and guidance initiatives, we strive to:</p>
                  <ul>
                     <li>Build confidence in students</li>
                     <li>Encourage disciplined thinking</li>
                     <li>Provide life direction and support</li>
                     <li>Preserve traditional knowledge</li>
                     <li>Empower future learners</li>
                  </ul>
                  <h3>Our Philosophy</h3>
                  <p>We believe education and wisdom go hand in hand. By combining academic development with traditional guidance systems like astrology, we aim to create balanced individuals capable of thoughtful decision-making and responsible living.</p>
                  <h3>Join Our Mission</h3>
                  <p>We welcome supporters, learners, volunteers, and well-wishers to connect with us and contribute toward meaningful community development.
                     Together, we can continue shaping futures through knowledge, guidance, and compassion.
                  </p>
               </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="gcdxsww">
               <h3>Leadership</h3>
               <p>Raju Maharaj Ji</p>
               <p>Driven by dedication toward education and spiritual wisdom, Raju Maharaj Ji leads the mission with a focus on compassion, discipline, and service. His guidance extends across student development, astrology education, and community support initiatives, helping shape both academic and personal journeys.</p>
               <h3>What We Do</h3>
               <p><b>Educational Development</b></p>
               <p>We provide structured academic support and mentorship to help students grow intellectually and confidently.</p>
               <p><b>Student Care &amp; Guidance</b></p>
               <p>Creating a safe and encouraging environment where children receive emotional support, values, and direction.</p>
               <p><b>Astrology Consultation</b></p>
               <p>We offer astrology guidance led by Raju Maharaj Ji along with trained students. Consultations aim to provide clarity and direction in areas such as:</p>
               <ul class="list-group list-group-flush">
                  <li>Career &amp; education</li>
                  <li>Relationships</li>
                  <li>Health &amp; wellbeing</li>
                  <li>Financial outlook</li>
                  <li>Life planning</li>
                  <li>All consultations are conducted responsibly and confidentially.</li>
               </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
