<footer class="main-footer drew3" style="background-image: url('{{ asset('assets/images/footer-banner.png') }}');">
    <div class="container footer-content">

        <div class="footer-col brand-col">
            <div class="footer-logo">
                <img src="{{ asset('assets/images/footer-logo.png') }}" alt="Logo Icon" class="footer-logo-icon">
                <!-- <span class="logo-text-white">Logo Here</span> -->
            </div>

            <h4>Astrologer Raju Maharaj</h4>
            <a href="#" class="app-badge">
                <div class="play-store-btn">
                    <i class="fab fa-google-play"></i>
                    <div class="store-text">
                        <small>GET IT ON</small>
                        <span>Google Play</span>
                    </div>
                </div>
            </a>

            <div class="social-links">
                <h4>Follow us on</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-col">
            <h4 class="footer-heading">Useful Links</h4>
            <ul class="footer-links">
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="https://jyotish.astrorajumaharaj.com" target="_blank">Consultation</a></li>
                <li><a href="https://education.astrorajumaharaj.com" target="_blank">Online Classes</a></li>
                <li><a href="https://ecommerce.astrorajumaharaj.com" target="_blank">Our Product</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('terms') }}">Terms & Conditions</a></li>
                <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4 class="footer-heading">Contact Info</h4>
            <ul class="contact-list">
                <li>
                    <i class="fas fa-headset"></i>
                    Call +91 90918 40899
                </li>
               
                <li>
                    <i class="far fa-envelope"></i>
                    contact@astrorajumaharaj.com
                </li>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Bagda, P.S.-Puncha, Dist. - Purulia, West Bengal, Pin - 723151</span>
                </li>
            </ul>
            <div id="fb-root"></div>
            <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
        </div>

    </div>

    <div class="copyright-bar">
        <p>Copyright © 2026 www.astrorajumaharaj.com - All Rights Reserved</p>
    </div>
</footer>
