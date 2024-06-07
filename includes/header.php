<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Axtra HTML5 Template">
  <title><?php echo $title; ?></title>
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
  <div class="cursor" id="portf_cursor_6">View <br>Project</div>
  <!-- Header area start -->
  <header class="header__area">
    <div class="header__inner">
      <div class="header__logo">
        <a href="index.html">
          <img class="logo-primary" src="assets/imgs/logo/site-logo-white.png" alt="Site Logo">
          <img class="logo-secondary" src="assets/imgs/logo/site-logo-white-2.png" alt="Moibile Logo">
        </a>
      </div>
      <div class="header__nav-icon">
        <button id="open_offcanvas"><img src="assets/imgs/icon/menu-white.png" alt="Menubar Icon"></button>
      </div>
      <div class="header__support">
        <p>Support center <a href="tel:+9587325902">+9 587 325 902</a></p>
      </div>
    </div>
  </header>
  <!-- Header area end -->