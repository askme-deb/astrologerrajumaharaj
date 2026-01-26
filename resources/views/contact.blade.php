@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p class="breadcrumb">Home / Contact</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center">
            <h2>Get in <span class="highlight-text">Touch</span></h2>
            <p class="sub-heading">We're here to help you on your spiritual journey</p>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>123 Astrology Street<br>Connaught Place<br>New Delhi - 110001<br>India</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p>+91-11-4084-4599<br>+91-98765-43210<br>Mon-Sun: 9 AM - 9 PM</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>info@astrology.com<br>support@astrology.com<br>consultation@astrology.com</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select Subject</option>
                                <option value="consultation">Consultation Query</option>
                                <option value="course">Course Inquiry</option>
                                <option value="product">Product Information</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message *</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
                <div class="map-placeholder">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9786352086305!2d77.21694431508076!3d28.63135998242846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd371d3e1b0d%3A0xa6e112681beee59e!2sConnaught%20Place%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1609234567890!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
