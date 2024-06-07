<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Axtra HTML5 Template">

    <title>My Portfolio</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/progressbar.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loading">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>
    <!-- Switcher Area Start -->
    <div class="switcher__area">
        <div class="switcher__icon">
            <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
            <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="switcher__items">
            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">Cursor</h2>
                </div>
                <div class="switcher__btn">
                    <select name="cursor-style" id="cursor_style">
                        <option value="1">default</option>
                        <option selected value="2">animated</option>
                    </select>
                </div>
            </div>

            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">mode</h2>
                </div>
                <div class="switcher__btn mode-type wc-col-2">
                    <button class="active" data-mode="light">light</button>
                    <button data-mode="dark">dark</button>
                </div>
            </div>

            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">Language Support</h2>
                </div>
                <div class="switcher__btn lang_dir wc-col-2">
                    <button class="active" data-mode="ltr">LTR</button>
                    <button data-mode="rtl">RTL</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Switcher Area End -->
    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>
    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>
    <!-- Porfolio Cursor -->
    <div class="cursor large" id="portf_cursor_6">View <br>Project</div>
    <!-- Header area start -->
    <header class="header__area-2">
        <div class="header__inner-5">
            <div class="header__logo-5">
                <a href="index.html" class="logo-dark"><img src="assets/imgs/logo/logo-black.png" alt="Site Logo"></a>
                <a href="index.html" class="logo-light"><img src="assets/imgs/logo/site-logo-white-2.png" alt="Site Logo"></a>
            </div>
            <div class="header__nav-icon-5">
                <button id="open_offcanvas"><span class="menu-text-pp">Menu</span><img src="assets/imgs/icon/menu-black.png" alt="Menubar Icon"></button>
            </div>
        </div>
    </header>
    <!-- Header area end -->
    <?php include 'includes/sidebar.php'; ?>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <div class="portfolio__page">
                    <div class="swiper portfolio__main-slider">
                        <div class="swiper-wrapper portfolio__main-wrapper">
                            <div class="swiper-slide">
                                <section class="portfolio__hero-area portfolio-section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="portfolio__hero">
                                                    <h1 class="title shape-circle">Full stack</h1>
                                                    <h2 class="title text-stroke">Web Designer</h2>
                                                    <h2 class="title">& Developer</h2>
                                                    <div class="btn-wrapper">
                                                        <a href="portfolio.php" class="wc-btn-dark">View all work</a>
                                                    </div>
                                                    <img src="assets/imgs/portfolio/me.png" alt="Personal Portfolio" class="pp-thumb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="swiper-slide">
                                <section class="portfolio-section portfolio__about pt-140 pb-150">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xxl-8 col-xxl-8 col-lg-8">
                                                <div class="portfolio__about-left">
                                                    <h2 class="sec-title">
                                                        Crafting Wonderful <span>Digital Experiences</span> for brands
                                                    </h2>
                                                    <img src="assets/imgs/shape/16.png" alt="Shape">
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                                <div class="sec-text">
                                                    <p>Based in Karachi, Pakistan, I'm embarked on a dynamic journey in software engineering, backed by over 3 years of experience. Proficient in both frontend and backend technologies, including HTML/CSS, JavaScript, PHP, MySQL, and advancing in React.js and Node.js, I also bring graphic design skills using Figma, Adobe XD, and Photoshop. Pursuing a Bachelor's degree, I'm committed to mastering C#, React.js, and Node.js to innovate and shape the digital landscape.</p>
                                                    <a href="about.php" class="wc-btn-dark">Explore Me</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="swiper-slide">
                                <section class="portfolio-section portfolio__project">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="pp-title-wrap">
                                                    <h2 class="pp-title">Selected <br> Work</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8">
                                                <div class="pp-slider-wrapper">
                                                    <div class="swiper portfolio__project-slider">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide pp-slide">
                                                                <div class="pp-slide-img">
                                                                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/p1.jpg" alt="Portfolio Thumbnail"></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide pp-slide">
                                                                <div class="pp-slide-img">
                                                                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/p7.jpg" alt="Portfolio Thumbnail"></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide pp-slide">
                                                                <div class="pp-slide-img">
                                                                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/p3.jpg" alt="Portfolio Thumbnail"></a>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide pp-slide">
                                                                <div class="pp-slide-img">
                                                                    <a href="portfolio-details.html"><img src="assets/imgs/portfolio/p2.jpg" alt="Portfolio Thumbnail"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="pp-next swipper-btn">prev</div>
                                                    <div class="pp-prev swipper-btn">Next</div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                                                <div class="swiper portfolio__project-thumbs">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="pp-slide-thumb">
                                                                <h3 class="pp-slide-title">Western Book Publishing</h3>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="pp-slide-thumb">
                                                                <h3 class="pp-slide-title">Anaaj Valley <br>E-commerce Website</h3>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="pp-slide-thumb">
                                                                <h3 class="pp-slide-title">Chris Arnold <br>Author Website</h3>
                                                                <p>March 2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="pp-slide-thumb">
                                                                <h3 class="pp-slide-title">Amazon publishing Portal</h3>
                                                                <p>March 2021</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="swiper-slide">
                                <section class="portfolio-section portfolio__service pt-140 pb-140">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                                                <h2 class="sec-title"> I MAKE
                                                    THE Service
                                                    BETTER.</h2>
                                            </div>
                                            <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                                                <div class="sec-text">
                                                    <p>Static and dynamic secure code evaluation can prevent a zero-day before your product is even launched.
                                                        I can seamlessly integrate with your dev environment.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portfolio__service-list">
                                            <div class="row justify-content-center">
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="portfolio__service-item">
                                                        <a href="service-details.html">
                                                            <h3 class="ps-title">Frontend <br> Developemnt</h3>
                                                            <ul>
                                                                <li>+ HTML & CSS</li>
                                                                <li>+ Bootstrap & Tailwind</li>
                                                                <li>+ JavaScript & jQuery</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="portfolio__service-item">
                                                        <a href="service-details.html">
                                                            <h3 class="ps-title">Backend<br> Developemnt</h3>
                                                            <ul>
                                                                <li>+ PHP & MySQLi</li>
                                                                <li>+ JavaScript</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="portfolio__service-item">
                                                        <a href="service-details.html">
                                                            <h3 class="ps-title">UI/UX &<br> Graphic Designing</h3>
                                                            <ul>
                                                                <li>+ Adobe Photoshop</li>
                                                                <li>+ Figma & Adobe XD</li>
                                                                <li>+ Adobe Illustrator</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                                    <div class="portfolio__service-item">
                                                        <a href="service-details.html">
                                                            <h3 class="ps-title">Some<br> Extra</h3>
                                                            <ul>
                                                                <li>+ Wordpress</li>
                                                                <li>+ Digital Marketing</li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xxl-12">
                                                <div class="ps-btn">
                                                    <a href="contact.html">Call me to get more extra service <strong>call now</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="swiper-slide">
                                <section class="portfolio-section portfolio__footer-area  pt-130">

                                    <!-- Contact area start -->
                                    <div class="">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="sec-title-wrapper">
                                                        <h2 class="pf-title">Let’s get in touch 🤟</h2>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact__text">
                                                        <p>Great! I'm excited to hear from you and let's start
                                                            something special togerter. call me for any inquery.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                                    <div class="pf-contact">
                                                        <h3>Don't be afraid man ! <br>say hello
                                                        </h3>
                                                        <ul>
                                                            <li><a href="tel:+923132874366" class="phone">(+92) 313 - 2874 - 366 </a></li>
                                                            <li><a href="mailto:adnankaka.786110@gmail.com">info@adnanrahim.com</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="pf-social">
                                                        <h3>follow </h3>
                                                        <ul>
                                                            <li><a href="#">Linkedin</a></li>
                                                            <li><a href="#">Github</a></li>
                                                            <li><a href="#">Instagram</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                                    <div class="contact__form">
                                                        <form action="config/mail.php" method="post">
                                                            <div class="row g-3">
                                                                <div class="col-xxl-6 col-xl-6 col-12">
                                                                    <input type="text" name="name" placeholder="Name *">
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-12">
                                                                    <input type="email" name="email" placeholder="Email *">
                                                                </div>
                                                            </div>
                                                            <div class="row g-3">
                                                                <div class="col-xxl-6 col-xl-6 col-12">
                                                                    <input type="tel" name="phone" placeholder="Phone *">
                                                                </div>
                                                                <div class="col-xxl-6 col-xl-6 col-12">
                                                                    <input type="text" name="subject" placeholder="Subject *">
                                                                </div>
                                                            </div>
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <textarea name="message" placeholder="Messages *"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <div class="pc-btn">
                                                                        <button class="wc-btn-dark">Send Me Quotes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contact area end -->

                                    <!-- Footer area start -->
                                    <footer class="portfolio__footer">
                                        <div class="container">
                                            <div class="pf-btm">
                                                <div class="row">
                                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                                                        <div class="footer__copyright-2">
                                                            <p class="d-inline">© 2024 - 2025 | Alrights reserved by <a href="" target="_blank">adnan</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-7">
                                                        <div class="footer__nav">
                                                            <ul class="footer-menu menu-anim">
                                                                <li><a href="about.php">about</a></li>
                                                                <li><a href="portfolio.php">Portfolio</a></li>
                                                                <li><a href="contact.php">contact</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                    <!-- Footer area end -->
                                </section>
                            </div>
                        </div>
                        <div class="swiper-pagination circle-pagination-2"></div>
                    </div>
                </div>
            </main>

        </div>
    </div>


    <!-- All JS files -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/chroma.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/vanilla-tilt.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/9bd98cd353.js" crossorigin="anonymous"></script>

</body>

</html>