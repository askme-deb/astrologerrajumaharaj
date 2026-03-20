<!-- Footer Partial -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="logo_foot">
                    <img src="{{ asset('assets/images/Logo.png') }}" alt="logo" class="mb-3">
                </div>
                <h5>Comming Soon</h5>
                <div class="app-btn">
                    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg">
                </div>
                <h5 class="mt-4">Follow us on</h5>
                <div class="social-icons">
                    <a href="javascript:;"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:;"><i class="fab fa-youtube"></i></a>
                    <a href="javascript:;"><i class="fab fa-instagram"></i></a>
                    <a href="javascript:;"><i class="fab fa-x-twitter"></i></a>
                    <a href="javascript:;"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5>Quick Links</h5>
                <a href="javascript:;">Chat with Astrologer</a>
                <a href="javascript:;">Astrologer</a>
                <!-- <a href="javascript:;">Tarot Readers</a> -->
                <!-- <a href="javascript:;">Numerologist</a> -->
                <a href="javascript:;">Vastu Experts</a>
                <!-- <a href="javascript:;">Fengshui Astrologer</a> -->
                <a href="javascript:;">Financial Astrologer</a>
                <a href="javascript:;">Marriage Astrologer</a>
                <a href="javascript:;">Free Astrology Consultation</a>
                <a href="javascript:;">Horoscope 2026</a>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h5>Useful Links</h5>
                <a href="javascript:;">About Us</a>
                <a href="javascript:;">Contact Us</a>
                <!-- <a href="javascript:;">Astrologer Registration</a> -->
                <a href="javascript:;">Career</a>
                <a href="javascript:;">Site Map</a>
                <a href="javascript:;">Karma &amp; Destiny</a>
                <a href="javascript:;">Refund Policy</a>
                <a href="javascript:;">Shipping Policy</a>
            
             
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-col newsletter">
                    <h4>Subscribe</h4>
                    <p>Get exclusive offers &amp; updates</p>
                    <form>
                        <input type="email" placeholder="Enter your email" required="">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <section class="payment-section">
            <div class="container">
                <ul class="payment-icons">
                    <li><img src="https://imgcdn1.gempundit.com/media/wysiwyg/visa.svg" alt="Visa"></li>
                    <li><img src="https://imgcdn1.gempundit.com/media/wysiwyg/mastercard.svg" alt="Mastercard"></li>
                    <li><img src="https://imgcdn1.gempundit.com/media/wysiwyg/PayPal.svg" alt="PayPal"></li>
                    <li><img src="https://imgcdn1.gempundit.com/media/wysiwyg/Netbanking__.svg" alt="Net Banking"></li>
                    <li><img src="https://imgcdn1.gempundit.com/media/wysiwyg/american-express.svg" alt="American Express"></li>
                    <li><img src="https://imgcdn1.gempundit.com/media/wysiwyg/rupay.png" alt="RuPay"></li>
                    <li><img src="https://imgcdn1.gempundit.com/media/wysiwyg/Bhim.svg" alt="BHIM UPI"></li>
                    <li class="custom-option">
                        <a href="javascript:;">
                            <img src="https://imgcdn1.gempundit.com/media/wysiwyg/footer-icon1.svg" alt="">
                            <span>Cash on Delivery</span>
                        </a>
                    </li>
                    <li class="custom-option">
                        <a href="javascript:;">
                            <img src="https://imgcdn1.gempundit.com/media/wysiwyg/footer-icon2.svg" alt="">
                            <span>Lab Certified</span>
                        </a>
                    </li>
                    <li class="custom-option">
                        <a href="javascript:;">
                            <img src="https://imgcdn1.gempundit.com/media/wysiwyg/footer-icon3.svg" alt="">
                            <span>Easy Returns</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4">
                ©astrologer rajumaharaj 2026. All rights reserved
            </div>
            <div class="col-lg-6 col-md-6 mb-4 trwcsaq">
                <a href="javascript:;">Privacy Policy</a>
                <a href="javascript:;">FAQs</a>
                <a href="javascript:;">T&amp;C</a>
            </div>
        </div>
    </div>
</div>
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
               items: 1
            },
            576: {
               items: 2
            },
            768: {
               items: 3
            },
            992: {
               items: 3
            }
         }
      });
   </script>

   <script>
      $(document).ready(function () {
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
      $(document).ready(function () {
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
      document.addEventListener("click", function (e) {
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
      window.addEventListener("load", function () {
         setTimeout(() => {
            document.getElementById("videoPopup").classList.add("active");
         }, 500); // delay before popup opens
      });

      function closePopup() {
         const popup = document.getElementById("videoPopup");
         popup.classList.remove("active");

         const video = popup.querySelector("video");
         video.pause();
         video.currentTime = 0;
      }

   </script>



   <script>
      document.querySelectorAll('.qty-control').forEach(control => {
         const minusBtn = control.querySelector('.minus');
         const plusBtn = control.querySelector('.plus');
         const qtyValue = control.querySelector('.qty-value');

         minusBtn.addEventListener('click', () => {
            let qty = parseInt(qtyValue.innerText);
            if (qty > 1) {
               qtyValue.innerText = qty - 1;
            }
         });

         plusBtn.addEventListener('click', () => {
            let qty = parseInt(qtyValue.innerText);
            qtyValue.innerText = qty + 1;
         });
      });
   </script>

   <script>
      document.querySelectorAll('.tab-link').forEach(link => {
         link.addEventListener('click', () => {
            document.querySelectorAll('.tab-link').forEach(l => l.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
            link.classList.add('active');
            document.getElementById(link.dataset.tab).classList.add('active');
         });
      });
   </script>

   <script>
      function addToCart() {
         alert("Product added to cart!");
      }

      function buyNow(product) {
         alert("Buying: " + product);
      }
   </script>



   <script>
      document.addEventListener('DOMContentLoaded', () => {

         // --- 1. Filter Logic ---
         const filterBtns = document.querySelectorAll('.filter-btn');
         const gridItems = document.querySelectorAll('.grid-item');

         filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
               // Remove active class from all buttons
               filterBtns.forEach(b => b.classList.remove('active'));
               // Add active class to clicked button
               btn.classList.add('active');

               const filterValue = btn.getAttribute('data-filter');

               gridItems.forEach(item => {
                  if (filterValue === 'all' || item.classList.contains(filterValue)) {
                     item.classList.remove('hide');
                     item.classList.add('show');
                  } else {
                     item.classList.add('hide');
                     item.classList.remove('show');
                  }
               });
            });
         });

         // --- 2. Lightbox Logic ---
         const lightbox = document.getElementById('lightbox');
         const lightboxImg = document.getElementById('lightbox-img');
         const closeBtn = document.querySelector('.close-lightbox');

         // Open Lightbox
         gridItems.forEach(item => {
            item.addEventListener('click', () => {
               const img = item.querySelector('img');
               const highResSrc = img.src; // In a real app, you might use a data-full-res attribute
               lightboxImg.src = highResSrc;
               lightbox.classList.add('active');
            });
         });

         // Close Lightbox (Click X)
         closeBtn.addEventListener('click', () => {
            lightbox.classList.remove('active');
         });

         // Close Lightbox (Click Outside Image)
         lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
               lightbox.classList.remove('active');
            }
         });

      });
   </script>


   <script>
      function openCategory(category) {
         alert("Opening " + category + " category page...");
         // You can redirect like:
         // window.location.href = category + ".html";
      }

      function viewArtist(name) {
         alert("Viewing works of " + name);
         // You can redirect to artist page here
      }
   </script>

   <script>
      function moreAbout() {
         alert("Redirecting to About Page...");
         // You can redirect:
         // window.location.href = "about.html";
      }
   </script>

   <script>
      function openLightbox(element) {
         const imgSrc = element.querySelector("img").src;
         document.getElementById("lightbox-img").src = imgSrc;
         document.getElementById("lightbox").classList.add("active");
      }

      function closeLightbox() {
         document.getElementById("lightbox").classList.remove("active");
      }
   </script>


   <script>
      function openPost(url) {
         window.location.href = url;
      }
   </script>

   <script>

      function subscribe(e) {
         e.preventDefault();

         const email = document.getElementById("email").value;
         const success = document.getElementById("successMsg");
         const error = document.getElementById("errorMsg");

         const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

         if (email.match(emailPattern)) {
            success.style.display = "block";
            error.style.display = "none";
            document.getElementById("email").value = "";
         } else {
            error.style.display = "block";
            success.style.display = "none";
         }
      }

   </script>

   <script>
      function openPost(url) {
         window.location.href = url;
      }
   </script>

   <script>
      const slides = document.querySelectorAll(".slide");
      const leftArrow = document.querySelector(".arrow.left");
      const rightArrow = document.querySelector(".arrow.right");
      const dotsContainer = document.querySelector(".dots");

      let currentIndex = 0;
      let interval;

      /* Create dots */
      slides.forEach((_, index) => {
         const dot = document.createElement("div");
         dot.classList.add("dot");
         if (index === 0) dot.classList.add("active");
         dot.addEventListener("click", () => goToSlide(index));
         dotsContainer.appendChild(dot);
      });

      const dots = document.querySelectorAll(".dot");

      /* Show slide */
      function showSlide(index) {
         slides.forEach(slide => slide.classList.remove("active"));
         dots.forEach(dot => dot.classList.remove("active"));

         slides[index].classList.add("active");
         dots[index].classList.add("active");
      }

      /* Next */
      function nextSlide() {
         currentIndex = (currentIndex + 1) % slides.length;
         showSlide(currentIndex);
      }

      /* Prev */
      function prevSlide() {
         currentIndex = (currentIndex - 1 + slides.length) % slides.length;
         showSlide(currentIndex);
      }

      /* Go to specific */
      function goToSlide(index) {
         currentIndex = index;
         showSlide(currentIndex);
      }

      /* Auto play */
      function startAutoPlay() {
         interval = setInterval(nextSlide, 5000);
      }

      function stopAutoPlay() {
         clearInterval(interval);
      }

      rightArrow.addEventListener("click", nextSlide);
      leftArrow.addEventListener("click", prevSlide);

      document.querySelector(".hero-slider").addEventListener("mouseenter", stopAutoPlay);
      document.querySelector(".hero-slider").addEventListener("mouseleave", startAutoPlay);

      startAutoPlay();
   </script>


   <script>

      /* SLIDER */
      let index = 0;

      function moveSlide(step) {
         const slider = document.getElementById('slider');
         const slides = document.querySelectorAll('.slide');
         const total = slides.length;

         index += step;

         if (index < 0) index = 0;
         if (index > total - 2) index = total - 2;

         slider.style.transform = `translateX(-${index * 52}%)`;
         slider.style.transition = "0.5s";
      }


      /* SEARCH + FILTER */

      const searchInput = document.getElementById('searchInput');
      const categoryFilter = document.getElementById('categoryFilter');
      const webinars = document.querySelectorAll('.webinar');

      function filterWebinars() {

         const search = searchInput.value.toLowerCase();
         const category = categoryFilter.value;

         webinars.forEach(card => {

            const text = card.innerText.toLowerCase();
            const cardCategory = card.dataset.category;

            const matchSearch = text.includes(search);
            const matchCategory = category === "all" || category === cardCategory;

            if (matchSearch && matchCategory) {
               card.style.display = "block";
            } else {
               card.style.display = "none";
            }

         });
      }

      searchInput.addEventListener('input', filterWebinars);
      categoryFilter.addEventListener('change', filterWebinars);

   </script>


   <script>

      /* COUNTER ANIMATION */

      const counters = document.querySelectorAll('.counter');

      counters.forEach(counter => {

         counter.innerText = '0';

         const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const current = +counter.innerText;

            const increment = target / 100;

            if (current < target) {
               counter.innerText = Math.ceil(current + increment);
               setTimeout(updateCounter, 20);
            } else {
               counter.innerText = target;
            }
         };

         updateCounter();

      });

   </script>


   <script>

      const message = document.getElementById('message');
      const charCount = document.getElementById('charCount');

      message.addEventListener('input', () => {
         charCount.textContent = message.value.length;
      });

      document.getElementById('contactForm').addEventListener('submit', function (e) {
         e.preventDefault();
         alert("Form Submitted Successfully!");
      });

   </script>
