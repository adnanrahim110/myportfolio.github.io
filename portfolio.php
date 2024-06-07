<?php
$title = "Portfolio";
include 'includes/header.php';
include 'includes/sidebar.php';
?>
<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Portfolio area start -->
        <section class="portfolio__area-3 portfolio-v4">
            <div class="container pt-100 pb-150">
                <div class="row pb-150">
                    <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-title-2 animation__char_come">Inspiring <br>Creations</h2>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                        <div class="blog__text">
                            <p>Discover our exceptional creations in web design and development, setting new standards for digital innovation.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-sub-title title-anim">Featured <br>Work</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="swiper portfolio__slider-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="portfolio__slide-3">
                                        <a href="project-detail.php">
                                            <h3 class="portfolio__title-3">Western <span>Book </span> Publishing</h3>
                                            <img src="assets/imgs/portfolio/p1.jpg" alt="Portfolio Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio__slide-3">
                                        <a href="project-detail.php">
                                            <h3 class="portfolio__title-3">Amazon <span>Publishing</span> Portal</h3>
                                            <img style="filter: brightness(0.5);" src="assets/imgs/portfolio/p2.jpg" alt="Portfolio Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio__slide-3">
                                        <a href="project-detail.php">
                                            <h3 class="portfolio__title-3">Chris <span>Arnold</span> Website</h3>
                                            <img src="assets/imgs/portfolio/p3.jpg" alt="Portfolio Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio__slide-3">
                                        <a href="project-detail.php">
                                            <h3 class="portfolio__title-3">Anaaj <span>Valley</span> Website</h3>
                                            <img src="assets/imgs/portfolio/p7.jpg" alt="Portfolio Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio__slide-3">
                                        <a href="project-detail.php">
                                            <h3 class="portfolio__title-3">OnlyFans <span>Marketing</span> Hub</h3>
                                            <img style="filter: brightness(0.5);" src="assets/imgs/portfolio/p4.jpg" alt="Portfolio Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio__slide-3">
                                        <a href="project-detail.php">
                                            <h3 class="portfolio__title-3">car <span>Auction</span> Website</h3>
                                            <img src="assets/imgs/portfolio/p5.jpg" alt="Portfolio Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio__slide-3">
                                        <a href="service-details.html">
                                            <h3 class="portfolio__title-3">Amazon <span>Listing</span> Portal</h3>
                                            <img src="assets/imgs/portfolio/p6.jpg" alt="Portfolio Image">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                            <div class="swiper-btn">
                                <div class="pp-prev"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="pp-next"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'includes/cta.php';
        include 'includes/footer.php'; ?>