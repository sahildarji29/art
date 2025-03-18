<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisnaa</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/fav.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/fav.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/fav.png') }}">
    {{-- <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}"> --}}
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo">
                <img src="{{ asset('images/artisna-logo.png') }}" alt="Artisna Logo">
            </a>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#gallery">Gallery</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
                </nav>
        </header>

    <!-- Hero Slider -->
    <section id="home" class="hero-slider swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-overlay"></div>
                <img src="{{ asset('images/slider/a.png') }}" alt="Art 1">
                <div class="slide-content">
                    <h1>Welcome to Artisnaa</h1>
                    <p>Discover the beauty of contemporary art</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-overlay"></div>
                <img src="{{ asset('images/slider/b.png') }}" alt="Art 2">
                <div class="slide-content">
                    <h1>Unique Artworks</h1>
                    <p>Each piece tells a story</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-overlay"></div>
                <img src="{{ asset('images/slider/c.png') }}" alt="Art 3">
                <div class="slide-content">
                    <h1>Experience Art</h1>
                    <p>Let your imagination soar</p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="gallery">
        <p class="section-subtitle" data-aos="fade-up">Our Collection</p>
        <h2 class="section-title" data-aos="fade-up">Featured Works</h2>
        <div class="gallery-grid">
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('images/gallery/a.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/gallery/b.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/gallery/c.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('images/gallery/d.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/gallery/h.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/gallery/f.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>

            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/gallery/g.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
        </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/gallery/e.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="testimonial-container">
            <p class="section-subtitle" data-aos="fade-up">Testimonials</p>
            <h2 class="section-title" data-aos="fade-up">What Collectors Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card" data-aos="fade-up">
                    <img src="{{ asset('images/testimonial/krupali.png') }}" alt="Krupali Gangani">
                    <p class="testimonial-text">"Absolutely stunning pieces that bring life to any room. The attention to detail is remarkable."</p>
                    <h4 class="testimonial-author">Krupali Gangani</h4>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('images/testimonial/sahil.png') }}" alt="Sahil Darji">
                    <p class="testimonial-text">"Each artwork tells a unique story. I'm proud to have these pieces in my collection."</p>
                    <h4 class="testimonial-author">Sahil Darji</h4>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('images/testimonial/ruchit.png') }}" alt="Ruchit Patel">
                    <p class="testimonial-text">"The artist's vision and execution are simply breathtaking. True masterpieces."</p>
                    <h4 class="testimonial-author">Ruchit Patel</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="about">
        <div class="about-image" data-aos="fade-right">
            <img src="{{ asset('images/about_me.png') }}" alt="Artist">
        </div>
        <div class="about-content" data-aos="fade-left">
            <p class="section-subtitle">About the Artist</p>
            <h2>Art that speaks to your soul!</h2>
            <p>I'm Darshana, a passionate artist who believes that painting is more than just colors on a canvas—it's a journey of self-expression, creativity, and connection. Inspired by nature, emotions, and the endless possibilities of abstract art, I strive to create pieces that resonate deeply and transform spaces.</p> 
            <p>I specialize in abstract, natural, and artistic paintings, each crafted with depth, emotion, and a unique artistic vision. Every brushstroke reflects my passion, bringing stories to life on canvas.</p>
            <p>With a commitment to quality and artistic integrity, I ensure that every piece is designed to inspire, uplift, and bring joy. Whether it's a bold statement piece or a subtle expression of beauty, my goal is to create art that truly speaks to you.</p>
            <p>Art has no boundaries—it's an endless journey of imagination and emotion. Step into my world, where every painting tells a story waiting to be felt.</p>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose">
        <div class="why-choose-container">
            <p class="section-subtitle" data-aos="fade-up">Why Choose Us?</p>
            <h2 class="section-title" data-aos="fade-up">Why Choose My Artwork?</h2>
            <div class="why-choose-grid">
                <div class="why-choose-item" data-aos="fade-up">
                    <div class="icon-box">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Unique & Original</h3>
                    <p>One-of-a-kind masterpieces crafted with creativity and passion.</p>
                </div>
                <div class="why-choose-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Emotional Connection</h3>
                    <p>Designed to evoke emotions and inspire lasting impressions.</p>
                </div>
                <div class="why-choose-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Customization Available</h3>
                    <p>Personalized artwork tailored to your vision and style.</p>
                </div>
                <div class="why-choose-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Client-Centric Approach</h3>
                    <p>Committed to delivering artwork that exceeds expectations and brings joy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="contact-form" data-aos="fade-up">
            <p class="section-subtitle">Get in Touch</p>
            <h2 class="section-title">Contact Us</h2>
            <form>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
            <div class="contact-info">
                <div class="contact-info-item">
                    <i class="fas fa-phone"></i>
                    <div class="info">
                        <h4>Call Us</h4>
                        <p>+91 9662634222</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-envelope"></i>
                    <div class="info">
                        <h4>Write Us</h4>
                        <p>darshana.artisnaa@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div>
                <div class="footer-logo">
                    <img src="{{ asset('images/artisna-logo.png') }}" alt="Artisna Logo">
                </div>
                <p>Art that speaks to your soul.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
            <div>
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Lightbox -->
    <div class="lightbox">
        <div class="lightbox-content">
            <img src="" alt="" class="lightbox-image">
            <div class="lightbox-close">
                <i class="fas fa-times"></i>
            </div>
            <div class="lightbox-nav lightbox-prev">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="lightbox-nav lightbox-next">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.hero-slider', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });

        // Initialize AOS
        AOS.init({
            duration: 800,
            offset: 100,
            once: true
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const navLinks = document.querySelector('.nav-links');
        const navLinksItems = document.querySelectorAll('.nav-links a');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });

        // Close menu when clicking nav links
        navLinksItems.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                document.body.classList.remove('menu-open');
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navLinks.contains(e.target) && !menuToggle.contains(e.target)) {
                navLinks.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        });

        // Lightbox functionality
        const lightbox = document.querySelector('.lightbox');
        const lightboxImage = document.querySelector('.lightbox-image');
        const lightboxClose = document.querySelector('.lightbox-close');
        const lightboxPrev = document.querySelector('.lightbox-prev');
        const lightboxNext = document.querySelector('.lightbox-next');
        const galleryItems = document.querySelectorAll('.gallery-item');
        let currentImageIndex = 0;

        // Open lightbox
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                currentImageIndex = index;
                const imgSrc = item.querySelector('img').src;
                lightboxImage.src = imgSrc;
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close lightbox
        lightboxClose.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Navigate through images
        function showImage(index) {
            if (index >= galleryItems.length) {
                currentImageIndex = 0;
            } else if (index < 0) {
                currentImageIndex = galleryItems.length - 1;
            } else {
                currentImageIndex = index;
            }
            const imgSrc = galleryItems[currentImageIndex].querySelector('img').src;
            lightboxImage.style.opacity = '0';
            setTimeout(() => {
                lightboxImage.src = imgSrc;
                lightboxImage.style.opacity = '1';
            }, 200);
        }

        lightboxPrev.addEventListener('click', () => {
            showImage(currentImageIndex - 1);
        });

        lightboxNext.addEventListener('click', () => {
            showImage(currentImageIndex + 1);
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;
            
            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowLeft') {
                showImage(currentImageIndex - 1);
            } else if (e.key === 'ArrowRight') {
                showImage(currentImageIndex + 1);
            }
        });

        // Prevent scrolling when lightbox is open
        lightbox.addEventListener('wheel', (e) => {
            if (lightbox.classList.contains('active')) {
                e.preventDefault();
            }
        });
    </script>
    </body>
</html>
