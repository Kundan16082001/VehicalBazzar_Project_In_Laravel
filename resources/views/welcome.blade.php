<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vehical Bazzar - Premium marketplace to buy and sell vehicles.">
    <meta name="keywords" content="vehicles, cars, bikes, automotive, marketplace, bazaar">
    <meta name="author" content="Vehical Bazzar-Kundan Giriya">
    <title>Vehical Bazzar - Premium Vehicle Marketplace</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: #f5f6fa;
            color: #333;
        }

        /* NAVBAR */
        .navbar {
            background: #ffffff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: #0057ff !important;
        }

        .nav-link {
            font-weight: 500;
            color: #333 !important;
            margin-right: 1rem;
        }

        .nav-link:hover {
            color: #0057ff !important;
        }

        /* HERO */
        .hero-section {
            background: linear-gradient(to right,
                    rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.4)),
                url('/images/hero.jpg') center/cover;
            color: white;
            padding: 7rem 2rem;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-top: 1rem;
            opacity: 0.9;
        }

        /* BRAND SLIDER */
        .slider-section {
            padding: 4rem 1rem;
            background-color: white;
        }

        .slide-track {
            display: flex;
            gap: 2rem;
            animation: scroll 25s linear infinite;
        }

        .slide-track:hover {
            animation-play-state: paused;
        }

        .slide img {
            height: 80px;
            width: auto;
            opacity: 0.8;
            transition: 0.3s;
        }

        .slide img:hover {
            opacity: 1;
            transform: scale(1.07);
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* SECTION HEADINGS */
        .section-title {
            font-size: 2.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .section-text {
            font-size: 1.15rem;
            opacity: 0.85;
        }

        /* CONTACT FORM */
        .contact-form {
            background: #1a1a1a;
            padding: 3rem;
            border-radius: 12px;
            color: white;
        }

        .contact-form .form-control {
            background: #2b2b2b;
            border: 1px solid #444;
            color: white;
        }

        .contact-form .form-control:focus {
            background: #3c3c3c;
            border-color: #667eea;
            box-shadow: none;
        }

        footer {
            background: #111;
            padding: 2rem;
            color: white;
            text-align: center;
            margin-top: 4rem;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Vehical Bazzar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login.form') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register.form') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="home" class="hero-section">
        <h1>Find the Perfect Vehicle for You</h1>
        <p>Browse thousands of certified cars, bikes and premium vehicles</p>
    </section>

    <!-- BRAND SLIDER -->
    <section class="slider-section">
        <div class="container">
            <h2 class="text-center mb-5 section-title">Top Automotive Brands</h2>

            <div class="d-flex overflow-hidden">
                <div class="slide-track">

                    <div class="slide"><img src="https://i.postimg.cc/nLGqy1Mv/toyota-logo.png"></div>
                    <div class="slide"><img src="https://i.postimg.cc/pXj5NB6k/ford-logo-(1).png"></div>
                    <div class="slide"><img src="https://i.postimg.cc/6QMyVb8N/bmw-logo.png"></div>
                    <div class="slide"><img src="https://i.postimg.cc/FzLz49DL/honda-logo.png"></div>
                    <div class="slide"><img src="https://i.postimg.cc/RZR13Bxj/hyundai-logo.png"></div>
                    <div class="slide"><img src="https://i.postimg.cc/TwZn82nj/nissan-logo.png"></div>
                    <div class="slide"><img src="https://i.postimg.cc/6QqZy40D/mercedes-benz-logo.png"></div>

                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="products" class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="section-title">Our Products</h2>
            <p class="section-text">Explore our wide range of premium vehicles.</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary mt-3 px-4">Browse Products</a>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2 class="section-title">About Us</h2>
            <p class="section-text">Vehical Bazzar is your trusted partner for buying and selling vehicles with
                confidence and transparency.</p>
        </div>
    </section>

    <!-- MISSION -->
    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="section-title">Our Mission</h2>
            <p class="section-text">Deliver the best shopping experience with high-quality vehicles and customer-first
                policies.</p>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center section-title mb-4">Contact Us</h2>

            <div class="contact-form">

                <h3>Send a Message</h3>
                <p class="mb-4 opacity-75">We will get back to you shortly.</p>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                    </div>

                    <button class="btn btn-primary w-100 py-2">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2024 Vehical Bazzar. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
