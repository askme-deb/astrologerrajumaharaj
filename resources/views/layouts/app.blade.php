<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Astrology Website Design')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    @stack('head')
</head>
<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    <!-- Scripts -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.querySelectorAll(".section-header-acc").forEach(header => {
    header.addEventListener("click", () => {
        const section = header.parentElement;
        section.classList.toggle("active");
    });
});
</script>

<script>
  function changeImage(element) {
    document.getElementById("zoomImage").src = element.src;
  }

  new Swiper(".thumb-slider", {
    slidesPerView: 4,
    spaceBetween: 12,
    freeMode: true,
  });
</script>


<script>
  const tabs = document.querySelectorAll(".tab");
  const panes = document.querySelectorAll(".tab-pane");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      panes.forEach(p => p.classList.remove("active"));

      tab.classList.add("active");
      document.getElementById(tab.dataset.tab).classList.add("active");
    });
  });
</script>

<script>
  new Swiper(".relatedSwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      576: { slidesPerView: 2 },
      992: { slidesPerView: 3 },
      1200: { slidesPerView: 4 }
    }
  });
</script>

<script>
  var swiper = new Swiper(".categorySwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: { slidesPerView: 1.5 },
      576: { slidesPerView: 2 },
      768: { slidesPerView: 3 },
      1024: { slidesPerView: 4 },
    },
  });
</script>


<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        nav: true,
        dots: true,
        navText: ["‹", "›"],
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 4
            }
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('.courses-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 900,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 4
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.gemstones-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3500,
            smartSpeed: 800,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 4
                }
            }
        });
    });
</script>




<script>
    AOS.init({
        duration: 900,
        once: true,
        easing: 'ease-in-out'
    });
</script>
<script>
    document.querySelectorAll('.counter').forEach(counter => {
        const update = () => {
            const target = +counter.getAttribute('data-count');
            const value = +counter.innerText;
            const speed = 200;

            if (value < target) {
                counter.innerText = Math.ceil(value + target / speed);
                setTimeout(update, 20);
            } else {
                counter.innerText = target;
            }
        };
        update();
    });
</script>


<script>
    // Tabs
    document.querySelectorAll(".tab-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            document.querySelectorAll(".tab-btn").forEach(b => b.classList.remove("active"));
            document.querySelectorAll(".tab-content").forEach(c => c.classList.remove("active"));

            btn.classList.add("active");
            document.getElementById(btn.dataset.tab).classList.add("active");
        });
    });

    // Zodiac selection
    document.querySelectorAll(".zodiac-item").forEach(item => {
        item.addEventListener("click", () => {
            document.querySelectorAll(".zodiac-item").forEach(z => z.classList.remove("active"));
            item.classList.add("active");
        });
    });
</script>

<script>
    // Vertical Tabs
    document.querySelectorAll(".prediction-categories li").forEach(tab => {
        tab.addEventListener("click", () => {
            document.querySelectorAll(".prediction-categories li").forEach(t => t.classList.remove("active"));
            document.querySelectorAll(".tab-content").forEach(c => c.classList.remove("active"));

            tab.classList.add("active");
            document.getElementById(tab.dataset.tab).classList.add("active");
        });
    });

    // Date Navigation
    document.querySelectorAll(".date-nav span").forEach(day => {
        day.addEventListener("click", () => {
            document.querySelectorAll(".date-nav span").forEach(d => d.classList.remove("active"));
            day.classList.add("active");
        });
    });
</script>

<script>
    function toggleCart() {
        document.getElementById("miniCart").classList.toggle("active");
    }

    // Close cart on outside click
    document.addEventListener("click", function(e) {
        const cart = document.getElementById("miniCart");
        const icon = document.querySelector(".cart-icon");
        if (!icon.contains(e.target) && !cart.contains(e.target)) {
            cart.classList.remove("active");
        }
    });
</script>

<script>
    function toggleSearch() {
        const searchBox = document.getElementById('searchBox');
        searchBox.classList.toggle('active');
        searchBox.focus();
    }
</script>

<script>
//     window.addEventListener("load", function () {
//   setTimeout(() => {
//     document.getElementById("videoPopup").classList.add("active");
//   }, 500); // delay before popup opens
// });

// function closePopup() {
//   const popup = document.getElementById("videoPopup");
//   popup.classList.remove("active");

//   const video = popup.querySelector("video");
//   video.pause();
//   video.currentTime = 0;
// }

</script>


<script>
function toggleSearch() {
    document.getElementById("searchBox").classList.toggle("active");
}

function toggleCart() {
    document.getElementById("miniCart").classList.toggle("active");
}

// Close cart when clicking outside
document.addEventListener("click", function(e) {
    const cart = document.getElementById("miniCart");
    if (!e.target.closest(".cart-wrapper")) {
        cart.classList.remove("active");
    }
});
</script>
    @stack('scripts')
</body>
</html>