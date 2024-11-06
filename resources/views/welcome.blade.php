@extends('layout.main')
@section('main-content')






    <!-- main-area -->
    <main>
        <!-- slider-area -->
        <section class="slider-area">
            <div class="slider-active">
                <div class="single-slider">
                    <div class="slider-angle-shape" data-background="img/slider/slider_shape.png"></div>
                    <div class="slider-bg" data-background="img/slider/banner_bg02.jpg"></div>
                    <div class="container custom-container">

                        <div class="row">
                            <div class="col-xl-6 col-lg-3">

                                <div class="slider-content">

                                    <span data-animation="fadeInUp" data-delay=".3s">Best Professional services Provides Affordable Coaches and Minibuses Hire</span>
                                    <h2 data-animation="fadeInUp" data-delay=".6s">Stallion Coaches</h2>
                                    <a href="{{ ('/about') }}" class="btn" data-animation="fadeInUp"
                                        data-delay="1.2s"><span>+</span> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Form Area -->
                    <div class="floating-form">
                        <h3 class="widget-title">Get in <span>Touch</span></h3>
                        <form action="{{ route('send.email') }}" method="post" class="login-form">
                            @csrf
                            <div class="form-grp">
                                <label for="name">Your Name <span>*</span></label>
                                <input type="text" id="name" name="name" placeholder="Enter Your Name">
                            </div>

                            <div class="form-grp">
                                <label for="email">Your Email <span>*</span></label>
                                <input type="text" id="email" name="email" placeholder="Enter Your Email">
                            </div>
                            <div class="form-grp">
                                <label for="mobile">Contact Number <span>*</span></label>
                                <input type="text" id="mobile" name="mobile" placeholder="Enter Contact Number">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input_from">Travel Date From</label>
                                        <input type="date" class="form-control date-input" id="input_from" name="f_date"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="input_to">Travel Date To</label>
                                        <input type="date" class="form-control date-input" id="input_to" name="t_date"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="form-label">Event Type</span>
                                <select class="form-control" name="carrier" required>
                                    <option value="Corporate Event" selected hidden>Corporate Event</option>
                                    <option>Airport Pickup/Drop</option>
                                    <option>Sporting Event</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Destination</span>
                                        <div class="form-grp">
                                            <input type="text" name="from" placeholder="From">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-grp"><br>
                                            <input type="text" name="fromto" placeholder="To">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <label for="message">Your Message <span>*</span></label>
                                <textarea name="message" id="message" placeholder="Anything We need to Know!.."></textarea>
                            </div>
                            <button class="btn" type="submit" name="submit">Submit</button>
                        </form>

                    </div>
                    <!-- Floating Form Area End -->
                </div>
            </div>
        </section>
        <!-- slider-area-end -->


        <!-- CSS for Floating Form -->
        <style>
           /* Base styling */
.date-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.floating-form {
    position: absolute;
    top: 50%;
    right: 1%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
    width: 400px;
    z-index: 10;
}

.floating-form h3 {
    font-size: 18px;
    margin-bottom: 8px;
    color: #333;
}

.floating-form .form-grp,
.floating-form .form-group {
    margin-bottom: 8px;
}

.floating-form input,
.floating-form select,
.floating-form textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.floating-form button.btn {
    background-color: #FF5400;
    color: #ffffff;
    padding: 10px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

.floating-form button.btn:hover {
    background-color: #ffffff;
    color: #FF5400;
}

/* Responsive styling */
@media (max-width: 768px) {
    .floating-form {
        width: 90%;
        right: 5%;
        padding: 15px;
        top: 10%;
        transform: translateY(0); /* Remove vertical centering on smaller screens */
    }

    .floating-form h3 {
        font-size: 16px;
        text-align: center;
    }

    .form-grp label, .form-group label, .form-label {
        font-size: 14px;
    }

    .date-input, .floating-form input, .floating-form select, .floating-form textarea {
        font-size: 14px;
    }

    .floating-form button.btn {
        padding: 8px;
    }

    /* Ensure that the row layout stacks vertically on smaller screens */
    .row {
        display: flex;
        flex-direction: column;
    }

    .col-md-6 {
        width: 100%;
        padding: 0;
    }
}

/* Extra small devices */
@media (max-width: 480px) {
    .floating-form {
        width: 100%;
        right: 0;
        padding: 15px;
    }

    .floating-form h3 {
        font-size: 14px;
        text-align: center;
    }

    .floating-form input, .floating-form select, .floating-form textarea {
        font-size: 14px;
    }

    .floating-form button.btn {
        font-size: 14px;
        padding: 10px;
    }
}


        </style>




        <div class="faq-area position-relative fix pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="img/new/f10.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <h4 class="active" href="#">About Stallion Coaches </h4>

                        <br>




                        <p align="justify"> Welcome to Stallion Coaches, the premier choice for affordable, high-quality coach and minibus hire across the United Kingdom. As a family-run business with over 15 years of experience, we are dedicated to ensuring every journey is safe, comfortable, and tailored to meet your needs..</p>

                        <p align="justify">Our extensive fleet of modern coaches and minibuses is maintained to the highest standards, offering a cost-effective solution for group travel without compromising on quality. From corporate events to school excursions and city tours, our team is here to simplify planning and deliver an exceptional travel experience.</p>
                        <p align="justify">At Stallion coaches, we have a fleet of luxury coaches to suit a variety of
                            your needs.</p>
                        <p align="justify">Located conveniently to serve diverse regions, Stallion Coaches is proud to provide reliable, professional service that goes beyond the standard. With our seasoned expertise, we prioritize innovation, efficiency, and above all, customer satisfaction
                        </p>
                        <a href="{{ ('/about') }}" class="btn">Read More</a>


                    </div>
                </div>
            </div>
            <div class="faq-bg-dots" data-background="img/bg/faq_dots_bg.jpg"></div>
        </div>

         <!-- fact-area -->
         <div class="container">
            <div class="row">
                <div class="col-md-15">
                    <div class="inventory-review-wrap mb-30">
                        <div class="inv-details-title">
                            <div class="review-top-left">
                                <h5>What our Customers say</h5>

                            </div>
                            <p class="write-review"><a href="#"> </a></p>
                        </div>
                        <div class="blog-comment">
                            <ul>
                                <li>
                                    <div class="single-comment">

                                        <div class="comment-text">
                                            <div class="comment-avatar-info">

                                                <div class="left">
                                                    <h5>Parnell<span class="comment-date"> </span></h5>
                                                    <div class="review">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <p> We had a wonderful experience on our Cornwall tour. They were on time,
                                                every time and made sure we travelled safely and comfortably. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-comment">

                                        <div class="comment-text">
                                            <div class="comment-avatar-info">
                                                <div class="left">
                                                    <h5>Allison<span class="comment-date"> </span></h5>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>

                                            </div>
                                            <p> Our train to Manchester was cancelled. Luckily Stallion coaches arrived
                                                immediately and drove us to our destination. I cannot image what my
                                                children would have gone through, had it not been for the replacement
                                                services they provided. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-comment">

                                        <div class="comment-text">
                                            <div class="comment-avatar-info">


                                                <div class="left">
                                                    <h5>Campbell<span class="comment-date"> </span></h5>
                                                    <div class="review">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <p> Our friends and I had a memorable trip to Italy this summer. I cannot
                                                speak more highly enough of driver Steve. His professionalism and
                                                friendly attitude have won us over. I would highly recommend Stallion
                                                coaches. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-comment">

                                        <div class="comment-text">
                                            <div class="comment-avatar-info">
                                                <div class="left">
                                                    <h5>Leroy<span class="comment-date"> </span></h5>
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>

                                            </div>
                                            <p> When my partner Jenny and I were getting married, we hired Stallion
                                                coaches to take our families to the destination. We had a memorable,
                                                courteous and super comfortable services provided by them. </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <!-- features-area -->
        <section class="features-area gray-lite-bg pt-100 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="features-item mb-30">
                            <div class="features-icon mb-20">
                                <img src="img/icon/h3_features_icon01.png" alt="">
                            </div>
                            <div class="features-content">
                                <h5>Luxury Coaches</h5>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="features-item mb-30">
                            <div class="features-icon mb-25">
                                <img src="img/icon/h3_features_icon02.png" alt="">
                            </div>
                            <div class="features-content">
                                <h5>Private Hire</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="features-item mb-30">
                            <div class="features-icon mb-25">
                                <img src="img/icon/h3_features_icon04.png" alt="">
                            </div>
                            <div class="features-content">
                                <h5>Cheapest Minibuses</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="features-item mb-30">
                            <div class="features-icon mb-25">
                                <img src="img/icon/h3_features_icon03.png" alt="">
                            </div>
                            <div class="features-content">
                                <h5>Corporate Hire</h5>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <!-- latest-cars-area -->
        <section class="latest-cars-area latest-cars-three pt-80 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title text-center mb-35">
                            <h2 class="overlay-title"> </h2>
                            <span class="sub-title"> </span>
                            <h2 class="title"> Our Fleet </h2>
                        </div>
                        <div class="latest-car-menu-wrap">

                        </div>
                    </div>
                </div>
                <div class="latest-cars-wrapper">
                    <div class="row latest-car-items-active">
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="#">
                                        <img src="img/new/fleet1.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="#">
                                        <img src="img/new/fleet2.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="#">
                                        <img src="img/new/fleet4.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="#">
                                        <img src="img/new/fleet5.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="{{ ('/') }}">
                                        <img src="img/new/fleet9.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="{{ ('/') }}">
                                        <img src="img/new/f10.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="{{ ('/') }}">
                                        <img src="img/new/fleet7.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="{{ ('/') }}">
                                        <img src="img/new/fleet8.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-two">
                            <div class="latest-car-item mb-40">
                                <div class="latest-car-thumb">
                                    <a href="{{ ('/') }}">
                                        <img src="img/new/fleet3.jpeg" alt="">
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="latest-car-btn text-center mt-10">
                                <a href="{{ ('/our-fleet') }}" class="btn">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest-cars-area-end -->




        </div>

    </main>
    <!-- main-area-end -->
@endsection
