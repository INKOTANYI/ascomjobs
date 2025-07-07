<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Job Portal - Smart Career Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Smart job portal for career opportunities" name="keywords">
    <meta content="Connect with top jobs and talents effortlessly" name="description">
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f5f7fa; color: #333; overflow-x: hidden; }
        .header-carousel { position: relative; height: 100vh; overflow: hidden; }
        .header-carousel .owl-carousel-item { height: 100vh; }
        .header-carousel .owl-carousel-item img { width: 100%; height: 100%; object-fit: cover; filter: brightness(0.5); transition: filter 0.5s ease; }
        .header-carousel .owl-carousel-item:hover img { filter: brightness(0.7); }
        .header-content { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff; z-index: 1; }
        .header-content h1 { font-size: 4.5rem; font-weight: 700; background: linear-gradient(45deg, #fff, #e6f0fa); -webkit-background-clip: text; background-clip: text; color: transparent; text-transform: uppercase; animation: fadeInDown 1s ease-out; }
        .header-content p { font-size: 1.6rem; color: #e6f0fa; margin: 1rem 0; animation: fadeInUp 1.5s ease-out; }
        .header-content .btn-register { background: linear-gradient(90deg, #38b2ac, #6b46c1); border: none; padding: 1.2rem 3rem; font-size: 1.3rem; font-weight: 600; color: #fff; border-radius: 35px; transition: transform 0.4s ease, box-shadow 0.4s ease; }
        .header-content .btn-register:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(56, 178, 172, 0.4); }
        .parallax { background: linear-gradient(rgba(45, 55, 72, 0.7), rgba(45, 55, 72, 0.7)); height: 100%; width: 100%; position: absolute; top: 0; left: 0; z-index: 0; }
        .particles { position: absolute; width: 100%; height: 100%; z-index: 0; }
        @keyframes fadeInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes move { 0% { transform: translateY(0) translateX(0); } 50% { transform: translateY(-10px) translateX(10px); } 100% { transform: translateY(0) translateX(0); } }
        .navbar { background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .navbar-nav { flex-direction: column; align-items: flex-start; padding: 1rem 0; }
        .navbar-nav .nav-link { padding: 0.8rem 2rem; width: 100%; text-align: left; color: #2d3748; font-weight: 500; transition: color 0.3s ease, background-color 0.3s ease; }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active { color: #fff; background: linear-gradient(90deg, #2d3748, #4fd1c5); }
        .login-btn, .register-btn { margin: 0.5rem 0; padding: 0.75rem 2rem; border-radius: 25px; border: none; font-weight: 600; width: 100%; text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .login-btn { background: linear-gradient(135deg, #38b2ac, #6b46c1); color: #fff; }
        .login-btn:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(56, 178, 172, 0.5); }
        .register-btn { background: linear-gradient(135deg, #6b46c1, #38b2ac); color: #fff; }
        .register-btn:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(107, 70, 193, 0.5); }
        .who-we-are { background: linear-gradient(135deg, #edf2f7, #ffffff); padding: 40px 0; }
        .who-we-are h1 { color: #2d3748; font-size: 2.5rem; font-weight: 600; text-align: center; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 1px; }
        .who-we-are p { color: #4a5568; font-size: 1.2rem; line-height: 2; text-align: center; max-width: 900px; margin: 0 auto 40px; }
        .what-we-do { background: linear-gradient(135deg, #ffffff, #e6f0fa); padding: 40px 0; }
        .what-we-do h1 { color: #2d3748; font-size: 2.5rem; font-weight: 600; text-align: center; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 1px; }
        .what-we-do .service-item { background: #fff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 20px; margin-bottom: 20px; transition: transform 0.4s ease, box-shadow 0.4s ease; text-align: center; }
        .what-we-do .service-item:hover { transform: translateY(-10px); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); }
        .what-we-do .service-item h5 { color: #2d3748; font-size: 1.5rem; font-weight: 600; margin-bottom: 0.5rem; }
        .what-we-do .service-item p { color: #4a5568; font-size: 1.1rem; }
        .our-core-values { background: linear-gradient(135deg, #f7fafc, #ffffff); padding: 40px 0; }
        .our-core-values h1 { color: #2d3748; font-size: 2.5rem; font-weight: 600; text-align: center; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 1px; }
        .our-core-values p { color: #4a5568; font-size: 1.2rem; line-height: 2; text-align: center; max-width: 900px; margin: 0 auto 40px; }
        .our-core-values .value-item { background: #fff; border: none; border-radius: 20px; padding: 30px; text-align: center; transition: transform 0.4s ease, box-shadow 0.4s ease; margin-bottom: 20px; }
        .our-core-values .value-item:hover { transform: translateY(-15px); box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15); }
        .our-core-values .value-item i { font-size: 3rem; color: #38b2ac; margin-bottom: 1.5rem; }
        .our-core-values .value-item h5 { color: #2d3748; font-size: 1.5rem; font-weight: 600; }
        .our-core-values .value-item p { color: #4a5568; font-size: 1.1rem; }
        .footer { background: linear-gradient(135deg, #2d3748, #1a202c); color: #ffffff; padding: 60px 0; }
        .back-to-top { background: linear-gradient(90deg, #2d3748, #38b2ac); border-radius: 50%; transition: transform 0.4s ease, opacity 0.4s ease; }
        .back-to-top:hover { transform: rotate(360deg); opacity: 0.9; }
        .loading-spinner { display: none; width: 2.5rem; height: 2.5rem; border: 4px solid #38b2ac; border-top: 4px solid transparent; border-radius: 50%; animation: spin 1.2s linear infinite; margin: 0 auto; }
        @keyframes spin { to { transform: rotate(360deg); } }
        #spinner { display: none; }
        .map-container { position: relative; height: 400px; }
        .map-container iframe { width: 100%; height: 100%; border: 0; border-radius: 15px; }
        .map-overlay { position: absolute; top: 10px; left: 10px; background: rgba(255, 255, 255, 0.9); padding: 5px 10px; border-radius: 5px; display: flex; gap: 5px; z-index: 1; }
        .map-overlay button { background: #38b2ac; color: #fff; border: none; padding: 5px 10px; border-radius: 3px; cursor: pointer; }
        .map-overlay button:hover { background: #2d3748; }
        .modal-content { border-radius: 10px; }
        .modal-header { background: #38b2ac; color: #fff; }
        .modal-header .btn-close { color: #fff; }
        .custom-error { color: #dc3545; font-size: 0.9rem; margin-top: 0.25rem; display: block; }
        .admin-only { display: none; }
        .admin-only.admin-access { display: block; }
    </style>
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3.5rem; height: 3.5rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fas fa-briefcase me-3"></i>JobSmart</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#about" class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">About Us</a>
                    <a href="#jobs" class="nav-item nav-link {{ request()->routeIs('jobs.index') ? 'active' : '' }}">What We Do</a>
                    <a href="#values" class="nav-item nav-link">Our Values</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard') }}" class="nav-item nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
                            <a href="{{ route('logout') }}" class="nav-item nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @if (Auth::user()->role === 'admin')
                                <button class="nav-item nav-link btn btn-info admin-only admin-access" data-bs-toggle="modal" data-bs-target="#manageApplicationsModal">Manage Applications</button>
                            @endif
                        @else
                            <button class="login-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                            <a href="#" class="register-btn" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
        <div class="container-fluid p-0 mb-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('img/carousel-1.jpg') }}" alt="Job seekers at work">
                    <div class="parallax"></div>
                    <div class="header-content">
                        <h1>Unlock Your Career</h1>
                        <p>Discover top opportunities with JobSmart</p>
                        <a href="#" class="btn btn-register" data-bs-toggle="modal" data-bs-target="#registerModal">Register Now</a>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('img/carousel-2.jpg') }}" alt="Startup job environment">
                    <div class="parallax"></div>
                    <div class="header-content">
                        <h1>Build Your Future</h1>
                        <p>Connect with leading employers today</p>
                        <a href="#" class="btn btn-register" data-bs-toggle="modal" data-bs-target="#registerModal">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5 who-we-are" id="about">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">About Us</h1>
                <p class="wow fadeInUp" data-wow-delay="0.2s">JobSmart is a premier career solutions platform dedicated to connecting talented professionals with leading organizations. Our mission is to deliver exceptional job opportunities and innovative services, fostering a dynamic ecosystem where talent and ambition thrive.</p>
            </div>
        </div>
        <div class="container-xxl py-5 what-we-do" id="jobs">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">What We Do</h1>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <h5>Job Matching</h5>
                            <p>Connect talents with ideal career opportunities seamlessly.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <h5>Career Guidance</h5>
                            <p>Provide expert advice to navigate your professional journey.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <h5>Employer Solutions</h5>
                            <p>Help businesses find top-tier candidates efficiently.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <h5>Skill Development</h5>
                            <p>Offer training to enhance employability and career growth.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <h5>Resume Building</h5>
                            <p>Assist in creating standout resumes for job applications.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item">
                            <h5>Interview Prep</h5>
                            <p>Prepare candidates with mock interviews and strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5 our-core-values" id="values">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Our Values</h1>
                <p class="wow fadeInUp" data-wow-delay="0.2s">At JobSmart, we uphold the highest standards of excellence, integrity, and innovation. Our commitment to delivering exceptional career solutions drives us to build lasting partnerships and empower professionals with the resources they need to thrive in a competitive world.</p>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="value-item">
                            <i class="fas fa-balance-scale"></i>
                            <h5>Integrity</h5>
                            <p>We operate with transparency and ethical principles in all our endeavors.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="value-item">
                            <i class="fas fa-lightbulb"></i>
                            <h5>Innovation</h5>
                            <p>We embrace cutting-edge solutions to redefine career opportunities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="value-item">
                            <i class="fas fa-handshake"></i>
                            <h5>Partnership</h5>
                            <p>We foster strong, collaborative relationships with our clients and partners.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xxl py-5" id="contact">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Get in Touch</h1>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="text-primary mb-4">Quick Contact</h5>
                                <p><i class="fa fa-envelope me-3"></i>info@jobsmart.com</p>
                                <p><i class="fa fa-phone-alt me-3"></i>+250 788 123 456</p>
                                <p><i class="fa fa-map-marker-alt me-3"></i>123 Elegance St, Kigali, Rwanda</p>
                                <div class="d-flex pt-2">
                                    <a class="btn btn-square btn-light me-2" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-square btn-light" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="text-primary mb-4">Send Us a Message</h5>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15947.25878431133!2d30.0596!3d-1.9441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dcaea7a1a8f8a3%3A0x1e4b0c6a5f2f3f!2sKigali%2C%20Rwanda!5e0!3m2!1sen!2sus!4v1623456789!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                            <div class="map-overlay">
                                <button onclick="window.location.href='mailto:info@jobsmart.com'">Email Us</button>
                                <button onclick="window.open('tel:+250788123456')">Call Us</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">JobSmart</h5>
                        <p class="mb-4">Your premier destination for elite job opportunities and connections with top-tier employers.</p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Elegance St, Kigali, Rwanda</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+250 788 123 456</p>
                        <p><i class="fa fa-envelope me-3"></i>info@jobsmart.com</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white" href="{{ route('welcome') }}">Home</a>
                        <a class="btn btn-link text-white" href="#about">About Us</a>
                        <a class="btn btn-link text-white" href="#jobs">What We Do</a>
                        <a class="btn btn-link text-white" href="#values">Our Values</a>
                        <a class="btn btn-link text-white" href="#contact">Contact</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-4">Follow Us</h5>
                        <div class="d-flex">
                            <a class="btn btn-square btn-light me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-light" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright text-center">
                    <div class="row">
                        <div class="col-12 text-white">
                            © <a class="text-white border-bottom" href="#">JobSmart</a>, All Rights Reserved. | Designed by <a class="text-white border-bottom" href="#">Wiser Wide Mind Ltd</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-header bg-primary text-white" style="border-radius: 20px 20px 0 0;">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="form-label text-dark">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label text-dark">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register as an Applicant</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-info">Registration is managed by administrators. Please contact an admin to create your application.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="manageApplicationsModal" tabindex="-1" aria-labelledby="manageApplicationsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="manageApplicationsModalLabel">Manage Applications</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="manage-success-message" class="alert alert-success d-none" role="alert"></div>
                    <div id="manage-error-message" class="alert alert-danger d-none" role="alert"></div>
                    <form id="manageApplicationForm" method="POST" action="{{ route('applications.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="names">Full Name</label>
                                    <input type="text" class="form-control" id="names" name="names" required>
                                    <span class="text-danger error-names custom-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required pattern="^(?:\+250|07)\d{8}$" title="Phone must start with +250 or 07 followed by 8 digits">
                                    <span class="text-danger error-phone custom-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <span class="text-danger error-email custom-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="id_number">ID Number</label>
                                    <input type="text" class="form-control" id="id_number" name="id_number" required pattern="\d{16}" title="Must be 16 digits">
                                    <span class="text-danger error-id_number custom-error"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="department_id">Department</label>
                                    <select class="form-control" id="department_id" name="department_id" required>
                                        <option value="">Select Department</option>
                                        @forelse ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @empty
                                            <option value="" disabled>No departments available</option>
                                        @endforelse
                                    </select>
                                    <span class="text-danger error-department_id custom-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="province_id">Province</label>
                                    <select class="form-control" id="province_id" name="province_id" required>
                                        <option value="">Select Province</option>
                                        @forelse ($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @empty
                                            <option value="" disabled>No provinces available</option>
                                        @endforelse
                                    </select>
                                    <span class="text-danger error-province_id custom-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="district_id">District</label>
                                    <select class="form-control" id="district_id" name="district_id" required>
                                        <option value="">Select District</option>
                                    </select>
                                    <span class="text-danger error-district_id custom-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="sector_id">Sector</label>
                                    <select class="form-control" id="sector_id" name="sector_id" required>
                                        <option value="">Select Sector</option>
                                    </select>
                                    <span class="text-danger error-sector_id custom-error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="cv">Upload CV</label>
                                    <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx">
                                    <span class="text-danger error-cv custom-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="degree">Upload Degree</label>
                                    <input type="file" class="form-control" id="degree" name="degree" accept=".pdf,.doc,.docx">
                                    <span class="text-danger error-degree custom-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="id_doc">Upload ID Document</label>
                                    <input type="file" class="form-control" id="id_doc" name="id_doc" accept=".pdf,.jpg,.jpeg,.png">
                                    <span class="text-danger error-id_doc custom-error"></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Add Application</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-header bg-success text-white" style="border-radius: 20px 20px 0 0;">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-center">
                    <p class="mb-4" id="successMessage"></p>
                    <button type="button" class="btn btn-success w-100 py-2" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.header-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 6000,
            responsive: {
                0: { items: 1 },
                600: { items: 1 },
                1000: { items: 1 }
            }
        });

        $('a.nav-link, a.btn-link, .btn-register').on('click', function(e) {
            if (this.hash !== "") {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 800, function() {
                    window.location.hash = this.hash;
                });
            }
        });

        particlesJS('parallax', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: '#38b2ac' },
                shape: { type: 'circle' },
                opacity: { value: 0.5, random: true, anim: { enable: true, speed: 1, opacity_min: 0.1 } },
                size: { value: 3, random: true, anim: { enable: false } },
                line_linked: { enable: false },
                move: { enable: true, speed: 2, direction: 'none', random: true, straight: false, out_mode: 'out', bounce: false }
            },
            interactivity: { detect_on: 'canvas', events: { onhover: { enable: true, mode: 'repulse' }, onclick: { enable: true, mode: 'push' } } },
            retina_detect: true
        });

        $("#spinner").removeClass("show");

        new WOW().init();

        $('#registerModal').on('show.bs.modal', function() {
            $(this).find('.modal-dialog').css('opacity', '0').animate({ opacity: 1 }, 300);
        });

        $('#manageApplicationsModal').on('show.bs.modal', function() {
            $(this).find('.modal-dialog').css('opacity', '0').animate({ opacity: 1 }, 300);
            if (!{{ Auth::check() && Auth::user()->role === 'admin' ? 'true' : 'false' }}) {
                $(this).modal('hide');
                alert('Only administrators can manage applications.');
            }
        });

        $('#manageApplicationForm').on('submit', function(e) {
            e.preventDefault();
            $('.custom-error').text('');
            $('#manage-success-message, #manage-error-message').addClass('d-none');

            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#spinner').addClass('show');
                    $(this).find('button[type="submit"]').prop('disabled', true).text('Submitting...');
                },
                complete: function() {
                    $('#spinner').removeClass('show');
                    $(this).find('button[type="submit"]').prop('disabled', false).text('Add Application');
                },
                success: function(response) {
                    $('#manageApplicationsModal').modal('hide');
                    $('#successMessage').text(response.message);
                    $('#successModal').modal('show');
                    setTimeout(function() {
                        $('#successModal').modal('hide');
                    }, 5000);
                },
                error: function(xhr) {
                    $('#spinner').removeClass('show');
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        if (errors['email']) {
                            $('.error-email').text('This email is already in use. Please try a different one.');
                        }
                        if (errors['phone']) {
                            $('.error-phone').text('This phone number is already registered. Please use another.');
                        }
                        if (errors['id_number']) {
                            $('.error-id_number').text('This ID number is already taken. Please provide a unique one.');
                        }
                        $.each(errors, function(key, value) {
                            if (key !== 'email' && key !== 'phone' && key !== 'id_number') {
                                $('.error-' + key).text(value[0]);
                            }
                        });
                    } else {
                        $('#manage-error-message').removeClass('d-none').text('An error occurred. Please try again later.');
                    }
                }
            });
        });

        // Dependent dropdowns for manage applications modal
        $('#province_id').on('change', function() {
            var provinceId = $(this).val();
            if (provinceId) {
                $.ajax({
                    url: '/api/districts/' + provinceId,
                    type: 'GET',
                    success: function(data) {
                        var html = '<option value="">Select District</option>';
                        if (data && Array.isArray(data) && data.length > 0) {
                            $.each(data, function(key, value) {
                                html += '<option value="' + value.id + '">' + value.name + '</option>';
                            });
                        } else {
                            html = '<option value="">No Districts Available</option>';
                        }
                        $('#district_id').html(html);
                        $('#sector_id').html('<option value="">Select Sector</option>');
                    },
                    error: function(xhr) {
                        $('#district_id').html('<option value="">Error Fetching Districts</option>');
                        $('#sector_id').html('<option value="">Select District First</option>');
                    }
                });
            } else {
                $('#district_id').html('<option value="">Select District</option>');
                $('#sector_id').html('<option value="">Select Sector</option>');
            }
        });

        $('#district_id').on('change', function() {
            var districtId = $(this).val();
            if (districtId) {
                $.ajax({
                    url: '/api/sectors/' + districtId,
                    type: 'GET',
                    success: function(data) {
                        var html = '<option value="">Select Sector</option>';
                        if (data && Array.isArray(data) && data.length > 0) {
                            $.each(data, function(key, value) {
                                html += '<option value="' + value.id + '">' + value.name + '</option>';
                            });
                        } else {
                            html = '<option value="">No Sectors Available</option>';
                        }
                        $('#sector_id').html(html);
                    },
                    error: function(xhr) {
                        $('#sector_id').html('<option value="">Error Fetching Sectors</option>');
                    }
                });
            } else {
                $('#sector_id').html('<option value="">Select Sector</option>');
            }
        });

        @if (session('success'))
            $('#successModal').modal('show');
        @endif
    });
    </script>
</body>
</html>
