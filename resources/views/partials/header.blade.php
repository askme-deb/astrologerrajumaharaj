
<!-- Modal structure -->
<!-- <div id="videoPopup" class="popup-overlay">
  <div class="popup-content">
    <span class="close-btn" onclick="closePopup()">×</span>
        <video autoplay muted loop controls>
            <source src="{{ asset('assets/images/lunching.mp4') }}" type="video/mp4">
        </video>
  </div>
</div> -->
<!-- ================= Top Utility Bar ================= -->
 <!-- ================= Top Utility Bar ================= -->
<!-- <div class="top-bar">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        
       
        <div class="top-left d-flex align-items-center gap-3">
            <span>
                <i class="fas fa-phone-alt"></i> +91 11 4084 4599
            </span>
            <span class="separator">•</span>
            <span class="currency">INR ₹</span>
        </div>

        
        <div class="top-right">
            <a href="login.php">Login</a>
            <span class="separator">|</span>
            <a href="registration.php">Register</a>
        </div>

    </div>
</div> -->

<!-- ================= Main Header ================= -->
<header class="main-header shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="{{ asset('assets/images/Logo.png') }}" alt="Brand Logo" height="45">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                    <li class="nav-item"><a class="nav-link active" href="./">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://jyotish.astrorajumaharaj.com" target="_blank">Consultation</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://education.astrorajumaharaj.com" target="_blank">Online Classes</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://ecommerce.astrorajumaharaj.com" target="_blank">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>

              

                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>

                 

                    <!-- CTA -->
                    <li class="nav-item ms-lg-3">
                        <a href="https://jyotish.astrorajumaharaj.com/consultation-booking" target="_blank" class="btn btn-primary px-4">
                            Book Consultation
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
</header>
