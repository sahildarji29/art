<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisanaa</title>
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
            <style>
        :root {
            --primary-color: #1a1a1a;
            --secondary-color: #666;
            --accent-color: #c8a97e;
            --bg-color: #fff;
            --text-color: #333;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
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
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: 1000;
            transition: var(--transition);
        }

        .header.scrolled {
            padding: 1rem 2rem;
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--box-shadow);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
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
            height: 90px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .logo:hover img {
            transform: scale(1.05);
        }

        .header.scrolled .logo img {
            height: 70px;
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
            transition: var(--transition);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
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
            font-size: 4.5rem;
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .slide-content p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s 0.2s forwards;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2));
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
            border-radius: 12px;
            cursor: pointer;
            aspect-ratio: 1;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
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

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.2));
            opacity: 0;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .gallery-overlay span {
            transform: translateY(20px);
            transition: var(--transition);
            font-weight: 500;
            letter-spacing: 1px;
        }

        .gallery-item:hover .gallery-overlay span {
            transform: translateY(0);
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
            border-radius: 16px;
            box-shadow: var(--box-shadow);
            text-align: center;
            transition: var(--transition);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .testimonial-card::before {
            content: '\201C';
            position: absolute;
            top: 1rem;
            left: 2rem;
            font-size: 5rem;
            font-family: serif;
            color: var(--accent-color);
            opacity: 0.1;
            z-index: -1;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
        }

        .testimonial-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1.5rem;
            border: 3px solid var(--accent-color);
            padding: 5px;
            transition: var(--transition);
        }

        .testimonial-card:hover img {
            transform: scale(1.1);
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
            border-radius: 12px;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .about-image::after {
            content: '';
            position: absolute;
            top: 2rem;
            left: 2rem;
            width: 100%;
            height: 100%;
            border: 2px solid var(--accent-color);
            border-radius: 12px;
            z-index: -1;
            transition: var(--transition);
        }

        .about-image:hover::after {
            transform: translate(-10px, -10px);
        }

        .about-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .about-content p {
            color: var(--secondary-color);
            margin-bottom: 2rem;
        }

        /* Why Choose Us Section */
        .why-choose {
            padding: 8rem 2rem;
            background: #f9f9f9;
        }

        .why-choose-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .why-choose-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            margin-top: 4rem;
        }

        .why-choose-item {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .why-choose-item:hover {
            transform: translateY(-10px);
        }

        .why-choose-item .icon-box {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: var(--accent-color);
            transition: transform 0.3s ease;
        }

        .why-choose-item .icon-box i {
            font-size: 2rem;
            color: white;
        }

        .why-choose-item:hover .icon-box {
            transform: scale(1.1);
        }

        .why-choose-item h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .why-choose-item p {
            color: var(--secondary-color);
            line-height: 1.6;
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
            border-radius: 16px;
            box-shadow: var(--box-shadow);
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
            gap: 1.5rem;
            padding: 1rem;
            border-radius: 8px;
            transition: var(--transition);
        }

        .contact-info-item .info {
            flex: 1;
            min-width: 0;
        }

        .contact-info-item .info h4 {
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
            color: var(--primary-color);
        }

        .contact-info-item .info p {
            color: var(--secondary-color);
            font-size: 0.9rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .contact-info-item:hover {
            background: rgba(200, 169, 126, 0.1);
        }

        .contact-info-item i {
            font-size: 1.5rem;
            color: var(--accent-color);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(200, 169, 126, 0.1);
            transition: var(--transition);
        }

        .contact-info-item:hover i {
            transform: scale(1.1);
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
            border: 2px solid #eee;
            border-radius: 8px;
            font-family: inherit;
            transition: var(--transition);
            background: #f8f8f8;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-color);
            background: white;
        }

        .btn-submit {
            background: var(--accent-color);
            color: white;
            padding: 1rem 3rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            z-index: -1;
        }

        .btn-submit:hover::before {
            width: 100%;
        }

        /* Footer */
        .footer {
            background: var(--primary-color);
            color: white;
            padding: 4rem 2rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--accent-color), transparent);
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            position: relative;
            z-index: 1;
        }

        .footer-logo {
            margin-bottom: 1.5rem;
        }

        .footer-logo img {
            height: 70px;
            width: auto;
            filter: brightness(0) invert(1);
            transition: var(--transition);
            opacity: 0.9;
        }

        .footer-logo:hover img {
            opacity: 1;
            transform: scale(1.05);
        }

        .footer h4 {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 2px;
            background: var(--accent-color);
        }

        .footer ul {
            list-style: none;
        }

        .footer ul li {
            margin-bottom: 0.8rem;
            transition: var(--transition);
        }

        .footer ul li:hover {
            transform: translateX(5px);
        }

        .footer ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
        }

        .footer ul li a:hover {
            color: var(--accent-color);
        }

        .social-icons {
            display: flex;
            gap: 1.2rem;
            margin-top: 1.5rem;
        }

        .social-icons a {
            color: white;
            font-size: 1.2rem;
            transition: var(--transition);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .social-icons a:hover {
            color: var(--accent-color);
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-3px);
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
            .why-choose-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
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

            .logo img {
                height: 80px;
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
                font-size: 2.5rem;
            }

            .slide-content p {
                font-size: 1.1rem;
            }

            .contact-info {
                grid-template-columns: 1fr;
            }

            .logo img {
                height: 70px;
            }

            .mobile-menu-toggle {
                display: block;
                position: fixed;
                right: 2rem;
            }

            .nav-links {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 2rem;
                z-index: 999;
                padding-top: 80px;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                font-size: 1.2rem;
                padding: 1rem 2rem;
                width: 100%;
                text-align: center;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }

            .header.scrolled .mobile-menu-toggle {
                top: 50%;
            }

            .why-choose {
                padding: 6rem 1rem;
            }
            
            .why-choose-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .footer {
                padding: 3rem 1.5rem 1.5rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }

            .footer h4::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .footer ul li:hover {
                transform: none;
            }

            .social-icons {
                justify-content: center;
            }

            .footer-logo {
                display: flex;
                justify-content: center;
            }

            .contact-form {
                padding: 2rem;
                margin: 0 1rem;
            }

            .contact-info {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .contact-info-item {
                padding: 0.8rem;
                gap: 1rem;
            }

            .contact-info-item i {
                width: 40px;
                height: 40px;
                font-size: 1.2rem;
                flex-shrink: 0;
            }

            .contact-info-item .info h4 {
                font-size: 1rem;
            }

            .contact-info-item .info p {
                font-size: 0.85rem;
            }

            .section-title {
                font-size: 2rem;
                margin-bottom: 2rem;
            }

            .section-subtitle {
                font-size: 0.9rem;
            }

            .gallery-item {
                margin-top: 0 !important;
            }

            .gallery-grid {
                gap: 1rem;
            }

            .testimonial-card {
                padding: 2rem 1.5rem;
            }

            .why-choose-item {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .contact-form {
                padding: 1.5rem;
                margin: 0 0.5rem;
            }

            .form-group {
                margin-bottom: 1rem;
            }

            .form-group input,
            .form-group textarea {
                padding: 0.8rem;
                font-size: 0.9rem;
            }

            .contact-info {
                margin-top: 2rem;
                padding-top: 2rem;
            }

            .contact-info-item .info p {
                max-width: 200px;
            }

            .contact-info-item {
                flex-direction: row;
                align-items: center;
            }

            .contact-info-item i {
                font-size: 1.2rem;
                width: 35px;
                height: 35px;
            }

            .footer-logo img {
                height: 50px;
            }

            .mobile-menu-toggle {
                right: 1rem;
            }
        }

        /* Add smooth scrolling for better mobile experience */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        /* Prevent body scroll when mobile menu is open */
        body.menu-open {
            overflow: hidden;
        }

        .mobile-menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--primary-color);
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1001;
            padding: 0.5rem;
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
                position: fixed;
                right: 2rem;
            }

            .nav-links {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 2rem;
                z-index: 999;
                padding-top: 80px;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                font-size: 1.2rem;
                padding: 1rem 2rem;
                width: 100%;
                text-align: center;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }

            .header.scrolled .mobile-menu-toggle {
                top: 50%;
            }
        }

        /* Enhance AOS animations */
        [data-aos] {
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Add loading animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading::after {
            content: '';
            width: 40px;
            height: 40px;
            border: 3px solid #eee;
            border-top-color: var(--accent-color);
            border-radius: 50%;
            animation: loading 0.8s infinite linear;
        }

        @keyframes loading {
            to {
                transform: rotate(360deg);
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
                <img src="{{ asset('images/slider/second.png') }}" alt="Art 1">
                <div class="slide-content">
                    <h1>Welcome to Artisanaa</h1>
                    <p>Discover the beauty of contemporary art</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-overlay"></div>
                <img src="{{ asset('images/slider/first.png') }}" alt="Art 2">
                <div class="slide-content">
                    <h1>Unique Artworks</h1>
                    <p>Each piece tells a story</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-overlay"></div>
                <img src="{{ asset('images/slider/third.png') }}" alt="Art 3">
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
            <p>Art is my way of expressing emotions, capturing beauty, and bringing imagination to life.</p> 
            <p>Painting is more than a profession—it's a journey of self-expression and connection. Inspired by nature and emotions, I create artwork that resonates, evokes feelings, and enhances spaces.</p>
            <p>I specialize in abstract, natural, and artistic paintings, each crafted with depth and creativity.</p>
            <p>Every piece is made with passion, precision, and artistic integrity. My goal is to bring joy to my customers by delivering unique, high-quality paintings that inspire and uplift./p>
            <p>I believe art has no limits—it's a journey of expression and imagination.</p>
            <p>Step into my world, where every brushstroke tells a story waiting to be felt.</p>
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
    </script>
    </body>
</html>
