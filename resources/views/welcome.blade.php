<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QalisFit - Train Smarter, Get Stronger</title>
    <!-- Feather Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: #e5e5e5;
            line-height: 1.6;
            background-color: #121212;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Typography */
        h1 {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
        }

        h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        h4 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        p {
            margin-bottom: 1rem;
        }

        .text-highlight {
            color: #FF5722;
        }

        .text-gray {
            color: #9e9e9e;
        }

        .text-white {
            color: #FFFFFF;
        }

        /* Buttons */
        .btn-shaker {
            background-color: #FF5722;
            color: white;
            border: none;
            width: fit-content;
            padding: 15px 24px;
            text-align: center;
            font-weight: 600;
            position: relative;
            border-radius: 5px 5px 25px 25px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn-shaker::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 10px;
            background-color: #FF5722;
            border-radius: 5px 5px 0 0;
            transition: all 0.3s ease;
        }

        .btn-shaker::after {
            content: "";
            position: absolute;
            top: -18px;
            left: 50%;
            transform: translateX(-50%);
            width: 15px;
            height: 8px;
            background-color: #FF5722;
            border-radius: 5px 5px 0 0;
            transition: background-color 0.3s ease;
        }

        .btn-shaker:hover {
            background-color: transparent;
            color: #FF5722;
            border-color: #FF5722;
            transform: translateY(-3px);
        }

        .btn-shaker:hover::before,
        .btn-shaker:hover::after {
            background-color: transparent;
        }
                .btn-trial {
                    background-color: transparent;
                    color: #FFFFFF;
                    border: 1px solid #424242;
                    border-radius: 20px;
                    padding: 6px 16px;
                    font-size: 0.875rem;
                    transition: all 0.3s ease;
                }

                .btn-trial:hover {
                    border-color: #FF5722;
                    color: #FF5722;
                    transform: translateY(-1px);
                }

        /* Navigation */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            transition: all 0.3s ease;
            background-color: rgba(18, 18, 18, 0.95);
            padding: 0 20px;
            backdrop-filter: blur(5px);
        }

        .navbar-scrolled {
            background-color: #1a1a1a;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 64px;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #FFFFFF;
            display: flex;
            align-items: center;
        }

        .brand-icon {
            width: 24px;
            height: 24px;
            background-color: #FFFFFF;
            border-radius: 50%;
            margin-right: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-links {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 2rem;
        }

        .navbar-links a {
            color: #9e9e9e;
            font-weight: 500;
        }

        .navbar-links a:hover {
            color: #FFFFFF;
        }

        .cta-button {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            color: #9e9e9e;
        }

        .mobile-menu {
            display: none;
            background-color: #1a1a1a;
            border-top: 1px solid #424242;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-menu a {
            display: block;
            padding: 12px 20px;
            color: #9e9e9e;
            border-bottom: 1px solid #212121;
        }

        .mobile-menu a:hover {
            background-color: #212121;
            color: #FFFFFF;
        }

        .mobile-menu .btn {
            width: calc(100% - 40px);
            margin: 15px 20px;
            text-align: center;
        }

        /* Hero Section */
        .hero {
            background-color: #121212;
            padding: 40px 0 80px;
            overflow: hidden;
            position: relative;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            position: relative;
            z-index: 2;
        }

        .hero-text {
            max-width: 100%;
        }

        .hero-tagline {
            font-size: 0.75rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #9e9e9e;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .hero-text h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            line-height: 0.9;
        }

        .hero-text h1 span {
            display: block;
        }

        .hero-text p {
            font-size: 1rem;
            color: #9e9e9e;
            margin-bottom: 2rem;
            max-width: 450px;
            line-height: 1.7;
        }

        .hero-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
            transform: translateY(-30px);
        }

        /* Stats Section */
        .stats {
            padding: 60px 0;
            background-color: #1a1a1a;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .stat-card {
            padding: 1.75rem;
            background-color: #212121;
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
            transform: translateY(-4px);
        }

        .stat-number {
            font-size: 2.25rem;
            font-weight: 700;
            color: #FF5722;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #9e9e9e;
            font-size: 1.05rem;
        }

        /* Trainer Section */
        .testimonials {
            padding: 80px 0;
            background-color: #121212;
        }

        .testimonial-slider {
            position: relative;
            width: 100%;
            overflow: visible;
        }

        .testimonial-track {
            display: flex;
            transition: transform 0.5s ease;
        }

        .testimonial-slide {
            min-width: 100%;
            padding: 1.5rem;
            box-sizing: border-box;
        }

        .testimonial-card {
            background-color: #212121;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-4px);
        }

        .testimonial-rating {
            display: flex;
            color: #FFD700;
            margin-bottom: 1rem;
        }

        .testimonial-text {
            color: #e0e0e0;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .author-info h4 {
            font-size: 1.1rem;
            color: #fff;
            margin-bottom: 0.25rem;
        }

        /* Modifikasi tombol navigasi ke samping card */
        .slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: rgba(255, 87, 34, 0.9);
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            transition: all 0.3s ease;
        }

        .slider-nav:hover {
            background-color: rgba(255, 87, 34, 1);
        }

        .prev-btn {
            /* Memindahkan tombol ke luar card */
            left: -24px;
        }

        .next-btn {
            /* Memindahkan tombol ke luar card */
            right: -24px;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: #1a1a1a;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .feature-card {
            padding: 2rem;
            border: 1px solid #424242;
            border-radius: 12px;
            transition: all 0.3s ease;
            background-color: #212121;
            height: 100%;
        }

        .feature-card:hover {
            border-color: #FF5722;
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-5px);
        }

        .feature-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            background-color: rgba(255, 87, 34, 0.15);
            border-radius: 50%;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            background-color: rgba(255, 87, 34, 0.25);
            transform: scale(1.1);
        }

        .feature-icon i {
            color: #FF5722;
            font-size: 1.25rem;
        }

        .feature-title {
            font-size: 1.35rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .feature-desc {
            color: #9e9e9e;
            line-height: 1.7;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background-image: url('https://web-back.perfectgym.com/sites/default/files/styles/900x/public/equipment%20%286%29.webp?itok=UbaJqjIr');
            background-attachment: fixed; /* Parallax effect */
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .cta::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6); /* Overlay biar teks tetap jelas */
            z-index: -1;
        }

        .cta-content {
            max-width: 700px;
            margin: 0 auto;
            position: relative; 
            z-index: 2;
        }

        .cta-content h2 {
            margin-bottom: 1.5rem;
            font-size: 2.25rem;
        }

        .cta-content p {
            margin-bottom: 2.5rem;
            font-size: 1.15rem;
            color: #9e9e9e;
        }

        .btn-primary {
            color: white;
            font-weight: 600;
            font-size: 1.125rem;
            text-decoration: none;
            transition: text-shadow 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary:hover {
            text-shadow: 0 0 8px white;
        }

        /* Footer */
        .footer {
            background-color: #0a0a0a;
            color: #9e9e9e;
            padding: 70px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.5rem;
        }

        .footer-column h3, 
        .footer-column h4 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .footer-column p {
            margin-bottom: 1.25rem;
            line-height: 1.7;
        }

        .social-links {
            display: flex;
            gap: 1.25rem;
        }

        .social-links a {
            color: #9e9e9e;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: white;
            transform: translateY(-3px);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #9e9e9e;
            transition: color 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: #FF5722;
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid #212121;
            margin-top: 3rem;
            padding-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }

        .animate-fade-in-up {
            opacity: 0;
            transform: translateY(20px);
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        /* Helper Classes */
        .flex-center {
            display: flex;
            align-items: center;
        }

        .icon-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Media Queries */
        @media (min-width: 768px) {
            .container {
                padding: 0 40px;
            }
            
            h1 {
                font-size: 3.5rem;
            }
            
            .hero {
                padding: 20px 0 100px;
            }
            
            .hero-content {
                flex-direction: row;
                align-items: center;
                gap: 3rem;
            }
            
            .hero-text {
                max-width: 50%;
                padding-left: 30px;
            }
            
            .hero-buttons {
                flex-direction: row;
                gap: 1rem;
            }
            
            .hero-image {
                flex: 1;
                text-align: right;
                transform: translateX(-20px);
            }
            
            .stats-grid,
            .features-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .trainer-content {
                flex-direction: row;
                align-items: center;
                gap: 3rem;
            }
            
            .trainer-info {
                padding-left: 1.5rem;
            }
            
            .footer-grid {
                grid-template-columns: repeat(4, 1fr);
            }
            
            .mobile-menu-btn {
                display: none;
            }
            
            .navbar-links {
                display: flex;
            }
        }

        @media (max-width: 767px) {
            .container {
                padding: 0 20px;
            }
            
            h1 {
                font-size: 2.5rem;
            }
            
            .navbar-links {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero-image {
                width: 100%;
                text-align: center;
                margin-top: 2rem;
            }
            
            .hero-text {
                text-align: center;
            }
            
            .hero-text p {
                margin-left: auto;
                margin-right: auto;
            }
            
            .feature-card {
                padding: 1.5rem;
            }
            
            .cta-content h2 {
                font-size: 1.75rem;
            }
        }

        @media (min-width: 992px) {
            .container {
                padding: 0 60px;
            }
            
            .hero-text h1 {
                font-size: 4rem;
            }
            
            .hero-text {
                padding-left: 50px;
            }
            
            .trainer-image img {
                max-width: 90%;
            }
        }

        @media (min-width: 1200px) {
            .hero-text h1 {
                font-size: 4rem;
            }
            
            .hero-text p {
                font-size: 1.15rem;
            }
        }

    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="mainNav">
        <div class="container">
            <a href="#" class="navbar-brand">
                <div class="brand-icon">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="#121212" stroke="none">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                    </svg>
                </div>
                QalisFit
            </a>
            
            <div class="navbar-links">
                <a href="#">Dashboard</a>
                <a href="#">Articles</a>
                <a href="#">Testimonial</a>
                <a href="#">About</a>
              </div>
          
              <div class="cta-button">
                <a href="{{ route('register') }}" class="btn-trial">Sign Up</a>
              </div>
            
            <button id="menuButton" class="mobile-menu-btn">
                <i data-feather="menu"></i>
            </button>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobileMenu" class="mobile-menu">
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Class</a>
            <a href="#">Lifestyle</a>
            <a href="#" class="btn btn-pulse">SignUp</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text animate-fade-in">
                    <div class="hero-tagline">TRAIN SMARTER, GET STRONGER</div>
                    <h1>Simple fitness experience for everyone.</h1>
                    <p>Track workouts, see results. Less thinking, more lifting</p>
                    <div class="hero-buttons">
                        <a href="{{ route('register') }}" class="btn btn-shaker">
                            Lets Join Us
                        </a>
                    </div>
                </div>
    
                <div class="hero-image animate-float">
                    <img src="https://media-hosting.imagekit.io/ae4a0a39ae524c34/heroimg.png?Expires=1840951917&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=G~yR0IdlV2jxJHeGJb9Ve1xpGAlf848ib-3RaPLYM2SitY4QfNTigtHQPQWK8eI-3YgC2sVSwnLueAvnW0pfzfdCpDMA5JYgn~sGl9TwOTHgDa8RVpFKDOhuaXstvkVb3Ml55MhxLY8S7rYGBXbSn54zzdn98074twCpPMVIy0~yoQsBg4bov7iC0MeBxSNotLRwvXd0Oz0ezV~GLFtzhMUTNX8P4XFUQAGl0Waz88DD5stnxlRRv-pUuONyFj3F-uXXBm4oUyucUil1np9fKmXiTnmXCvGYF67FR8fv2kvXJomF27QWkS8QAdLzHclTY~8q8qexZPA4kljZDtzOfg__" alt="Smart Watch" />
                </div>
            </div>
        </div>
    </section>
    

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card animate-fade-in-up">
                    <div class="stat-number">1000+</div>
                    <div class="stat-label">Success Stories</div>
                </div>
                <div class="stat-card animate-fade-in-up delay-100">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Expert Trainers</div>
                </div>
                <div class="stat-card animate-fade-in-up delay-200">
                    <div class="stat-number">100+</div>
                    <div class="stat-label">Workout Programs</div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h2>Apa Kata Mereka</h2>
            <div class="testimonial-slider">
                <div class="testimonial-track">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                            </div>
                            <p class="testimonial-text">
                                "Program ini luar biasa! Dalam 3 bulan saya berhasil menurunkan berat badan 12kg dan merasa jauh lebih sehat. Metode yang diajarkan sangat efektif dan mudah diikuti."
                            </p>
                            <div class="testimonial-author">
                                <img src="/api/placeholder/60/60" alt="Testimonial Author" class="author-image">
                                <div class="author-info">
                                    <h4>Dian Sastro</h4>
                                    <span class="text-highlight">Member sejak 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                            </div>
                            <p class="testimonial-text">
                                "Sebagai seseorang yang sibuk, program ini sangat cocok untuk saya. Latihan yang terstruktur dan bisa dilakukan di rumah membuat saya konsisten. Hasilnya terlihat nyata!"
                            </p>
                            <div class="testimonial-author">
                                <img src="/api/placeholder/60/60" alt="Testimonial Author" class="author-image">
                                <div class="author-info">
                                    <h4>Reza Rahadian</h4>
                                    <span class="text-highlight">Member sejak 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="testimonial-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                                <i data-feather="star"></i>
                            </div>
                            <p class="testimonial-text">
                                "Saya sudah mencoba berbagai program fitness sebelumnya, tapi tidak ada yang seefektif ini. Pelatih sangat memperhatikan teknik dan memberikan motivasi yang tepat."
                            </p>
                            <div class="testimonial-author">
                                <img src="/api/placeholder/60/60" alt="Testimonial Author" class="author-image">
                                <div class="author-info">
                                    <h4>Tara Basro</h4>
                                    <span class="text-highlight">Member sejak 2024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Controls -->
                <button class="slider-nav prev-btn" aria-label="Previous testimonial">
                    <i data-feather="chevron-left" width="32" height="32"></i>
                </button>
                <button class="slider-nav next-btn" aria-label="Next testimonial">
                    <i data-feather="chevron-right" width="32" height="32"></i>
                </button>
                
            </div>
        </div>
    </section>     

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Why Choose Us</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i data-feather="users"></i>
                    </div>
                    <h3 class="feature-title">Personal Trainer</h3>
                    <p class="feature-desc">
                        Dedicated coaches available to guide you through your fitness journey with personalized plans.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i data-feather="monitor"></i>
                    </div>
                    <h3 class="feature-title">Video Support</h3>
                    <p class="feature-desc">
                        High-quality video tutorials and real-time feedback sessions to perfect your form.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i data-feather="smartphone"></i>
                    </div>
                    <h3 class="feature-title">Mobile App</h3>
                    <p class="feature-desc">
                        Track your progress, access workouts, and stay motivated with our easy-to-use mobile application.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Transform Your Fitness?</h2>
            <p>Join thousands who have already changed their lives with our fitness program. Start your journey today!</p>
            <a href="#" class="btn btn-primary icon-btn">
                Get Started Now <i data-feather="arrow-right"></i>
            </a>
        </div>
        </div>
    </section>

    <!-- Footer -->
            <footer class="footer">
        <div class="container">
            <div class="footer-grid">
            <!-- Branding and Social Media -->
            <div class="footer-column">
                <h3>Fitness Pro</h3>
                <p>Transform your body and mind with our specialized fitness programs designed for everyone.</p>
                <div class="social-links">
                <!-- Facebook -->
                <a href="#">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="#">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" />
                    </svg>
                </a>

                <!-- Twitter -->
                <a href="#">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a href="#">
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>
                </div>
            </div>

            <!-- Company Links -->
            <div class="footer-column">
                <h4>Company</h4>
                <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Partners</a></li>
                <li><a href="#">News & Press</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div class="footer-column">
                <h4>Resources</h4>
                <ul class="footer-links">
                <li><a href="#">Blog</a></li>
                <li><a href="#">Guides</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Help Center</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-column">
                <h4>Contact</h4>
                <ul class="footer-links">
                <li><a href="mailto:info@fitnesspro.com">info@fitnesspro.com</a></li>
                <li><a href="tel:+1800123456">(800) 123-456</a></li>
                </ul>
            </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
            <p>© 2025 Fitness Pro. All Rights Reserved.</p>
            </div>
        </div>
        </footer>

        <!-- JavaScript -->
        <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Feather icons replacement
        if (typeof feather !== 'undefined') {
            feather.replace();
        }

        // Navbar scroll effect
        const navbar = document.getElementById('mainNav');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('navbar-scrolled', window.scrollY > 50);
        });

        // Mobile menu toggle
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            });
        }

        // Animate on scroll
        const animatedElements = document.querySelectorAll('.animate-fade-in-up');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
            }
            });
        }, { threshold: 0.1 });
        animatedElements.forEach(el => observer.observe(el));
        });
        </script>

        <script>
        document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.testimonial-track');
        const slides = document.querySelectorAll('.testimonial-slide');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        
        if (!track || slides.length === 0) return;

        let currentSlide = 0;
        const slideCount = slides.length;

        const firstSlideClone = slides[0].cloneNode(true);
        const lastSlideClone = slides[slideCount - 1].cloneNode(true);
        track.appendChild(firstSlideClone);
        track.insertBefore(lastSlideClone, slides[0]);

        track.style.transform = `translateX(-100%)`;

        function goToSlide(index) {
            track.style.transition = 'transform 0.5s ease';
            track.style.transform = `translateX(-${(index + 1) * 100}%)`;
            currentSlide = index;
        }

        function resetPosition() {
            if (currentSlide === slideCount) {
            track.style.transition = 'none';
            currentSlide = 0;
            track.style.transform = `translateX(-100%)`;
            } else if (currentSlide === -1) {
            track.style.transition = 'none';
            currentSlide = slideCount - 1;
            track.style.transform = `translateX(-${slideCount * 100}%)`;
            }
        }

        nextBtn.addEventListener('click', () => {
            if (currentSlide >= slideCount - 1) {
            goToSlide(slideCount);
            setTimeout(resetPosition, 500);
            } else {
            goToSlide(currentSlide + 1);
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentSlide <= 0) {
            goToSlide(-1);
            setTimeout(resetPosition, 500);
            } else {
            goToSlide(currentSlide - 1);
            }
        });

        track.addEventListener('transitionend', resetPosition);

        let autoSlide = setInterval(() => nextBtn.click(), 5000);
        track.addEventListener('mouseenter', () => clearInterval(autoSlide));
        track.addEventListener('mouseleave', () => {
            autoSlide = setInterval(() => nextBtn.click(), 5000);
        });

        let touchStartX = 0;
        let touchEndX = 0;

        track.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        });

        track.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            if (touchEndX < touchStartX - 50) nextBtn.click();
            else if (touchEndX > touchStartX + 50) prevBtn.click();
        });
        });
        </script>

    </body>
</html>