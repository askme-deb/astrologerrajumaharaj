<!-- Header Partial -->
<!-- Place your header HTML here (navbar, top bar, etc.) -->
<!-- Example: -->
<div class="top-header vcxzsaw">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="top-bar">
                    <i class="fa-solid fa-phone"></i> +91 90918 40899 | <i class="fa-solid fa-envelope"></i> contact@astrorajumaharaj.com
                </div>
            </div>
            <div class="col-md-6">
                <div class="account_warp">
                    <div class="marquee-container">
                        <div class="marquee-text">
                            Welcome to Astro Raju Maharaj Ji | Book Your Consultation Today | Learn Vedic Astrology | Explore Authentic Astrology Products
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <header class="main-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"> <img src="{{ asset('assets/images/Logo.png') }}" /> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://jyotish.astrorajumaharaj.com">Consultation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Online Classes</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://shop.astrorajumaharaj.com/products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item">
                        <a href="https://jyotish.astrorajumaharaj.com/consultation" class="btn btn-primary header-btn">
                            Book Consultation
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header> --}}
<header class="main-header">
    <nav class="navbar">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="https://astrorajumaharaj.com/assets/images/Logo.png" height="50">
            </a>

            <!-- Mobile Toggle -->
            <button class="menu-toggle" onclick="openMenu()">☰</button>

            <!-- Desktop Menu -->
            <ul class="nav desktop-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="https://jyotish.astrorajumaharaj.com">Consultation</a></li>
                <li><a href="#">Online Classes</a></li>
                <li><a href="https://shop.astrorajumaharaj.com">Products</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <li>
                    <a href="https://jyotish.astrorajumaharaj.com/consultation" class="btn btn-primary">
                        Book Consultation
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Mobile Slide Menu -->
<div id="mobileMenu" class="mobile-menu">
    <button class="close-btn" onclick="closeMenu()">✖</button>

    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="https://jyotish.astrorajumaharaj.com">Consultation</a>
    <a href="#">Online Classes</a>
    <a href="https://shop.astrorajumaharaj.com/products">Products</a>
    <a href="/gallery">Gallery</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>

    <a href="https://jyotish.astrorajumaharaj.com/consultation" class="btn btn-primary mt-3">
        Book Consultation
    </a>
</div>


<style>
    /* Hide desktop menu on mobile */
.desktop-menu {
    display: flex;
    gap: 20px;
}

.menu-toggle {
    font-size: 26px;
    background: none;
    border: none;
    display: none;
}

/* Mobile Menu */
.mobile-menu {
    position: fixed;
    top: 0;
    left: -100%;
    width: 260px;
    height: 100%;
    background: #fff;
    padding: 20px;
    transition: 0.4s;
    z-index: 9999;
    box-shadow: 2px 0 10px rgba(0,0,0,0.2);
}

.mobile-menu a {
    display: block;
    margin: 15px 0;
    color: #333;
    text-decoration: none;
    font-size: 16px;
}

.mobile-menu.active {
    left: 0;
}

.close-btn {
    font-size: 22px;
    border: none;
    background: none;
    float: right;
}

/* Responsive */
@media (max-width: 991px) {
    .desktop-menu {
        display: none;
    }

    .menu-toggle {
        display: block;
    }
}

</style>

<script>
function openMenu() {
    document.getElementById("mobileMenu").classList.add("active");
}

function closeMenu() {
    document.getElementById("mobileMenu").classList.remove("active");
}
</script>
