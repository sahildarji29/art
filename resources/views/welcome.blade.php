<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery</title>
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
            <style>
        :root {
            --primary-color: #1a1a1a;
            --secondary-color: #666;
            --accent-color: #c8a97e;
            --bg-color: #fff;
            --text-color: #333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-color);
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }

        .section-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        .section-subtitle {
            text-align: center;
            color: var(--accent-color);
            font-size: 1.1rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Header Styles */
        .header {
            position: fixed;
            width: 100%;
            padding: 1.5rem 2rem;
            background: rgba(255, 255, 255, 0.98);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .header.scrolled {
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 70px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .logo:hover img {
            transform: scale(1.05);
        }

        .header.scrolled .logo img {
            height: 55px;
        }

        .nav-links {
            display: flex;
            gap: 3rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        /* Hero Slider */
        .hero-slider {
            height: 100vh;
            width: 100%;
            overflow: hidden;
        }

        .swiper-slide {
            position: relative;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 2;
        }

        .slide-content h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards;
        }

        .slide-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s 0.2s forwards;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        /* Gallery Section */
        .gallery {
            padding: 8rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            padding: 2rem 0;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
            aspect-ratio: 1;
        }

        .gallery-item:nth-child(3n-1) {
            margin-top: 2rem;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        /* Testimonials */
        .testimonials {
            background: #f9f9f9;
            padding: 8rem 2rem;
        }

        .testimonial-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: white;
            padding: 3rem 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            text-align: center;
        }

        .testimonial-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 1.5rem;
            object-fit: cover;
        }

        .testimonial-text {
            font-style: italic;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .testimonial-author {
            color: var(--primary-color);
            font-weight: 500;
        }

        /* About Section */
        .about {
            padding: 8rem 2rem;
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: center;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 8px;
        }

        .about-image::after {
            content: '';
            position: absolute;
            top: 2rem;
            left: 2rem;
            width: 100%;
            height: 100%;
            border: 2px solid var(--accent-color);
            border-radius: 8px;
            z-index: -1;
        }

        .about-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .about-content p {
            color: var(--secondary-color);
            margin-bottom: 2rem;
        }

        /* Contact Form */
        .contact {
            background: #f9f9f9;
            padding: 8rem 2rem;
        }

        .contact-form {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 4rem;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .contact-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 3rem;
            padding-top: 3rem;
            border-top: 1px solid #eee;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-info-item i {
            font-size: 1.5rem;
            color: var(--accent-color);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(200, 169, 126, 0.1);
        }

        .contact-info-item .info h4 {
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
            color: var(--primary-color);
        }

        .contact-info-item .info p {
            color: var(--secondary-color);
            font-size: 0.9rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary-color);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-color);
        }

        .btn-submit {
            background: var(--accent-color);
            color: white;
            padding: 1rem 3rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .btn-submit:hover {
            background: #b69666;
        }

        /* Footer */
        .footer {
            background: var(--primary-color);
            color: white;
            padding: 6rem 2rem 4rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 4rem;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .footer h4 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .footer ul {
            list-style: none;
        }

        .footer ul li {
            margin-bottom: 0.8rem;
        }

        .footer ul li a {
            color: #999;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer ul li a:hover {
            color: var(--accent-color);
        }

        .social-icons {
            display: flex;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .social-icons a {
            color: white;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--accent-color);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            .about {
                grid-template-columns: 1fr;
                gap: 4rem;
            }

            .testimonial-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-grid {
                grid-template-columns: 1fr;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .slide-content h1 {
                font-size: 3rem;
            }

            .contact-info {
                grid-template-columns: 1fr;
            }
        }
            </style>
    </head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo">
                <img src="{{ asset('images/artisna-logo.png') }}" alt="Artisna Logo">
            </a>
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
                <img src="https://picsum.photos/id/1015/1600/900" alt="Art 1">
                <div class="slide-content">
                    <h1>Welcome to ArtGallery</h1>
                    <p>Discover the beauty of contemporary art</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-overlay"></div>
                <img src="https://picsum.photos/id/1016/1600/900" alt="Art 2">
                <div class="slide-content">
                    <h1>Unique Artworks</h1>
                    <p>Each piece tells a story</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-overlay"></div>
                <img src="https://picsum.photos/id/1019/1600/900" alt="Art 3">
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
                <img src="{{ asset('images/gallery/first.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('images/gallery/second.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/gallery/third.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up">
                <img src="{{ asset('images/gallery/fourth.png') }}" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                <img src="https://picsum.photos/id/1028/600/600" alt="Gallery Image">
                <div class="gallery-overlay">
                    <span>View Artwork</span>
                </div>
            </div>
            <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                <img src="https://picsum.photos/id/1029/600/600" alt="Gallery Image">
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
                    <img src="https://i.pravatar.cc/100?img=1" alt="Sarah Johnson">
                    <p class="testimonial-text">"Absolutely stunning pieces that bring life to any room. The attention to detail is remarkable."</p>
                    <h4 class="testimonial-author">Sarah Johnson</h4>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://i.pravatar.cc/100?img=3" alt="Michael Chen">
                    <p class="testimonial-text">"Each artwork tells a unique story. I'm proud to have these pieces in my collection."</p>
                    <h4 class="testimonial-author">Michael Chen</h4>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://i.pravatar.cc/100?img=5" alt="Emma Thompson">
                    <p class="testimonial-text">"The artist's vision and execution are simply breathtaking. True masterpieces."</p>
                    <h4 class="testimonial-author">Emma Thompson</h4>
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
            <h2>Crafting Beauty Through Art</h2>
            <p>Art is my way of expressing emotions, capturing beauty, and bringing imagination to life.</p>
            <p>I specialize in abstract, natural, and artistic paintings, each crafted with depth and creativity.</p>
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
                <div class="footer-logo">ArtGallery</div>
                <p>Bringing art to life through unique and inspiring pieces.</p>
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
            <div>
                <h4>Contact Info</h4>
                <ul>
                    <li>123 Art Street</li>
                    <li>Ahmedabad, India</li>
                    <li>+91 9662634222</li>
                    <li>darshana.artisnaa@gmail.com</li>
                </ul>
            </div>
        </div>
    </footer>

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
    </script>
    </body>
</html>
