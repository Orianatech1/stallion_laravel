@extends('layout.main')
@section('main-content')
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Contact Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ ('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="contact-info-wrap">
                                <div class="section-title text-left mb-25">
                                    <span class="sub-title"> </span>
                                    <h2 class="title"> </h2>
                                    <div class="line"><img src="img/images/title_line.png" alt=""></div>
                                </div>
                                <p align="justify"> Our dedicated and friendly team is on standby 24/7 to take your calls and bookings</p>
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="content">
                                            <h5> </h5>
                                            <p>26 Manor Road,
Edgbaston, Birmingham.
United Kingdom.
B16 9ND</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                        <div class="content">
                                            <h5> </h5>
                                            <p><a href="tel:07733324160">07733324160 </a></p>
 <p><a href="tel:07769470144 "> 07769470144 </a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="far fa-envelope"></i></div>
                                        <div class="content">
                                            <h5> </h5>
                                            <p ><a href="mailto:bookings@stallioncoaches.com"><span class="" data-cfemail="">    bookings@stallioncoaches.com  </a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <div class="contact-form-wrap">
                                <div class="login-wrap">
                                    <h3 class="widget-title">Get in  <span>Touch</span></h3>
                                    <form action="#" class="login-form">
                                        <div class="form-grp">
                                            <label for="name">Your Name <span>*</span></label>
                                            <input type="text" id="name" placeholder="Your Name">
                                        </div>
                                        <div class="form-grp">
                                            <label for="email">Your Email <span>*</span></label>
                                            <input type="email" id="email" placeholder="Your Email">
                                        </div>
                                        <div class="form-grp">
                                            <label for="message">Your Message <span>*</span></label>
                                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                        </div>
                                        <button class="btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->





        </main>
        <!-- main-area-end -->

@endsection
