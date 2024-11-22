@extends('frontend.master')
@section('header')
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
                                <span class="text-pattern-line text-warning">lasting memories.</span>
                            </h1>
                            <p class="mb-0 text-white-stable lead" style='text-align:left'>Turn Interactions Into Lasting Relationships. Empower your business with AI-driven conversations that connect, convert, and delight customers effortlessly.</p>
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
    <section class="my-xl-9 my-5">
        <div class="container" data-cue="fadeIn">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="text-center mb-xl-7 mb-5">
                        <h2 class="mb-3">
                            What we do
                            <span class="text-primary">in a simple term.</span>
                        </h2>
                        <p class="mb-0">We focus on building chatbot tailored for verticals across the market and Industry.</p>
                    </div>
                </div>
            </div>
            <div class="table-responsive-lg">
                <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                    <div class="col-lg-4 col-md-6" data-cue="zoomIn">
                        <div class="card border-0 card-primary">
                            <div class="card-body p-5">
                                <div class="position-relative d-inline-block mb-5">
                                    <img src="assets/images/local-language.jpeg" alt="feature" class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm" />

                                    <div class="position-absolute bottom-0 end-0">
                                        <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bank2 text-primary" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <h4 class="card-title">Intelligent Conversational AI Tool</h4>
                                    <p class="mb-0 card-text">Effortlessly create engaging conversational experiences with generative AI that will elevate customer engagement, build loyalty, and drive meaningful business growth.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-cue="zoomIn">
                        <div class="card border-0 card-primary">
                            <div class="card-body p-5">
                                <div class="position-relative d-inline-block mb-5">
                                    <img src="assets/images/hero1.jpeg" alt="feature" class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm" />

                                    <div class="position-absolute bottom-0 end-0">
                                        <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-credit-card-2-front-fill text-primary" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <h4 class="card-title">Build customer relationships over 30+ Messaging channel.</h4>
                                    <p class="mb-0 card-text">Effortlessly serve millions of customers globally through the most robust messaging platforms, including sms and Voice system.</p>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-cue="zoomIn">
                        <div class="card border-0 card-primary">
                            <div class="card-body p-5">
                                <div class="position-relative d-inline-block mb-5">
                                    <img src="assets/images/mobile-device2.jpeg" alt="feature" class="avatar avatar-xl rounded-circle border-2 border border-white shadow-sm" />

                                    <div class="position-absolute bottom-0 end-0">
                                        <div class="icon-md icon-shape rounded-circle bg-white me-n2 mb-n2 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cash-stack text-primary" viewBox="0 0 16 16">
                                                <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                                <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <h4 class="card-title">Personalized Interaction & Mobile Integration.</h4>
                                    <p class="mb-0 card-text">Anticipate customer needs and deliver proactive solutions across all industries..</p>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-6" data-cue="fadeIn">
                <div class="col-xl-10 offset-xl-1">
                    <ul class="list-inline">
                        <li class="list-inline-item d-inline-flex align-items-center me-3 mb-2 mb-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span class="ms-2">24/7 account monitoring</span>
                        </li>
                        <li class="list-inline-item d-inline-flex align-items-center me-3 mb-2 mb-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span class="ms-2 me-3">Protection & peace of mind</span>
                        </li>
                        <li class="list-inline-item d-inline-flex align-items-center me-3 mb-2 mb-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span class="ms-2">Anytime, anywhere support</span>
                        </li>
                        <li class="list-inline-item d-inline-flex align-items-center me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            <span class="ms-2">Serious security</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Your finance end-->

    <!--5m member start-->
    <section class="py-xl-9 py-5 bg-primary">
        <div class="container" data-cue="fadeIn">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-12">
                    <div class="text-center mb-xl-7 mb-5">
                        <h2 class="text-white-stable mb-3">Why Choose Us?</h2>
                        <!-- <p class="mb-0 text-white-50">
                                We do this and that...
                            </p> -->
                    </div>
                </div>
            </div>
            <div class="row mb-7 pb-4 g-5 text-center text-lg-start">
                <div class="col-md-4" data-cue="fadeIn">
                    <h4 class="text-white-stable">Premium Communication Tools</h4>
                    <p class="text-white-50 mb-0">Which include SMS, email, voice calls, Social Media Tags, and AI-powered chatbots.</p>
                </div>
                <div class="col-md-4" data-cue="fadeIn">
                    <h4 class="text-white-stable">Multi Language Support</h4>
                    <p class="text-white-50 mb-0">Find out in real time when they’re opened, viewed and signed.</p>
                </div>
                <div class="col-md-4" data-cue="fadeIn">
                    <h4 class="text-white-stable">Mobile App Integration</h4>
                    <p class="text-white-50 mb-0">Use our native CRM integrations to pull customer data into your Tools fast.</p>
                </div>
            </div>
            <div class="row border-primary border-top g-5 g-lg-0 text-center text-lg-start" data-cue="fadeIn">
                <div class="col-lg-3 col-6 border-end-lg border-md-0 border-lg-primary" data-cue="fadeIn">
                    <div class="p-lg-5">
                        <h5 class="h1 text-white-stable mb-0">5M+</h5>
                        <span class="text-white-50">Members</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 border-end-lg border-md-0 border-lg-primary" data-cue="fadeIn">
                    <div class="p-lg-5">
                        <h5 class="h1 text-white-stable mb-0">95%</h5>
                        <span class="text-white-50">Customer satisfaction</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6 border-end-lg border-md-0 border-lg-primary" data-cue="fadeIn">
                    <div class="p-lg-5">
                        <h5 class="h1 text-white-stable mb-0">73%</h5>
                        <span class="text-white-50">Over year growth</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-cue="fadeIn">
                    <div class="p-lg-5">
                        <h5 class="h1 text-white-stable mb-0">250B</h5>
                        <span class="text-white-50">Money managed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--5m member end-->

    <!--Product designer start-->
    <section class="my-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                        <h2 class="mb-3">
                            Communication Suite for
                            <span class="text-primary">all business size.</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6 col-12">
                    <div class="nav flex-column nav-pills mb-5 mb-lg-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a
                            href="#"
                            class="nav-link active d-flex text-start align-items-center align-items-lg-start p-xl-4 p-3"
                            id="v-pills-small-business-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-small-business"
                            role="tab"
                            aria-controls="v-pills-small-business"
                            aria-selected="true">
                            <div class="d-flex">
                                <div class="icon-md icon-shape rounded-circle bg-white shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bank2 text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4 class="mb-0">SMS, Email & Voice Calls</h4>
                                <p class="mb-0 mt-lg-3 d-none d-lg-block">Reliable, high-quality messaging across multiple channels.</p>
                            </div>
                        </a>
                        <a
                            href="#"
                            class="nav-link d-flex text-start align-items-center align-items-lg-start p-xl-4 p-3"
                            id="v-pills-profile-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile"
                            role="tab"
                            aria-controls="v-pills-profile"
                            aria-selected="false">
                            <div class="d-flex">
                                <div class="icon-md icon-shape rounded-circle bg-white shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-credit-card-2-front-fill text-primary" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4 class="mb-0">AI-powered Chatbots</h4>
                                <p class="mb-0 mt-lg-3 d-none d-lg-block">Intelligent customer support tailored to various industry needs.</p>
                            </div>
                        </a>
                        <a
                            href="#"
                            class="nav-link d-flex text-start p-xl-4 p-3 align-items-center align-items-lg-start"
                            id="v-pills-enterprises-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-enterprises"
                            role="tab"
                            aria-controls="v-pills-enterprises"
                            aria-selected="false">
                            <div class="d-flex">
                                <div class="icon-md icon-shape rounded-circle bg-white shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cash-stack text-primary" viewBox="0 0 16 16">
                                        <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                        <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4 class="mb-0">Social Media Integration</h4>
                                <p class="mb-0 mt-lg-3 d-none d-lg-block">
                                    Automatically respond to mentions and tags to stay engaged with your audience.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-6 col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-small-business" role="tabpanel" aria-labelledby="v-pills-small-business-tab" tabindex="0">
                            <div class="position-relative scene" data-relative-input="true">
                                <figure><img src="assets/images/mobile-device-sms.jpeg" alt="finance" class="img-fluid rounded-3" data-cue="fadeIn" /></figure>

                                <div class="position-relative" data-depth="0.05">
                                    <img src="assets/images/landings/finance/card.svg" alt="" class="position-absolute bottom-0 end-0 px-4" />
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="position-relative scene" data-relative-input="true">
                                <figure><img src="assets/images/robot.jpeg" alt="finance" class="img-fluid rounded-3" data-cue="fadeIn" /></figure>

                                <div class="position-relative" data-depth="0.05">
                                    <img src="assets/images/landings/finance/card.svg" alt="" class="position-absolute bottom-0 start-0 px-4" />
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="v-pills-enterprises" role="tabpanel" aria-labelledby="v-pills-enterprises-tab" tabindex="0">
                            <div class="position-relative scene" data-relative-input="true">
                                <figure><img src="assets/images/social-media.jpeg" alt="finance" class="img-fluid rounded-3" /></figure>

                                <div class="position-relative" data-depth="0.05">
                                    <img src="assets/images/landings/finance/card.svg" alt="" class="position-absolute bottom-0 start-50 translate-middle-x" />
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
    <section class="my-xl-7 py-5">
        <div class="container" data-cue="fadeIn">
            <div class="row">
                <div class="col-lg-5 col-md-12" data-cue="fadeIn">
                    <div class="mb-xl-7 mb-5">
                        <h2 class="mb-3">
                        Does you business Harness the 
                            <span class="text-primary">Power of Conversational AI?</span>
                        </h2>
                        <p class="mb-0">Discover how Headtrax Solutions can elevate your customer interactions and help your business grow.</p>
                    </div>
                </div>
            </div>
            <div class="table-responsive-xl">
                <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                    <div class="col-lg-4 col-md-6 col-12" data-cue="slideInLeft">
                        <div class="p-xl-5">
                            <div class="d-flex align-items-center justify-content-between mb-5">
                                <div class="icon-xl icon-shape rounded-circle bg-primary border border-primary-subtle border-4 text-white-stable fw-semibold fs-3">1</div>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right text-body-tertiary" viewBox="0 0 16 16">
                                        <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </span>
                            </div>

                            <h3 class="h4">Get to know our solutions, and choose the most suitable for your need.</h3>
                            <!-- <p class="mb-0">Apply online on block website and fill the form by telling us your name, address, date of birth.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12" data-cue="slideInLeft">
                        <div class="p-xl-5">
                            <div class="d-flex align-items-center justify-content-between mb-5">
                                <div class="icon-xl icon-shape rounded-circle bg-primary border border-primary-subtle border-4 text-white-stable fw-semibold fs-3">2</div>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right text-body-tertiary" viewBox="0 0 16 16">
                                        <path
                                            fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                    </svg>
                                </span>
                            </div>

                            <h3 class="h4">Check our pricing plan</h3>
                            <p class="mb-0"><a href='#pricing'>Click here</a> to check our pricing plan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12" data-cue="slideInLeft">
                        <div class="p-xl-5">
                            <div class="d-flex align-items-center justify-content-between mb-5">
                                <div class="icon-xl icon-shape rounded-circle bg-primary border border-primary-subtle border-4 text-white-stable fw-semibold fs-3">3</div>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                </span>
                            </div>

                            <h3 class="h4">Contact us!</h3>
                            <p class="mb-0"><a href='#pricing'>Click here</a> to contact us.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--Get block card end-->

    <!--Customer stories start-->
    <section class="py-xl-9 py-5 bg-gray-100">
        <div class="container" data-cue="fadeIn">

            <div class="row">
                <div class="tab-content border mt-3 p-3 rounded-3" id="pills-tabTwoContent">
                    <div class="tab-pane tab-example-preview fade show active" id="pills-testmonial-one-preview" role="tabpanel" aria-labelledby="pills-testmonial-one-preview-tab">
                        <!--success stories-->
                        <section class="py-xl-9 py-5 bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 offset-xl-2 col-md-8 offset-md-2">
                                        <div class="text-center mx-xl-7 mb-5">
                                            <h2 class="mb-3">Read the real-life success stories of the companies and industries.</h2>
                                            <a href="#!" class="icon-link icon-link-hover fw-semicold">
                                                Browse all customer stories
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive-lg">
                                    <div class="row flex-nowrap pb-5 me-5 me-lg-0">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card shadow-sm h-100">
                                                <div class="card-body p-lg-5">
                                                    <figure class="mb-5">
                                                        <img src="../assets/images/client-logo/clients-logo-2.svg" alt="logo">
                                                    </figure>
                                                    <p class="mb-0">
                                                        “The team at Headtrax Solutions made integration effortless. Their platform has streamlined our processes and allowed us to focus on core business tasks. Highly recommended!”
                                                    </p>
                                                    <div class="mt-4">
                                                        <h5 class="mb-0">Fasanya Oluwapelumi</h5>
                                                        <small>Content Producer</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card shadow-sm h-100">
                                                <div class="card-body p-lg-5">
                                                    <figure class="mb-5">
                                                        <img src="../assets/images/client-logo/clients-logo-1.svg" alt="logo">
                                                    </figure>
                                                    <p class="mb-0">
                                                        “The language options are perfect for reaching our diverse client base. Headtrax Solutions has been a game-changer for our customer engagement strategies”
                                                    </p>
                                                    <div class="mt-4">
                                                        <h5 class="mb-0">Awe Alexander</h5>
                                                        <small>Social Media Manager</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="card shadow-sm h-100">
                                                <div class="card-body p-lg-5">
                                                    <figure class="mb-5">
                                                        <img src="../assets/images/client-logo/clients-logo-3.svg" alt="logo">
                                                    </figure>
                                                    <p class="mb-0">
                                                        “Headtrax Solutions transformed our communication approach. Their platform is robust, easy to use, and has significantly increased our operational efficiency.”
                                                    </p>
                                                    <div class="mt-4">
                                                        <h5 class="mb-0">Soleye Alexander</h5>
                                                        <small>Senior Research Program Manager</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--success stories-->
                    </div>
                    <div class="tab-pane tab-example-code fade" id="pills-testmonial-one-code" role="tabpanel" aria-labelledby="pills-testmonial-one-code-tab">
                        <div class="code-toolbar">
                            <pre class="language-markup" tabindex="0"><code class="language-markup"><span class="token comment">&lt;!--success stories--&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>section</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>py-xl-9 py-5 bg-light<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>container<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>row<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-xl-8 offset-xl-2 col-md-8 offset-md-2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text-center mx-xl-7 mb-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h2</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Read the real-life success stories of
                        the companies and industries.<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h2</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>#!<span class="token punctuation">"</span></span>
                        <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>icon-link icon-link-hover fw-semicold<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                        Browse all customer stories
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">xmlns</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>http://www.w3.org/2000/svg<span class="token punctuation">"</span></span> <span class="token attr-name">width</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>14<span class="token punctuation">"</span></span>
                            <span class="token attr-name">height</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>14<span class="token punctuation">"</span></span> <span class="token attr-name">fill</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>currentColor<span class="token punctuation">"</span></span>
                            <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>bi bi-arrow-right<span class="token punctuation">"</span></span> <span class="token attr-name">viewBox</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0 0 16 16<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>path</span> <span class="token attr-name">fill-rule</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>evenodd<span class="token punctuation">"</span></span>
                                <span class="token attr-name">d</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>path</span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>table-responsive-lg<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>row flex-nowrap pb-5 me-5 me-lg-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-4 col-md-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card shadow-sm h-100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body p-lg-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>figure</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>../assets/images/client-logo/clients-logo-2.svg<span class="token punctuation">"</span></span>
                                    <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>logo<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>figure</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                “Lorem ipsum dolor sit amet cons ectetur
                                adipiscing elit uisque sagittis risus sed
                                dolor lobortis, non rutrum massa ultricies
                                aecenas tempor, nisi nec
                                tempus lobortis”
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mt-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Anita parmar<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>small</span><span class="token punctuation">&gt;</span></span>Content Producer<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>small</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-4 col-md-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card shadow-sm h-100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body p-lg-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>figure</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>../assets/images/client-logo/clients-logo-1.svg<span class="token punctuation">"</span></span>
                                    <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>logo<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>figure</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                “Aenean pharetra finibus mauris a porttitor.
                                Nam dui tortor, finibus sit amet feugiat
                                porta, tempus in odio. Interdum et malesuada
                                fames ac ante ipsum
                                primis in faucibus.”
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mt-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Jitu Chauhan<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>small</span><span class="token punctuation">&gt;</span></span>Studio Manager<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>small</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>col-lg-4 col-md-6<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card shadow-sm h-100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>card-body p-lg-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>figure</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-5<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>../assets/images/client-logo/clients-logo-3.svg<span class="token punctuation">"</span></span>
                                    <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>logo<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>figure</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>p</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>“Pellentesque sit amet turpis
                                porta augue pretium dictum. Pellentesque
                                commodo bitur ut massa cursus, congue augue
                                vitae, efficitur metus.”<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>p</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mt-4<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>mb-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Sandip Chauhan<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
                                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>small</span><span class="token punctuation">&gt;</span></span>Senior Research Program
                                    Manager<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>small</span><span class="token punctuation">&gt;</span></span>
                            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>section</span><span class="token punctuation">&gt;</span></span>
<span class="token comment">&lt;!--success stories--&gt;</span></code></pre>
                            <div class="toolbar">
                                <div class="toolbar-item"><button class="copy-to-clipboard-button" type="button" data-copy-state="copy"><span>Copy</span></button></div>
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