@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="container py-5">
   <div class="row g-0">
      <!-- Left Image -->
      <div class="col-lg-4 contact-image">
         <img src="{{ asset('assets/images/about-3.png') }}">
      </div>
      <!-- Right Form -->
      <div class="col-lg-7 contact-form">
         <div class="brand">
            <div class="logo">C</div>
            Contact
         </div>
         <h1>Let’s Get In Touch.</h1>
         <p class="subtext">
            Or just reach out manually to 
            <a href="mailto:hello@slothui.com">hello@slothui.com</a>
         </p>
         <form id="contactForm">
            <div class="row">
               <div class="col-md-6 mb-3">
                  <label>First Name</label>
                  <div class="input-icon">
                     <i class="fa fa-user"></i>
                     <input type="text" class="form-control" placeholder="Enter your first name..." required>
                  </div>
               </div>
               <div class="col-md-6 mb-3">
                  <label>Last Name</label>
                  <div class="input-icon">
                     <i class="fa fa-user"></i>
                     <input type="text" class="form-control" placeholder="Enter your last name..." required>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 mb-3">
                  <label>Email Address</label>
                  <div class="input-icon">
                     <i class="fa fa-envelope"></i>
                     <input type="email" class="form-control" placeholder="Enter your email address..." required>
                  </div>
               </div>
               <div class="col-md-6 mb-3">
                  <label>Phone Number</label>
                  <div class="input-group">
                     <select class="form-select" style="max-width: 90px;">
                        <option>🇮🇳 +91</option>
                        <option>🇬🇧 +44</option>
                        <option>🇺🇸 +1</option>
                     </select>
                     <input type="tel" class="form-control" placeholder="Phone number..." required>
                  </div>
               </div>
            </div>
            <div class="mb-3">
               <label>Message</label>
               <textarea id="message" class="form-control" rows="4" maxlength="300"
                  placeholder="Enter your main text here..." required></textarea>
               <div class="char-count">
                  <span id="charCount">0</span>/300
               </div>
            </div>
            <button type="submit" class="submit-btn">
            Submit Form →
            </button>
         </form>
      </div>
   </div>
</div>
<section class="contact-section">
   <div class="container">
      <div class="text-center">
         <div class="badge-custom">Reach Out To Us</div>
         <div class="section-title">We’d Love to Hear From You.</div>
         <div class="section-sub">
            Or just reach out manually to 
            <a href="mailto:hello@slothui.com">hello@slothui.com</a>.
         </div>
      </div>
      <div class="row g-4 justify-content-center">
         <!-- Email -->
         <div class="col-lg-4 col-md-6">
            <div class="contact-card">
               <div class="icon-box">
                  <i class="fa fa-envelope"></i>
               </div>
               <div class="card-title">Email Support</div>
               <div class="card-text">
                  Our team can respond in real time.
               </div>
               <a href="mailto:contact@astrorajumaharaj.com" class="card-link">
               contact@astrorajumaharaj.com
               </a>
            </div>
         </div>
         <!-- Office -->
         <div class="col-lg-4 col-md-6">
            <div class="contact-card">
               <div class="icon-box">
                  <i class="fa fa-building"></i>
               </div>
               <div class="card-title">Visit Our Office</div>
               <div class="card-text">
                  Visit our location in real life.
               </div>
              
               Bagda, P.S.-Puncha, Dist. - Purulia, West Bengal, Pin - 723151
               
            </div>
         </div>
         <!-- Phone -->
         <div class="col-lg-4 col-md-6">
            <div class="contact-card">
               <div class="icon-box">
                  <i class="fa fa-phone"></i>
               </div>
               <div class="card-title">Call Us Directly</div>
               <div class="card-text">
                  Available during working hours.
               </div>
               <a href="tel:+12344567789" class="card-link">
               +91 90918 40899
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="map_warp">
   <div class="container">
      <div class="row">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14749.031769143541!2d88.3919015!3d22.4569392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1770880957798!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
   </div>
</div>
@endsection
