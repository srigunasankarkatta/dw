<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>

    <?php include("includes/styles.php"); ?>
    <style>
        .blog-one__date {
            position: absolute;
            bottom: 0;
            right: 190px;
            background-color: var(--qutiiz-base);
            padding: 12px 19px;
            border-top-left-radius: 0px;
            border-top-right-radius: 25px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 25px;
        }
        .p {
  text-align: center;
  max-width: 220px;
  word-wrap: break-word;
  word-break: break-all;
}
    </style>
</head>

<body>
    <?php include("includes/preloader.php"); ?>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include("includes/header.php"); ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <?php $i = 1;
                    foreach ($banners as $banner): ?>
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(<?php echo base_url('' . $banner['image']); ?>);">
                            </div>
                            <!-- /.image-layer -->
                            <div class="main-slider-border"></div>
                            <div class="main-slider-border main-slider-border-two"></div>
                            <div class="main-slider-border main-slider-border-three"></div>
                            <div class="main-slider-border main-slider-border-four"></div>
                            <div class="main-slider-border main-slider-border-five"></div>
                            <div class="main-slider-border main-slider-border-six"></div>

                            <div class="main-slider-shape-1"></div>
                            <div class="main-slider-shape-2"></div>
                            <div class="main-slider-shape-3"></div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="main-slider__content">
                                            <p>
                                                <?php echo $banner['name']; ?>
                                            </p>
                                            <h2>
                                                <?php echo $banner['description']; ?>
                                            </h2>

                                            <a href="about.html" class="thm-btn">Discover
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow icon-left-arrow"></i>Prev
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        Next <i class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Slider End-->

        
        <!--Get To Know Start-->
        <section class="get-to-know">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get-to-know__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="get-to-know__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/home_images/home_images.jpg" alt>
                                <div class="get-to-know__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="get-to-know__video-icon">
                                            <span class="icon-play-button"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get-to-know__right">
                            <!-- <div class="get-to-know-big-text">DigitalwWin</div> -->
                            <div class="section-title text-left">
                                <span class="section-title__tagline">get to
                                    know us</span>
                                <h2 class="section-title__title">Why Choose DigitalWin Business Agency For Your
                                    Business?</h2>
                            </div>
                            <p class="get-to-know__text-1">We’re committed
                                to delivering the best digital marketing for
                                your businesses</p>
                            <p class="get-to-know__text-2" style="padding-top: 20px; text-align: justify;"><b>Expertise:
                                </b> Our team of AI experts and industry professionals brings in-depth knowledge and
                                experience to the table, ensuring you receive top-notch solutions tailored to your
                                business needs.</p>
                            <p class="get-to-know__text-2" style="padding-top: 20px; text-align: justify;">
                                <b>Customization:</b> We understand that each business is unique, and so are its
                                challenges. Our AI solutions are highly customizable, ensuring a perfect fit for your
                                specific requirements.
                            </p>

                            <p class="get-to-know__text-2" style="padding-top: 20px; text-align: justify;">
                                <b>Results-Driven:</b> Your success is our ultimate goal. We measure our achievements
                                based on the tangible results we deliver to your business, helping you achieve a
                                significant return on your investment.

                            </p>
                            <div class="get-to-know__progress">
                                <div class="get-to-know__progress-single">
                                    <h4 class="get-to-know__progress-title">Digital
                                        marketing</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="70%">
                                            <div class="count-text">70%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="get-to-know__person">
                                    <div class="get-to-know__person-img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/resources/get-to-know-person-img.jpg"
                                            alt>
                                    </div>
                                    <div class="get-to-know__person-content">
                                        <h2 class="get-to-know__person-name">John
                                            Smith</h2>
                                        <p class="get-to-know__person-founder">CEO
                                            & co Founder</p>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Get To Know End-->

        <!--Services Two Start-->
        <section class="services-two">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">our team members</span> -->
                    <h2 class="section-title__title">Why Choose AI-Driven Solutions?

                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-two__title"><a href="#">Unparalleled Insights</a>
                            </h3>
                            <p class="services-two__text">With AI's ability to analyze vast amounts of data in
                                real-time, you gain invaluable insights into customer behavior, market trends, and
                                performance metrics. These insights empower you to make informed decisions that drive
                                success.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="200ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-growth"></span>
                            </div>
                            <h3 class="services-two__title"><a href="#">Enhanced Personalization</a>
                            </h3>
                            <p class="services-two__text">Customers today expect personalized experiences. AI enables
                                you to deliver tailored content, product recommendations, and communication, fostering
                                stronger relationships and customer loyalty.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="300ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-webpage"></span>
                            </div>
                            <h3 class="services-two__title"><a href="#">Improved Efficiency</a>
                            </h3>
                            <p class="services-two__text">Repetitive manual tasks can hinder productivity. AI automates
                                these processes, freeing up your team to focus on strategic initiatives that lead to
                                growth.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="#">Predictive Capabilities</a>
                            </h3>
                            <p class="services-two__text">AI predictive analytics help you anticipate future trends and
                                customer needs, allowing you to stay proactive and seize opportunities before your
                                competitors.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="#">Cost Savings</a></h3>
                            <p class="services-two__text">By streamlining processes and optimizing resources, AI helps
                                reduce operational costs, making your business more agile and resilient.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="#">Embracing AI in Business</a>
                            </h3>
                            <p class="services-two__text">Get insights into the importance of adopting AI-driven
                                solutions in today's rapidly evolving business landscape and how it can transform your
                                organization's success.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End-->

        <!--Brand One Start-->
        <!-- <section class="brand-one">
                <div class="container">
                    <div class="thm-swiper__slider swiper-container"
                        data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-1.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-2.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-3.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-4.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-5.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-1.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-2.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-3.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-4.png" alt>
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo base_url(); ?>assets/home/images/brand/brand-1-5.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        <!--Brand One End-->


        <!--Blog Page Start-->
        <section class="blog-one blog-one__blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/small_bussigness.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a> -->
                                <!-- <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">Small Businesses</a>
                                </h3>
                                <!-- <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/start_up.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">Startups</a>
                                </h3>
                                <!-- <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/ecommerce.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">E-commerce Businesses</a>
                                </h3>
                                <!-- <div class="blog-one__person">
                                    <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/b2b.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">B2B Companies </a>
                                </h3>
                                <div class="blog-one__person">
                                    <!-- <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/professional_services.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">Professional Services
                                    </a>
                                </h3>
                                <div class="blog-one__person">
                                    <!-- <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/local_bussigness.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">Local Businesses</a>
                                </h3>
                                <div class="blog-one__person">
                                    <!-- <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/non_profit_orginization.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">Nonprofit Organizations</a>
                                </h3>
                                <div class="blog-one__person">
                                    <!-- <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/educational.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">Education Institutions</a>
                                </h3>
                                <div class="blog-one__person">
                                    <!-- <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="900ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo base_url();?>assets/images/driven/real-estate.jpg" alt="">
                                <!-- <a href="#">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>25 <br> AUG</p>
                                </div> -->
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-folder-open"></i> Business</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 02 Comments</a>
                                    </li>
                                </ul> -->
                                <h3 class="blog-one__title">
                                    <a href="#">Real Estate Agencies</a>
                                </h3>
                                <div class="blog-one__person">
                                    <!-- <div class="blog-one__person-img">
                                        <img src="assets/images/blog/blog-one-person-img-1.jpg" alt="">
                                    </div>
                                    <div class="blog-one__person-content">
                                        <p>by Mike Hardson</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="blog-sidebar__load-more text-center">
                        <a href="blog.html" class="thm-btn blog-sidebar__load-more-btn">load more
                            posts</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!--Blog Page End-->


        <!--Services Two Start-->
        <section class="services-two">
            <div class="container">
                <div class="section-title text-center">
                    <!-- <span class="section-title__tagline">our team members</span> -->
                    <h2 class="section-title__title">Why Choose DigitalWin Business Agency For Your Business?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp mb-3" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-online-shopping"></span>
                            </div>
                            <h3 class="services-two__title"><a href="#">Expertise</a></h3>
                            <p class="services-two__text">Our team of AI experts and industry professionals brings
                                in-depth knowledge and experience to the table, ensuring you receive top-notch solutions
                                tailored to your business needs.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="200ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-growth"></span>
                            </div>
                            <h3 class="services-two__title"><a href="graphic-design.html">Customization</a>
                            </h3>
                            <p class="services-two__text"> We understand that each business is unique, and so are its
                                challenges. Our AI solutions are highly customizable, ensuring a perfect fit for your
                                specific requirements.
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="300ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-webpage"></span>
                            </div>
                            <h3 class="services-two__title"><a href="digital-marketing.html">Scalability</a></h3>
                            <p class="services-two__text">Whether you're a startup or an established enterprise, our
                                AI-driven solutions are designed to scale effortlessly with your business growth,
                                providing unmatched flexibility</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="social-marketing.html">Results-Driven</a></h3>
                            <p class="services-two__text">Your success is our ultimate goal. We measure our achievements
                                based on the tangible results we deliver to your business, helping you achieve a
                                significant return on your investment.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="social-marketing.html">Dynamic Pricing
                                    Optimization: </a></h3>
                            <p class="services-two__text">Stay ahead of the competition with AI-driven dynamic pricing
                                strategies. Our algorithms analyse market dynamics, competitor pricing, and customer
                                behaviour to optimize your pricing in real-time, maximizing profitability while
                                maintaining competitiveness.</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp  mb-3" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__icon">
                                <span class="icon-front-end"></span>
                            </div>
                            <h3 class="services-two__title"><a href="social-marketing.html">Embracing AI in Business</a>
                            </h3>
                            <p class="services-two__text">Get insights into the importance of adopting AI-driven
                                solutions in today's rapidly evolving business landscape and how it can transform your
                                organization's success.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one-shape-1"></div>
            <div class="counter-one-shape-2"></div>
            <div class="counter-one-shape-3"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="list-unstyled counter-one__list">
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="counter-one__icon">
                                    <span class="icon-checking"></span>
                                </div>
                                <h3 class="odometer" data-count="98">00</h3>
                                <p class="counter-one__text">Projects
                                    Completed</p>
                            </li>
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="200ms">
                                <div class="counter-one__icon">
                                    <span class="icon-recommend"></span>
                                </div>
                                <h3 class="odometer" data-count="64">00</h3>
                                <p class="counter-one__text">Satisfied
                                    Clients</p>
                            </li>
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="300ms">
                                <div class="counter-one__icon">
                                    <span class="icon-consulting"></span>
                                </div>
                                <h3 class="odometer" data-count="23">00</h3>
                                <p class="counter-one__text">Expert Teams</p>
                            </li>
                            <li class="counter-one__single wow fadeInUp" data-wow-delay="400ms">
                                <div class="counter-one__icon">
                                    <span class="icon-increment"></span>
                                </div>
                                <h3 class="odometer" data-count="35">00</h3>
                                <p class="counter-one__text">repeat
                                    customers</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-one__left wow fadeInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="why-choose-one__img">
                                <img src="<?php echo base_url(); ?>assets/home/images/home_images/home_images1.jpg" alt>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-one__right" style="padding-top: 40px;">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">company
                                        benefits</span> -->
                                <h2 class="section-title__title">Unlock new dimensions of success with our <BR>
                                    AI-driven services</h2>
                            </div>
                            <p class="why-choose-one__text">Our AI-driven marketing strategies are designed to make your
                                brand stand out in a crowded digital landscape.</p>
                            <div class="why-choose-one__bottom">
                                <div class="why-choose-one__bottom-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/resources/why-choose-one-bottom-img.jpg"
                                        alt>
                                </div>
                                <ul class="list-unstyled why-choose-one__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>AI-Powered Marketing</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Intelligent Data Analytics</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Automated Customer Support</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Predictive Sales</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-draw-check-mark"></span>
                                        </div>
                                        <div class="text">
                                            <p>Process Automation</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->

        <!--Team One Start-->
        <!-- <section class="team-one">
                <div class="team-one-container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">our team members</span>
                        <h2 class="section-title__title">Meet expert people</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div
                                class="team-one__carousel owl-theme owl-carousel">
                              
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-1.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Jessica Brown</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Jessica
                                            Brown</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-2.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Kevin Martin</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Kevin
                                            Martin</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-3.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Rose ford</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Rose
                                            ford</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-4.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Mike hardson</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Mike
                                            hardson</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-1.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Jessica Brown</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Jessica
                                            Brown</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-2.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Kevin Martin</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Kevin
                                            Martin</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-3.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Rose ford</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Rose
                                            ford</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-4.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Mike hardson</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Mike
                                            hardson</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-1.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Jessica Brown</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Jessica
                                            Brown</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-2.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Kevin Martin</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Kevin
                                            Martin</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-3.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Rose ford</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Rose
                                            ford</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img
                                            src="<?php echo base_url(); ?>assets/home/images/team/team-one-img-4.jpg"
                                            alt>
                                    </div>
                                    <div class="team-one__content">
                                        <h4 class="team-one__name">Mike hardson</h4>
                                        <p class="team-one__title">Designer</p>
                                    </div>
                                    <div class="team-one__hover">
                                        <h4 class="team-one__hover-name">Mike
                                            hardson</h4>
                                        <p class="team-one__hover-title">Designer</p>
                                        <div class="team-one__social">
                                            <a href="#"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#"><i
                                                    class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        <!--Team One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="testimonial-one__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">customer
                                        feedbacks</span>
                                    <h2 class="section-title__title">what
                                        they’re talking about company?</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-one__right">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text" style="text-align: justify;">I'm thrilled with the results
                                from this digital marketing agency. Their team's in-depth knowledge and innovative
                                strategies helped us reach a broader audience and boost conversions.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/male.jpg" alt
                                        width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png"
                                            alt>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">PRANAV
                                    </h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text" style="text-align: justify;">Efficient and knowledgeable
                                team! Their expertise in SEO and social media marketing played a crucial role in
                                elevating our brand visibility and driving more customers to our website.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/male.jpg" alt
                                        width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png"
                                            alt>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">CHAITANYA</h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text" style="text-align: justify;">I am extremely satisfied with
                                the services provided by ABC Digital Marketing. They have implemented successful SEO
                                strategies that have improved my website's organic rankings and traffic.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/female.jpg" alt
                                        width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png"
                                            alt>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">ANNAYA SHARMA</h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text" style="text-align: justify;">DigitalWin has exceeded my
                                expectations with their outstanding services. Their team's deep knowledge of the digital
                                landscape has helped me stay ahead of the competition.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/male.jpg " alt
                                        width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png"
                                            alt>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">SACHIN</h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text" style="text-align: justify;">DIGITALWIN has been an
                                invaluable asset to my business. Their expertise in search engine optimization has
                                significantly improved my website's visibility and organic rankings.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo base_url(); ?>assets/home/images/testimonial/female.jpg" alt
                                        width="80px" height="80px">
                                    <div class="testimonial-one__quote">
                                        <img src="<?php echo base_url(); ?>assets/home/images/testimonial/testimonial-one-quote.png"
                                            alt>
                                    </div>
                                </div>
                                <div class="testimonial-one__client-details">
                                    <h4 class="testimonial-one__client-name">RESHMA</h4>
                                    <p class="testimonial-one__client-title">customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-theme">
                    <div class="owl-controls">
                        <div class="custom-nav owl-nav"></div>
                    </div>
                </div>

            </div>
        </section>
        <!--Testimonial One End-->

        <!--DigitalWin Ready Start-->
        <section class="qutiiz-ready">
            <div class="qutiiz-ready-bg-box">
                <div class="qutiiz-ready-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo base_url(); ?>assets/home/images/backgrounds/qutiiz-ready-bg.jpg)">
                </div>
            </div>
            <div class="container">
                <div class="qutiiz-ready__inner">
                    <!-- <div class="qutiiz-ready__icon">
                            <span class="icon-wealth"></span>
                        </div> -->
                    <h2 class="qutiiz-ready__title">Experience growth with our <br>results-driven marketing services.
                    </h2>
                </div>
            </div>
        </section>
        <!--DigitalWin Ready End-->

        <!--Financial Advice Start-->
        <section class="financial-advice">
            <div class="financial-advice-bg"
                style="background-image: url(<?php echo base_url(); ?>assets/home/images/shapes/financial-advice-shape.png)">
            </div>
            <div class="container">
                <div class="financial-advice__tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#business" class="tab-btn"><span>MISSION
                            </span></li>
                        <li data-tab="#financial" class="tab-btn active-btn"><span>VISION
                            </span></li>
                        <li data-tab="#soltution" class="tab-btn"><span>
                                VALUES</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab" id="business">
                            <div class="tabs-content__inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="tabs-content__left">
                                            <!-- <ul
                                                    class="list-unstyled tabs-content__points">
                                                    <li>
                                                        <div class="icon">
                                                            <span
                                                                class="icon-draw-check-mark"></span>
                                                        </div>
                                                        <div class="text">
                                                            <h4>Highest Success
                                                                Rates</h4>
                                                            <p>Lorem nibh vel
                                                                velit a aliqu.
                                                                Aenean so tudin,
                                                                lorem is text
                                                                quis bibendum.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span
                                                                class="icon-draw-check-mark"></span>
                                                        </div>
                                                        <div class="text">
                                                            <h4>we grow
                                                                businesses</h4>
                                                            <p>Lorem nibh vel
                                                                velit a aliqu.
                                                                Aenean so tudin,
                                                                lorem is text
                                                                quis bibendum.</p>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                            <p class="about-page__right-text-2" style="text-align: justify;">Our mission
                                                is to provide exceptional digital marketing solutions that drive
                                                tangible results for our clients. We are committed to helping businesses
                                                unlock their full potential in the online landscape through strategic
                                                planning, innovative strategies, and data-driven insights. By staying at
                                                the forefront of digital marketing trends and technologies, we aim to
                                                deliver measurable success, enhance brand visibility, and maximize
                                                return on investment for our clients.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab active-tab" id="financial">
                            <div class="tabs-content__inner">
                                <div class="row">
                                    <div class="col-xl-3">

                                    </div>
                                    <div class="col-xl-9">
                                        <div class="tabs-content__left">
                                            <!-- <ul
                                                    class="list-unstyled tabs-content__points">
                                                    <li>
                                                        <div class="icon">
                                                            <span
                                                                class="icon-draw-check-mark"></span>
                                                        </div>
                                                        <div class="text">
                                                            <h4>Highest Success
                                                                Rates</h4>
                                                            <p>Lorem nibh vel
                                                                velit a aliqu.
                                                                Aenean so tudin,
                                                                lorem is text
                                                                quis bibendum.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span
                                                                class="icon-draw-check-mark"></span>
                                                        </div>
                                                        <div class="text">
                                                            <h4>we grow
                                                                businesses</h4>
                                                            <p>Lorem nibh vel
                                                                velit a aliqu.
                                                                Aenean so tudin,
                                                                lorem is text
                                                                quis bibendum.</p>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                            <p class="about-page__right-text-2" style="text-align: justify;">Our vision
                                                is to be a leading force in the digital marketing industry, empowering
                                                businesses to succeed and thrive in the digital world. We envision a
                                                future where every business, regardless of its size or industry, can
                                                leverage the power of digital marketing to achieve remarkable growth,
                                                create meaningful connections with their audience, and leave a lasting
                                                impact in their respective market.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab " id="soltution">
                            <div class="tabs-content__inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="tabs-content__left">
                                            <!-- <ul
                                                    class="list-unstyled tabs-content__points">
                                                    <li>
                                                        <div class="icon">
                                                            <span
                                                                class="icon-draw-check-mark"></span>
                                                        </div>
                                                        <div class="text">
                                                            <h4>Highest Success
                                                                Rates</h4>
                                                            <p>Lorem nibh vel
                                                                velit a aliqu.
                                                                Aenean so tudin,
                                                                lorem is text
                                                                quis bibendum.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span
                                                                class="icon-draw-check-mark"></span>
                                                        </div>
                                                        <div class="text">
                                                            <h4>we grow
                                                                businesses</h4>
                                                            <p>Lorem nibh vel
                                                                velit a aliqu.
                                                                Aenean so tudin,
                                                                lorem is text
                                                                quis bibendum.</p>
                                                        </div>
                                                    </li>
                                                </ul> -->
                                            <p class="about-page__right-text-2" style="text-align: justify;">Our values
                                                as human-generated language are rooted in innovation, integrity, and
                                                customer-centricity. We strive to push the boundaries of digital
                                                solutions, maintain transparency and honesty in our dealings, and place
                                                our clients at the heart of everything we do. With a passionate team
                                                dedicated to excellence, we aim to create winning strategies that drive
                                                success for our clients and foster long-term partnerships built on
                                                trust.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="financial-advice__bottom">
                    <p class="financial-advice__bottom-text">DigitalWin services
                        built specifically for your business. <a href="about.html">Find Your Solution</a></p>
                </div>
            </div>
        </section>
        <!--Financial Advice End-->


        <!-- <section class="blog-one">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">our blog posts</span>
                        <h2 class="section-title__title">News & Articles</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInUp"
                            data-wow-delay="100ms">
                            
                            <div class="blog-one__single">
                                <div class="blog-one__img">
                                    <img
                                        src="<?php echo base_url(); ?>assets/home/images/blog/blog-one-img-1.jpg"
                                        alt>
                                    <a href="#">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                    <div class="blog-one__date">
                                        <p>25 <br> AUG</p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i
                                                    class="far fa-folder-open"></i>
                                                Business</a></li>
                                        <li><a href="#"><i
                                                    class="far fa-comments"></i>
                                                02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title">
                                        <a href="#">Get few
                                            solutions to hire a best candidate</a>
                                    </h3>
                                    <div class="blog-one__person">
                                        <div class="blog-one__person-img">
                                            <img
                                                src="<?php echo base_url(); ?>assets/home/images/blog/blog-one-person-img-1.jpg"
                                                alt>
                                        </div>
                                        <div class="blog-one__person-content">
                                            <p>by Mike Hardson</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp"
                            data-wow-delay="200ms">
                            
                            <div class="blog-one__single">
                                <div class="blog-one__img">
                                    <img
                                        src="<?php echo base_url(); ?>assets/home/images/blog/blog-one-img-2.jpg"
                                        alt>
                                    <a href="#">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                    <div class="blog-one__date">
                                        <p>25 <br> AUG</p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i
                                                    class="far fa-folder-open"></i>
                                                Business</a></li>
                                        <li><a href="#"><i
                                                    class="far fa-comments"></i>
                                                02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title">
                                        <a href="#">Bring to the
                                            table win-win survival strategies</a>
                                    </h3>
                                    <div class="blog-one__person">
                                        <div class="blog-one__person-img">
                                            <img
                                                src="<?php echo base_url(); ?>assets/home/images/blog/blog-one-person-img-1.jpg"
                                                alt>
                                        </div>
                                        <div class="blog-one__person-content">
                                            <p>by Mike Hardson</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp"
                            data-wow-delay="300ms">
                            
                            <div class="blog-one__single">
                                <div class="blog-one__img">
                                    <img
                                        src="<?php echo base_url(); ?>assets/home/images/blog/blog-one-img-3.jpg"
                                        alt>
                                    <a href="#">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                    <div class="blog-one__date">
                                        <p>25 <br> AUG</p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i
                                                    class="far fa-folder-open"></i>
                                                Business</a></li>
                                        <li><a href="#"><i
                                                    class="far fa-comments"></i>
                                                02 Comments</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title">
                                        <a href="#">Capitalize
                                            on low hanging fruit to identify a</a>
                                    </h3>
                                    <div class="blog-one__person">
                                        <div class="blog-one__person-img">
                                            <img
                                                src="<?php echo base_url(); ?>assets/home/images/blog/blog-one-person-img-1.jpg"
                                                alt>
                                        </div>
                                        <div class="blog-one__person-content">
                                            <p>by Mike Hardson</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        <!--Blog One End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner wow fadeInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="cta-one-shape-1"></div>
                            <div class="cta-one-shape-2"></div>
                            <div class="cta-one-shape-3"></div>
                            <div class="cta-one__left">
                                <h2 class="cta-one__title">Your Success is Our Mission <br> Let’s Win Digitally</h2>
                            </div>
                            <div class="cta-one__right">
                                <a href="contact.html" class="cta-one__btn thm-btn">let’s get
                                    started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Site Footer Start-->
        <?php include("includes/footer.php"); ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <?php include("includes/mobilenav.php"); ?>
    <!-- /.mobile-nav__wrapper -->

    <!-- <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
          
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label>
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit"
                        class="thm-btn">
                        <i class="icon-magnifying-glass"></i>
                    </button>
                </form>
            </div>
           
        </div> -->
    <!-- /.search-popup -->

    <?php include("includes/scripts.php"); ?>
</body>

</html>