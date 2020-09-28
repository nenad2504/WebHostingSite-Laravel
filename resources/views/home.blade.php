@extends('layouts.app')

@section('content')
    <main>
    <!-- Hero Area Start-->
    <div class="slider-area">
        <div class="single-slider slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <p>Best Domain & hosting service provider in the area</p>
                            <h1>Fast & Secure web hosting</h1>
                        </div>
                        <!--Hero form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="Search for a domain">
                                <!-- icon search -->
                                <div class="search-form">
                                    <button><i class="ti-search"></i></button>
                                    </div>
                                <!-- icon search -->
                                <div class="world-form">
                                    <i class="fas fa-globe"></i>
                                    </div>
                            </div>
                        </form>	
                        <!-- Domain List -->
                        <div class="single-domain pt-30 pb-30">
                            <ul>
                                <li><span>.com</span> <p>$15.99</p></li>
                                <li><span>.net</span> <p>$10.99</p></li>
                                <li><span>.rog</span> <p>$10.99</p></li>
                                <li><span>.me</span> <p>$10.99</p></li>
                            </ul>
                        </div>
                        <!-- Domain List  End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero Area End-->
    <!--? Pricing Card Start -->
    <section class="pricing-card-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="{{ asset('img/gallery/price1.png') }}" alt="">
                            <h4>Shared Hosting</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$4.67 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="services.html" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="{{ asset('img/gallery/price1.png') }}" alt="">
                            <h4>Shared Hosting</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$4.67 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="services.html" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-card text-center mb-30">
                        <div class="card-top">
                            <img src="{{ asset('img/gallery/price1.png') }}" alt="">
                            <h4>Shared Hosting</h4>
                            <p>Starting at</p>
                        </div>
                        <div class="card-mid">
                            <h4>$4.67 <span>/ month</span></h4>
                        </div>
                        <div class="card-bottom">
                            <ul>
                                <li>2 TB of space</li>
                                <li>unlimited bandwidth</li>
                                <li>full backup systems</li>
                                <li>free domain</li>
                                <li>unlimited database</li>
                            </ul>
                            <a href="services.html" class="borders-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Card End -->
    <section class="load-balancing  pt-top section-bg2" data-background="{{ asset('img/gallery/section_bg01.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-10 ">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-90">
                        <h2>Cloud Load Balancing</h2>
                        <p>Deploy your service infrastructure on our fully redundant, high performance cloud platform and benefit from its high reliability, security and enterprise feature set.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Instant Activation</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Fully Redundant</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Powerful Automation</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Powerful Automation</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>High Performance</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-features mb-40">
                        <div class="features-icon">
                            <img src="{{ asset('img/gallery/right-icon.png') }}" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Dedicated Support</h3>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? About 1 Start-->
    <!-- Support Area Start -->
    <section class="support-area section-bg2 pt-130 pb-130" data-background="{{ asset('img/gallery/section_bg02.png') }}">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="support-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2">
                        <h2>24 Hour Expert <br>Support</h2>
                        <p class="support-details">We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support.</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="support-number">
                        <!-- Single contact -->
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="contact-number">
                                <span>+10 367 456 3678</span>
                            </div>
                        </div>
                        <!-- Single contact -->
                        <div class="single-contact">
                            <div class="contact-icon">
                                <i class="far fa-comment"></i>
                            </div>
                            <div class="contact-number">
                                <span>Chat with experts</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Support Area End -->
    <!-- Map -->
    <div class="map-are section-padding40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-10 ">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-90">
                        <h2>Cloud Load Balancing</h2>
                        <p>Deploy your service infrastructure on our fully redundant, high performance cloud platform and benefit from its high reliability, security and enterprise feature set.
                        </p>
                    </div>
                </div>
            </div>
            <div class="map">
                <div class="row">
                    <div class="col-xl-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.1786539269224!2d55.27218771500953!3d25.197196983896188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sbd!4v1588690958350!5m2!1sen!2sbd" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Map -->
        <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding section-bg2" data-background="{{ asset('img/gallery/section_bg04.png') }}">
    <div class="container">
        <!-- Testimonial contents -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <div class="support-caption">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle5">
                    <h2>Customer' s<br>story</h2>
                    <p class="support-details">Deploy your service infrastructure on our fully redundant, high cloud platform and benefit.</p>
                </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="h1-testimonial-active dot-style">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial ">
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <img src="{{ asset('img/gallery/testimonial.png') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>We operate one of the most advanced 100 Gbit to the networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <span>Mark Jonson</span>
                                    <p>@creative director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial ">
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <img src="{{ asset('img/gallery/testimonial.png') }}" alt="">
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>We operate one of the most advanced 100 Gbit to the networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <span>Mark Jonson</span>
                                    <p>@creative director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area Start -->
    <div class="brand-area">
        <div class="container">
            <div class="brand-active brand-border pt-50 pb-40">
                <div class="single-brand">
                    <img src="{{ asset('img/gallery/brand1.png') }}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{ asset('img/gallery/brand2.png') }}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{ asset('img/gallery/brand3.png') }}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{ asset('img/gallery/brand4.png') }}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{ asset('img/gallery/brand2.png') }}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{ asset('img/gallery/brand5.png') }}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{ asset('img/gallery/brand6.png') }}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{ asset('img/gallery/brand4.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
    </div>
    <!-- Testimonial End -->
    <!-- ask questions -->
    <section class="ask-questions section-bg2 section-padding30" data-background="{{ asset('img/gallery/section_bg03.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-10 ">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-90">
                        <h2>Frequently ask questions</h2>
                        <p>Deploy your service infrastructure on our fully redundant, high performance cloud platform and benefit from its high reliability, security and enterprise feature set.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-question d-flex mb-50">
                        <span> Q.</span>
                        <div class="pera">
                            <h2>Why can't people connect to the web server on my PC?</h2>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-question d-flex mb-50">
                        <span> Q.</span>
                        <div class="pera">
                            <h2>What domain name should I choose for my site?</h2>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-question d-flex mb-50">
                        <span> Q.</span>
                        <div class="pera">
                            <h2>How can I make my website work without www. in front?</h2>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-question d-flex mb-50">
                        <span> Q.</span>
                        <div class="pera">
                            <h2>Why does Internet Information Server want a password?</h2>
                            <p>We operate one of the most advanced 100 Gbit networks in the world, complete with Anycast support and extensive DDoS protection.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End ask questions -->
    <!--? About-2 Area Start -->
    <div class="about-area2 section-padding30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{ asset('img/gallery/about1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Commitment to Security</h2>
                        </div>
                        <p class="mb-40">Deploy your service infrastructure on our fully redundant, high cloud platform and benefit.
                        </p>
                        <a href="about.html" class="border-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About-2 Area End -->
    <!-- Want To work 2-->
    <section class="wantToWork-area">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Need any help?</h2>
                            <p>Deploy your service infrastructure on our fully redundant, high cloud platform and benefit.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-5 ">
                        <div class="double-btn f-right ">
                            <a href="contact.html" class="btn w-btn wantToWork-btn mr-20">Contact Us</a>
                            <a href="#" class="border-btn w-btn wantToWork-btn">Live Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End 2-->
</main>
@endsection