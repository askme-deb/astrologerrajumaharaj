
<!-- Modal structure -->
<!-- <div id="videoPopup" class="popup-overlay">
  <div class="popup-content">
    <span class="close-btn" onclick="closePopup()">×</span>
    <video autoplay muted loop controls>
      <source src="images/lunching.mp4" type="video/mp4">
    </video>
  </div>
</div> -->
<!-- ================= Top Utility Bar ================= -->
<div class="top-bar">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Left Info -->
        <div class="top-left d-flex align-items-center gap-3">
            <span>
                <i class="fas fa-phone-alt"></i> +91 11 4084 4599
            </span>
            <span class="separator">•</span>
            <span class="currency">INR ₹</span>
        </div>
        <!-- Right Links -->
        <div class="top-right">
            <a href="login.php">Login</a>
            <span class="separator">|</span>
            <a href="registration.php">Register</a>
        </div>
    </div>
</div>
<!-- ================= Main Header ================= -->
<header class="main-header shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="images/Logo.png" alt="Brand Logo" height="45">
            </a>
            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="consultation.php">Consultation</a></li>
                    <li class="nav-item"><a class="nav-link" href="courses.php">Online Classes</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                    <!-- Dashboard Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Dashboard
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="student-dashboard.php">
                                    <i class="fas fa-user-graduate me-2"></i>Student Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="ecommerce-dashboard.php">
                                    <i class="fas fa-bag-shopping me-2"></i>E-commerce Dashboard
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="astrologer-dashboard.php">
                                    <i class="fas fa-user-tie me-2"></i>Astrologer Dashboard
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <!-- Action Icons -->
                    <li class="nav-item nav-icons d-flex align-items-center gap-3">
                        <!-- Search -->
                        <div class="search-wrapper">
                            <a href="javascript:void(0)" onclick="toggleSearch()" aria-label="Search">
                                <i class="fas fa-search"></i>
                            </a>
                            <input type="text" id="searchBox" class="search-box" placeholder="Search..." />
                        </div>
                        <!-- Wishlist -->
                        <a href="wishlist.php" aria-label="Wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <!-- Cart -->
                        <div class="cart-wrapper">
                            <a href="javascript:void(0)" onclick="toggleCart()" aria-label="Cart">
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                            <div class="mini-cart" id="miniCart">
                                <div class="mini-cart-header">My Cart</div>
                                <div class="cart-item">
                                    <span>Product Name</span>
                                    <span>₹999</span>
                                </div>
                                <div class="cart-item">
                                    <span>Another Product</span>
                                    <span>₹499</span>
                                </div>
                                <div class="cart-footer">
                                    <a href="cart.php" class="btn btn-outline-secondary btn-sm">View Cart</a>
                                    <a href="checkout.php" class="btn btn-primary btn-sm">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- CTA -->
                    <li class="nav-item ms-lg-3">
                        <a href="consultation_booking.php" class="btn btn-primary px-4">
                            Book Consultation
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>