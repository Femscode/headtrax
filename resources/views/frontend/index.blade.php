@extends('frontend.master')
@section('header')
<style>
    .hover-lift {
        transition: all 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15);
    }

    .avatar {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .avatar-lg {
        width: 56px;
        height: 56px;
    }

    .transition-all {
        transition: all 0.3s ease;
    }

    .shadow-hover {
        transition: all 0.3s ease;
    }

    .shadow-hover:hover {
        box-shadow: 0 1rem 3rem rgba(var(--bs-primary-rgb), 0.175) !important;
    }

    .hover-lift {
        transition: transform 0.2s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
    }

    .text-gradient-primary {
        background: linear-gradient(45deg, var(--bs-primary), var(--bs-info));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .icon-sm {
        width: 32px;
        height: 32px;
    }

    .section-why-choose-us {
        overflow: hidden;
    }

    .bg-shapes {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .shape {
        position: absolute;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        animation: float 15s infinite linear;
    }

    .shape-1 {
        width: 300px;
        height: 300px;
        top: 10%;
        left: 5%;
        opacity: 0.3;
    }

    .shape-2 {
        width: 200px;
        height: 200px;
        bottom: 20%;
        right: 10%;
        opacity: 0.2;
    }

    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .spotlight-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .spotlight-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .icon-wrapper {
        width: 60px;
        height: 60px;
        background: #ffc107;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon {
        width: 32px;
        height: 32px;
        stroke: #1a1a1a;
    }

    .text-white-75 {
        color: rgba(255, 255, 255, 0.75);
    }

    .fs-sm {
        font-size: 0.85rem;
    }

    .h1 {
        line-height: 1.2;
    }

    .border-end {
        border-color: rgba(255, 255, 255, 0.2) !important;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }

    @media (max-width: 767px) {
        .border-end {
            border-right: none !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2) !important;
        }
    }

    .icon-lg {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hover-lift {
        transition: all 0.2s ease;
    }

    .hover-lift:hover {
        transform: translateY(-3px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08) !important;
    }

    .text-gradient-primary {
        background: linear-gradient(45deg, var(--bs-primary), #2196f3);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .nav-pills .nav-link {
        transition: all 0.3s ease;
    }

    .nav-pills .nav-link.active {
        background: linear-gradient(45deg, var(--bs-primary), #2196f3);
        color: white;
    }

    .nav-pills .nav-link.active .text-secondary {
        color: rgba(255, 255, 255, 0.8) !important;
    }

    .nav-pills .nav-link.active .icon-lg {
        background: rgba(255, 255, 255, 0.2) !important;
    }

    .nav-pills .nav-link.active i {
        color: white !important;
    }

    .shadow-hover {
        transition: all 0.3s ease;
    }

    .shadow-hover:hover {
        box-shadow: 0 1rem 3rem rgba(var(--bs-primary-rgb), 0.15) !important;
    }

    .hover-lift {
        transition: transform 0.2s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
    }

    .text-gradient-primary {
        background: linear-gradient(45deg, var(--bs-primary), #2196f3);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .icon-xl {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection

@section('content')

<main>
    <!--Hero start-->
    <section class="bg-primary pt-9 right-slant-shape" data-cue="fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="text-center text-lg-start mb-7 mb-lg-0" data-cues="slideInDown">
                        <div class="mb-4">
                            <h1 class="mb-5 display-5 text-white-stable">
                                Turn interactions into
                                <span class="text-pattern-line text-warning">lasting relationships.</span>
                            </h1>
                            <p class="mb-0 text-white-stable lead" style='text-align:left'>Empower your business with AI-driven conversations that connect, convert, and delight customers effortlessly.</p>
                            <!-- <p class="mb-0 text-white-stable lead">We empower businesses by providing seamless, localized, and tailored communication solutions that drive growth and enhance customer service.</p> -->
                        </div>
                        <div data-cues="slideInDown">
                            <a href="#" class="btn btn-dark me-2">Get Started</a>
                            <a href="https://wa.me/+2347081943867" class="btn btn-outline-warning">Become A Client</a>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-6 col-12">
                    <div class="position-relative z-1 pt-lg-9" data-cue="slideInRight">
                        <div class="position-relative">
                            <img src="assets/images/hero2.jpeg" alt="video" class="img-fluid rounded-3" width="837" />
                            <video src="assets/images/vid.mp4" alt="video" class="img-fluid rounded-3" width="837" autoplay muted loop></video>

                            <a
                                href="https://www.youtube.com/"
                                class="play-btn glightbox position-absolute top-50 start-50 translate-middle icon-shape icon-xl rounded-circle text-primary">
                                <i class="bi bi-play-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Hero start-->

    <!--Featured in start-->
    <div class="my-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12" data-cue="fadeIn">
                    <div class="text-center mb-4 mb-lg-7">
                        <small class="text-uppercase fw-semibold ls-md">Our Partners</small>
                    </div>

                    <div
                        class="swiper-container swiper"
                        id="swiper-1"
                        data-pagination-type=""
                        data-speed="400"
                        data-space-between="100"
                        data-pagination="true"
                        data-navigation="false"
                        data-autoplay="true"
                        data-autoplay-delay="3000"
                        data-breakpoints='{"480": {"slidesPerView": 2}, "768": {"slidesPerView": 3}, "1024": {"slidesPerView": 5}}'>
                        <div class="swiper-wrapper pb-6">
                            <div class="swiper-slide">
                                <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-1.svg" alt="logo" />
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-2.svg" alt="logo" />
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-3.svg" alt="logo" />
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-4.svg" alt="logo" />
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="text-center">
                                    <img src="assets/images/client-logo/clients-logo-5.svg" alt="logo" />
                                </figure>
                            </div>
                            <!-- Add more slides as needed -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        <div class="swiper-navigation">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Featured in end-->

    <!--Your finance start-->
    <section class="section-what-we-do py-7 py-xl-9 bg-light position-relative overflow-hidden">
        <!-- Background decoration -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 0% 0%, rgba(var(--bs-primary-rgb), 0.03) 0%, transparent 50%);"></div>

        <div  class="container  position-relative" data-cue="fadeIn">
            <!-- Header -->
            <div class="row mb-7">
                <div class="col-xl-8 col-lg-10 mx-auto text-center">
                    <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">Our Expertise</span>
                    <h2 class="display-4 mb-3 fw-bold">
                        What We Do
                        <span class="text-gradient-primary">In A Simple Term.</span>
                    </h2>
                    <p class="lead text-dark mb-0">We focus on building chatbots tailored for businesses across markets and industries.</p>
                </div>
            </div>

            <!-- Features -->
            <div class="row g-4 mb-7">
                <div class="col-lg-4 col-md-6" data-cue="fadeInUp" data-delay="100">
                    <div class="card border-0 bg-white shadow-hover h-100 transition-all hover-lift">
                        <div class="card-body p-5">
                            <div class="feature-icon-box mb-4">
                                <div class="icon-wrapper rounded-4 bg-primary bg-opacity-10 p-3 d-inline-flex position-relative">
                                    <img src="assets/images/local-language.jpeg" alt="Intelligent AI" class="rounded-3 img-fluid" style="width: 48px; height: 48px; object-fit: cover;">
                                    <div class="position-absolute top-0 end-0 mt-n2 me-n2">
                                        <span class="badge rounded-pill bg-primary"><i class="bi bi-robot"></i></span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title h3 mb-3">Intelligent Conversational AI</h4>
                            <p class="card-text text-dark mb-4">Create engaging conversational experiences with generative AI to boost customer engagement, loyalty, and business growth.</p>
                            <a href="#" class="btn btn-link text-primary p-0">
                                Learn More <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-cue="fadeInUp" data-delay="200">
                    <div class="card border-0 bg-white shadow-hover h-100 transition-all hover-lift">
                        <div class="card-body p-5">
                            <div class="feature-icon-box mb-4">
                                <div class="icon-wrapper rounded-4 bg-warning bg-opacity-10 p-3 d-inline-flex position-relative">
                                    <img src="assets/images/hero1.jpeg" alt="Messaging Channels" class="rounded-3 img-fluid" style="width: 48px; height: 48px; object-fit: cover;">
                                    <div class="position-absolute top-0 end-0 mt-n2 me-n2">
                                        <span class="badge rounded-pill bg-warning"><i class="bi bi-chat-dots"></i></span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title h3 mb-3">30+ Messaging Channels</h4>
                            <p class="card-text text-dark mb-4">Seamlessly connect with millions of customers worldwide via robust platforms, including SMS and voice systems.</p>
                            <a href="#" class="btn btn-link text-primary p-0">
                                Learn More <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-cue="fadeInUp" data-delay="300">
                    <div class="card border-0 bg-white shadow-hover h-100 transition-all hover-lift">
                        <div class="card-body p-5">
                            <div class="feature-icon-box mb-4">
                                <div class="icon-wrapper rounded-4 bg-success bg-opacity-10 p-3 d-inline-flex position-relative">
                                    <img src="assets/images/mobile-device2.jpeg" alt="Personalized Interaction" class="rounded-3 img-fluid" style="width: 48px; height: 48px; object-fit: cover;">
                                    <div class="position-absolute top-0 end-0 mt-n2 me-n2">
                                        <span class="badge rounded-pill bg-success"><i class="bi bi-phone"></i></span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title h3 mb-3">Personalized Mobile Integration</h4>
                            <p class="card-text text-dark mb-4">Anticipate customer needs and deliver proactive, tailored solutions across all industries.</p>
                            <a href="#" class="btn btn-link text-primary p-0">
                                Learn More <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Benefits -->
            <div class="row">
                <div class="col-12">
                    <div class="bg-white rounded-4 p-4 p-sm-5 shadow-sm">
                        <ul class="row row-cols-2 row-cols-lg-4 g-3 g-lg-4 mb-0 list-unstyled">
                            <li class="col">
                                <div class="d-flex align-items-center">
                                    <div class="icon-sm bg-success bg-opacity-10 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="bi bi-shield-check text-success"></i>
                                    </div>
                                    <span class="fw-medium small">24/7 Monitoring</span>
                                </div>
                            </li>
                            <li class="col">
                                <div class="d-flex align-items-center">
                                    <div class="icon-sm bg-success bg-opacity-10 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="bi bi-lock text-success"></i>
                                    </div>
                                    <span class="fw-medium small">Enterprise Security</span>
                                </div>
                            </li>
                            <li class="col">
                                <div class="d-flex align-items-center">
                                    <div class="icon-sm bg-success bg-opacity-10 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="bi bi-headset text-success"></i>
                                    </div>
                                    <span class="fw-medium small">24/7 Support</span>
                                </div>
                            </li>
                            <li class="col">
                                <div class="d-flex align-items-center">
                                    <div class="icon-sm bg-success bg-opacity-10 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                        <i class="bi bi-graph-up-arrow text-success"></i>
                                    </div>
                                    <span class="fw-medium small">99.9% Uptime</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!--Your finance end-->

    <!--5m member start-->
    <section class="section-why-choose-us py-5 py-xl-9 position-relative overflow-hidden text-white" style="background: linear-gradient(135deg, #1a73e8 0%, #0d47a1 100%);">
        <!-- Decorative Background Shapes -->
        <div class="bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>

        <div class="container position-relative" data-cue="fadeIn">
            <!-- Header -->
            <div class="row mb-5 mb-xl-7">
                <div class="col-xl-8 col-lg-10 mx-auto text-center">
                    <span class="badge bg-warning text-dark mb-3 px-3 py-2">Why Choose Us?</span>
                    <h2 style="color:#ffc107" class="display-4 fw-bold mb-3">Empower Your Business Communication</h2>
                    <p class="lead text-white-75">Transform your customer interactions with our cutting-edge solutions.</p>
                </div>
            </div>

            <!-- Features -->
            <div class="row g-4 mb-7">
                <div class="col-md-4" data-cue="fadeIn" data-delay="100">
                    <div class="spotlight-card p-5 rounded-4 h-100 transition-all">
                        <div class="icon-wrapper mb-4">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                                <path d="M8 12h8" />
                                <path d="M12 8v8" />
                            </svg>
                        </div>
                        <h4 style="color:#fff" class="fw-semibold mb-3">Premium Communication Tools</h4>
                        <p class="text-white-75 mb-0">Leverage SMS, email, voice, social media, and AI-powered chatbots for seamless customer engagement.</p>
                    </div>
                </div>
                <div class="col-md-4" data-cue="fadeIn" data-delay="200">
                    <div class="spotlight-card p-5 rounded-4 h-100 transition-all">
                        <div class="icon-wrapper mb-4">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 3h18v18H3z" />
                                <path d="M9 7h6" />
                                <path d="M9 11h6" />
                                <path d="M9 15h6" />
                            </svg>
                        </div>
                        <h4 style="color:#fff" class="fw-semibold mb-3">Multi-Language Support</h4>
                        <p class="text-white-75 mb-0">Engage customers globally with real-time, multi-language communication capabilities.</p>
                    </div>
                </div>
                <div class="col-md-4" data-cue="fadeIn" data-delay="300">
                    <div class="spotlight-card p-5 rounded-4 h-100 transition-all">
                        <div class="icon-wrapper mb-4">
                            <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M7 3h10a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                                <path d="M10 17h4" />
                            </svg>
                        </div>
                        <h4 style="color:#fff" class="fw-semibold mb-3">Mobile App Integration</h4>
                        <p class="text-white-75 mb-0">Integrate with native CRM systems to streamline customer data and enhance interactions.</p>
                    </div>
                </div>
            </div>

            <!-- Metrics -->
            <div class="row g-0 border-top border-primary text-center" data-cue="fadeIn">
                <div class="col-lg-3 col-6 border-end border-primary">
                    <div class="p-5 hover-lift">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <h3 class="h1 fw-bold text-white mb-0 counter-value" data-count="5000000">0</h3>
                            <span class="text-warning fs-3 ms-2">+</span>
                        </div>
                        <span class="text-white-75 text-uppercase fs-sm">Members</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 border-end border-primary">
                    <div class="p-5 hover-lift">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <h3 class="h1 fw-bold text-white mb-0 counter-value" data-count="95">0</h3>
                            <span class="text-warning fs-3 ms-2">%</span>
                        </div>
                        <span class="text-white-75 text-uppercase fs-sm">Customer Satisfaction</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 border-end border-primary">
                    <div class="p-5 hover-lift">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <h3 class="h1 fw-bold text-white mb-0 counter-value" data-count="73">0</h3>
                            <span class="text-warning fs-3 ms-2">%</span>
                        </div>
                        <span class="text-white-75 text-uppercase fs-sm">Yearly Growth</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="p-5 hover-lift">
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <h3 class="h1 fw-bold text-white mb-0 counter-value" data-count="250">0</h3>
                            <span class="text-warning fs-3 ms-2">B</span>
                        </div>
                        <span class="text-white-75 text-uppercase fs-sm">Money Managed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        // Counter Animation
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter-value');
            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-count');
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.round(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                };
                updateCounter();
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
    <!--5m member end-->

    <!--Product designer start-->
    <section class="section-communication-suite py-7 py-xl-9 bg-light position-relative overflow-hidden">
        <!-- Background decoration -->
        <div class="position-absolute top-0 end-0 w-100 h-100" style="background: radial-gradient(circle at 100% 0%, rgba(var(--bs-primary-rgb), 0.03) 0%, transparent 50%);"></div>

        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                        <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">Communication Suite</span>
                        <h2 class="display-4 mb-3 fw-bold">
                            Powerful Solutions for
                            <span class="text-gradient-primary">Every Business Size</span>
                        </h2>
                        <p class="lead text-dark mb-0">Discover our comprehensive communication tools designed to scale with your business needs</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-xl-5 col-lg-6 col-12">
                    <div class="nav flex-column nav-pills gap-3" id="v-pills-tab" role="tablist">
                        <button class="nav-link active p-4 rounded-4 border-0 bg-white shadow-sm hover-lift" id="v-pills-sms-tab" data-bs-toggle="pill" data-bs-target="#v-pills-small-business">
                            <div class="d-flex align-items-center">
                                <div class="icon-lg rounded-3 bg-primary bg-opacity-10 p-3 flex-shrink-0">
                                    <i class="bi bi-chat-dots fs-4 text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="mb-1">SMS, Email & Voice Calls</h4>
                                    <p class="mb-0 text-dark">Reliable, high-quality messaging across multiple channels with global reach.</p>
                                </div>
                            </div>
                        </button>

                        <button class="nav-link p-4 rounded-4 border-0 bg-white shadow-sm hover-lift" id="v-pills-chatbot-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile">
                            <div class="d-flex align-items-center">
                                <div class="icon-lg rounded-3 bg-warning bg-opacity-10 p-3 flex-shrink-0">
                                    <i class="bi bi-robot fs-4 text-warning"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="mb-1">AI-powered Chatbots</h4>
                                    <p class="mb-0 text-dark">Intelligent customer support with 24/7 automated responses and learning capabilities.</p>
                                </div>
                            </div>
                        </button>

                        <button class="nav-link p-4 rounded-4 border-0 bg-white shadow-sm hover-lift" id="v-pills-social-tab" data-bs-toggle="pill" data-bs-target="#v-pills-enterprises">
                            <div class="d-flex align-items-center">
                                <div class="icon-lg rounded-3 bg-success bg-opacity-10 p-3 flex-shrink-0">
                                    <i class="bi bi-share fs-4 text-success"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="mb-1">Social Media Integration</h4>
                                    <p class="mb-0 text-dark">Seamlessly manage all your social media interactions from one unified platform.</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-small-business" role="tabpanel">
                            <div class="position-relative">
                                <div class="card border-0 shadow-lg rounded-4 p-2 mb-4">
                                    <img src="assets/images/mobile-device-sms.jpeg" alt="SMS & Voice Solutions" class="img-fluid rounded-4" data-cue="fadeIn">
                                    <div class="position-absolute top-0 end-0 mt-3 me-3">
                                        <span class="badge bg-primary rounded-pill px-3 py-2">
                                            <i class="bi bi-check2-circle me-1"></i>Enterprise Ready
                                        </span>
                                    </div>
                                </div>
                                <div class="row g-4 mt-2">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center p-3 rounded-3 bg-white shadow-sm">
                                            <i class="bi bi-shield-check text-primary me-3 fs-4"></i>
                                            <span class="fw-medium">Secure Delivery</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center p-3 rounded-3 bg-white shadow-sm">
                                            <i class="bi bi-graph-up text-success me-3 fs-4"></i>
                                            <span class="fw-medium">99.9% Uptime</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel">
                            <div class="position-relative">
                                <div class="card border-0 shadow-lg rounded-4 p-2 mb-4">
                                    <img src="assets/images/robot.jpeg" alt="AI Chatbot" class="img-fluid rounded-4" data-cue="fadeIn">
                                    <div class="position-absolute top-0 end-0 mt-3 me-3">
                                        <span class="badge bg-warning text-dark rounded-pill px-3 py-2">
                                            <i class="bi bi-stars me-1"></i>AI Powered
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-enterprises" role="tabpanel">
                            <div class="position-relative">
                                <div class="card border-0 shadow-lg rounded-4 p-2 mb-4">
                                    <img src="assets/images/social-media.jpeg" alt="Social Media" class="img-fluid rounded-4">
                                    <div class="position-absolute top-0 end-0 mt-3 me-3">
                                        <span class="badge bg-success rounded-pill px-3 py-2">
                                            <i class="bi bi-lightning-charge me-1"></i>Real-time
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Product designer end-->

    <!--Get block card start-->
    <section class="my-xl-7 py-5 position-relative bg-light">
        <!-- Background decoration -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 100% 0%, rgba(var(--bs-primary-rgb), 0.03) 0%, transparent 50%);"></div>

        <div class="container position-relative" data-cue="fadeIn">
            <div class="row align-items-center mb-7">
                <div class="col-lg-7 col-md-12" data-cue="fadeIn">
                    <div class="mb-xl-0">
                        <span class="badge bg-primary-subtle text-primary px-3 py-2 mb-3">Get Started</span>
                        <h2 class="display-5 mb-3 fw-bold">
                            Does your business harness the
                            <span class="text-gradient-primary">Power of Conversational AI?</span>
                        </h2>
                        <p class="lead text-dark mb-0">Discover how Headtrax Solutions can elevate your customer interactions and help your business grow with our intelligent communication platform.</p>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="assets/images/robot.jpeg" alt="AI Assistant" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-cue="slideInUp" data-delay="100">
                    <div class="card border-0 shadow-hover hover-lift h-100 p-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-xl icon-shape rounded-circle bg-primary bg-opacity-10 text-primary fw-semibold fs-3 me-3 flex-shrink-0">1</div>
                                <h3 class="h4 mb-0">Explore Solutions</h3>
                            </div>
                            <p class="mb-4">Get to know our comprehensive suite of AI-powered communication tools and choose the perfect solution for your business needs.</p>
                            <a href="#solutions" class="btn btn-outline-primary rounded-pill">
                                View Solutions <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-cue="slideInUp" data-delay="200">
                    <div class="card border-0 shadow-hover hover-lift h-100 p-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-xl icon-shape rounded-circle bg-warning bg-opacity-10 text-warning fw-semibold fs-3 me-3 flex-shrink-0">2</div>
                                <h3 class="h4 mb-0">Select Plan</h3>
                            </div>
                            <p class="mb-4">Choose from our flexible pricing plans designed to scale with your business growth and communication needs.</p>
                            <a href="#pricing" class="btn btn-outline-primary rounded-pill">
                                View Pricing <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-cue="slideInUp" data-delay="300">
                    <div class="card border-0 shadow-hover hover-lift h-100 p-4">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="icon-xl icon-shape rounded-circle bg-success bg-opacity-10 text-success fw-semibold fs-3 me-3 flex-shrink-0">3</div>
                                <h3 class="h4 mb-0">Get Started</h3>
                            </div>
                            <p class="mb-4">Connect with our team to implement your customized communication solution and transform your business.</p>
                            <a href="#contact" class="btn btn-outline-primary rounded-pill">
                                Contact Us <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Get block card end-->

    <!--Customer stories start-->
    <section class="testimonials-section py-xl-9 py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #1a73e8 0%, #0d47a1 100%);">
        <!-- Background decoration -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 0% 100%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);"></div>

        <div class="container position-relative" data-cue="fadeIn">
            <div class="row mb-7">
                <div class="col-xl-8 offset-xl-2 col-md-8 offset-md-2">
                    <div class="text-center mb-5">
                        <span class="badge bg-warning text-dark px-3 py-2 mb-3">Success Stories</span>
                        <h2 class="display-4 mb-3 text-white fw-bold">
                            Real Stories from
                            <span class="text-warning">Real Customers</span>
                        </h2>
                        <p class="lead text-white-75 mb-0">Discover how businesses are transforming their communication with Headtrax Solutions</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-cue="slideInUp" data-delay="100">
                    <div class="card bg-white bg-opacity-10 border-0 h-100 transition-all hover-lift">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <span class="text-warning fs-1">
                                    <i class="bi bi-quote"></i>
                                </span>
                            </div>
                            <p class="text-white mb-4 lead">
                                "The team at Headtrax Solutions made integration effortless. Their platform has streamlined our processes and allowed us to focus on core business tasks. Highly recommended!"
                            </p>
                            <div class="d-flex align-items-center mt-4 pt-3 border-top border-white border-opacity-10">
                                <div class="avatar avatar-lg rounded-circle bg-primary">
                                    <span class="text-white fw-bold">FO</span>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-white mb-1">Fasanya Oluwapelumi</h5>
                                    <p class="text-white-75 mb-0 small">Content Producer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-cue="slideInUp" data-delay="200">
                    <div class="card bg-white bg-opacity-10 border-0 h-100 transition-all hover-lift">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <span class="text-warning fs-1">
                                    <i class="bi bi-quote"></i>
                                </span>
                            </div>
                            <p class="text-white mb-4 lead">
                                "The language options are perfect for reaching our diverse client base. Headtrax Solutions has been a game-changer for our customer engagement strategies"
                            </p>
                            <div class="d-flex align-items-center mt-4 pt-3 border-top border-white border-opacity-10">
                                <div class="avatar avatar-lg rounded-circle bg-success">
                                    <span class="text-white fw-bold">AA</span>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-white mb-1">Awe Alexander</h5>
                                    <p class="text-white-75 mb-0 small">Social Media Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-cue="slideInUp" data-delay="300">
                    <div class="card bg-white bg-opacity-10 border-0 h-100 transition-all hover-lift">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <span class="text-warning fs-1">
                                    <i class="bi bi-quote"></i>
                                </span>
                            </div>
                            <p class="text-white mb-4 lead">
                                "Headtrax Solutions transformed our communication approach. Their platform is robust, easy to use, and has significantly increased our operational efficiency."
                            </p>
                            <div class="d-flex align-items-center mt-4 pt-3 border-top border-white border-opacity-10">
                                <div class="avatar avatar-lg rounded-circle bg-warning">
                                    <span class="text-dark fw-bold">SA</span>
                                </div>
                                <div class="ms-3">
                                    <h5 class="text-white mb-1">Soleye Alexander</h5>
                                    <p class="text-white-75 mb-0 small">Senior Research Program Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Customer stories end-->

    <!--Call to action start-->

    <section class="container price-wrapper">
        <div class="row justify-content-center mb-8">
            <div class="col-xl-6 col-lg-10 col-12">
                <div class="text-center d-flex flex-column gap-5">
                    <div class="d-flex justify-content-center">
                        <span class="bg-primary bg-opacity-10 text-primary border-primary border px-3 py-2 fs-6 rounded-pill lh-1 align-items-center d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <g clip-path="url(#clip0_1717_21198)">
                                    <path d="M6 10.1253C6.076 11.0793 6.83 11.8223 8.182 11.9103V12.6143H8.782V11.9053C10.182 11.8073 11 11.0593 11 9.97326C11 8.98626 10.374 8.47726 9.255 8.21326L8.782 8.10126V6.18426C9.382 6.25226 9.764 6.58026 9.856 7.03426H10.908C10.832 6.11526 10.044 5.39626 8.782 5.31826V4.61426H8.182V5.33326C6.987 5.45026 6.172 6.16926 6.172 7.18626C6.172 8.08626 6.778 8.65826 7.785 8.89326L8.182 8.99126V11.0253C7.567 10.9323 7.16 10.5953 7.068 10.1253H6ZM8.177 7.95926C7.587 7.82226 7.267 7.54326 7.267 7.12326C7.267 6.65326 7.612 6.30126 8.182 6.19826V7.95826L8.177 7.95926ZM8.869 9.15226C9.586 9.31826 9.917 9.58726 9.917 10.0623C9.917 10.6043 9.505 10.9763 8.782 11.0443V9.13226L8.869 9.15226Z" fill="#8B3DFF"></path>
                                    <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#8B3DFF"></path>
                                    <path d="M8.5 14.1143C7.04131 14.1143 5.64236 13.5348 4.61091 12.5033C3.57946 11.4719 3 10.0729 3 8.61426C3 7.15557 3.57946 5.75662 4.61091 4.72517C5.64236 3.69372 7.04131 3.11426 8.5 3.11426C9.95869 3.11426 11.3576 3.69372 12.3891 4.72517C13.4205 5.75662 14 7.15557 14 8.61426C14 10.0729 13.4205 11.4719 12.3891 12.5033C11.3576 13.5348 9.95869 14.1143 8.5 14.1143ZM8.5 14.6143C9.28793 14.6143 10.0681 14.4591 10.7961 14.1575C11.5241 13.856 12.1855 13.4141 12.7426 12.8569C13.2998 12.2997 13.7417 11.6383 14.0433 10.9104C14.3448 10.1824 14.5 9.40219 14.5 8.61426C14.5 7.82633 14.3448 7.04611 14.0433 6.31816C13.7417 5.5902 13.2998 4.92877 12.7426 4.37162C12.1855 3.81447 11.5241 3.37251 10.7961 3.07098C10.0681 2.76945 9.28793 2.61426 8.5 2.61426C6.9087 2.61426 5.38258 3.2464 4.25736 4.37162C3.13214 5.49684 2.5 7.02296 2.5 8.61426C2.5 10.2056 3.13214 11.7317 4.25736 12.8569C5.38258 13.9821 6.9087 14.6143 8.5 14.6143Z" fill="#8B3DFF"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_1717_21198">
                                        <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="ms-1 text-uppercase ls-md fw-semibold">Pricing</span>
                        </span>
                    </div>
                    <div class="d-flex flex-column gap-3 mx-lg-8">
                        <h1 class="mb-0">Plan to unlock a new level of productivity</h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <div class="row align-items-center g-md-0 gy-4">
                    <div class="col-md-6 col-12">
                        <div class="card bg-light pricing rounded-end-md-0">
                            <div class="card-body d-flex flex-column gap-4">
                                <div>
                                    <h3>Basic</h3>

                                </div>
                                <h2 class="mb-0 d-flex align-items-center">
                                    <span>$100</span>
                                    <span class="price-duration fs-6 text-body ms-2">/month</span>
                                </h2>
                                <hr class="my-0">
                                <div>
                                    <h5 class="mb-3">What’s included</h5>
                                    <ul class="list-unstyled flex-column d-flex gap-2">

                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#64748B"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#64748B"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">Multi-Language Support</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#64748B"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#64748B"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">Mobile App Integration</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#64748B"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#64748B"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">Auto Response to Social Media Tags</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-outline-secondary text-dark">Select Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card bg-primary text-white pricing border-primary">
                            <div class="card-body d-flex flex-column gap-4 text-white-stable">
                                <div>
                                    <h3 class="text-white-stable">Premium</h3>

                                </div>
                                <h2 class="d-flex align-items-center text-white-stable">
                                    <div class="price-text">
                                        <div class="price price-show d-flex align-items-center">
                                            <span>$</span>
                                            <span>150</span>
                                            <span class="price-duration fs-6 ms-3">/month</span>
                                        </div>

                                    </div>
                                </h2>

                                <div class="text-white-stable">
                                    <h5 class="mb-3 text-white-stable">What’s included</h5>
                                    <ul class="list-unstyled flex-column d-flex gap-2">
                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#ffffff"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#ffffff"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">Multi-Language Support</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#ffffff"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#ffffff"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">Mobile App Integration</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#ffffff"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#ffffff"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">Auto Response to Social Media Tags</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#ffffff"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#ffffff"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">Developer Tools</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#ffffff"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#ffffff"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">AI-Powered Chatbots</span>
                                        </li>
                                        <li class="d-flex align-items-start">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                                    <g clip-path="url(#clip0_1710_19550)">
                                                        <path d="M8.5 15.6143C6.64348 15.6143 4.86301 14.8768 3.55025 13.564C2.2375 12.2513 1.5 10.4708 1.5 8.61426C1.5 6.75774 2.2375 4.97726 3.55025 3.66451C4.86301 2.35176 6.64348 1.61426 8.5 1.61426C10.3565 1.61426 12.137 2.35176 13.4497 3.66451C14.7625 4.97726 15.5 6.75774 15.5 8.61426C15.5 10.4708 14.7625 12.2513 13.4497 13.564C12.137 14.8768 10.3565 15.6143 8.5 15.6143ZM8.5 16.6143C10.6217 16.6143 12.6566 15.7714 14.1569 14.2711C15.6571 12.7708 16.5 10.736 16.5 8.61426C16.5 6.49253 15.6571 4.45769 14.1569 2.9574C12.6566 1.45711 10.6217 0.614258 8.5 0.614258C6.37827 0.614258 4.34344 1.45711 2.84315 2.9574C1.34285 4.45769 0.5 6.49253 0.5 8.61426C0.5 10.736 1.34285 12.7708 2.84315 14.2711C4.34344 15.7714 6.37827 16.6143 8.5 16.6143Z" fill="#ffffff"></path>
                                                        <path d="M11.4699 5.58405C11.4627 5.59095 11.456 5.5983 11.4499 5.60605L7.97685 10.0311L5.88385 7.93705C5.74168 7.80457 5.55363 7.73245 5.35933 7.73588C5.16503 7.7393 4.97964 7.81802 4.84223 7.95543C4.70482 8.09284 4.6261 8.27823 4.62268 8.47253C4.61925 8.66683 4.69137 8.85488 4.82385 8.99705L7.46985 11.6441C7.54113 11.7152 7.62601 11.7713 7.71943 11.8089C7.81285 11.8465 7.9129 11.865 8.0136 11.8631C8.11429 11.8612 8.21359 11.8391 8.30555 11.798C8.39751 11.757 8.48025 11.6978 8.54885 11.6241L12.5409 6.63405C12.6768 6.49138 12.7511 6.30095 12.7477 6.10392C12.7444 5.90689 12.6636 5.7191 12.5229 5.58114C12.3822 5.44319 12.1928 5.36616 11.9958 5.3667C11.7987 5.36725 11.6098 5.44532 11.4699 5.58405Z" fill="#ffffff"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1710_19550">
                                                            <rect width="16" height="16" fill="white" transform="translate(0.5 0.614258)"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="ms-2">24/7 Customer Support</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-dark">Select Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div style="background-image: url(assets/images/pattern/cta-pattern.png); background-position: center; background-repeat: no-repeat; background-size: cover" class="py-7 bg-primary">
            <div class="container my-lg-7" data-cue="zoomIn">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center mb-5">
                            <h2 class="text-white-stable mb-3">Experience the future of customer engagement with Headtrax Solutions Limited.</h2>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="/contact-us" class="btn btn-primary">Contact Us Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Call to action end-->
</main>
@endsection


@section('script')
@endsection