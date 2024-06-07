<?php
$title = "404 - Error";
include 'includes/header.php';
include 'includes/sidebar.php'
?>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Error page start -->
        <section class="error__page">
          <div class="container line">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="error__content">
                  <img src="assets/imgs/thumb/404.png" alt="Page not found">
                  <h2>Sorry! page did not found</h2>
                  <p>The page you are looking for doesn't exist or has been moved</p>
                  <div class="btn_wrapper">
                    <a href="index.php" class="wc-btn-primary btn-hover btn-item"><span></span> Back to <br>Homepage <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php include 'includes/footer.php'; ?>