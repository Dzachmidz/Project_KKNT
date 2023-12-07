<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo media_url() ?>/css/favicon.ico">

    <link rel="stylesheet" href="<?php echo media_url() ?>/css/core/libs.min.css">

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/hope-ui.min.css?v=2.0.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/custom.min.css?v=2.0.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/rtl.min.css" />
    <link rel="stylesheet" href="<?php echo media_url() ?>/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <!-- Logo and Title start -->
            <div class="logo-container position-absolute top-0 start-0 d-flex align-items-center p-3">
                <div class="logo-main">
                    <div class="logo-normal">
                        <?php if (isset($setting_logo) && $setting_logo['setting_value'] == NULL) { ?>
                        <img src="<?php echo media_url('img/logo.png') ?>" height="100">
                        <?php } else { ?>
                        <img src="<?php echo upload_url('school/' . $setting_logo['setting_value']) ?>" height="50">
                        <?php } ?>
                    </div>
                    <div class="logo-mini">
                        <?php if (isset($setting_logo) && $setting_logo['setting_value'] == NULL) { ?>
                        <img src="<?php echo media_url('img/logo.png') ?>" height="100">
                        <?php } else { ?>
                        <img src="<?php echo upload_url('school/' . $setting_logo['setting_value']) ?>" height="50">
                        <?php } ?>
                    </div>
                </div>
                <h4 class="logo-title ms-3">HWSPP</h4>
            </div>
            <!-- Logo and Title End -->


            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                                <div class="card-body">
                                    <a href="../../dashboard/index.html"
                                        class="navbar-brand d-flex align-items-center mb-3">
                                        <!--Logo start-->
                                        <!--logo End-->



                                    </a>
                                    <h2 class="mb-2 text-center">Sign In</h2>
                                    <p class="text-center">Login to stay connected.</p>
                                    <?php echo form_open('manage/auth/login', array('class' => 'login100-form validate-form')); ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" required="" autofocus=""
                                                    name="email" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" required="" name="password"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-between">
                                            <div class="form-check mb-3">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary"><span></span>&nbsp;<b>Sign In</b></button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                /* Add custom styles here */
                body {
                    overflow: hidden;
                    padding-top: 15px;
                    padding-right: 15px;
                }

                .rounded-container {
                    padding-top: 10px;
                    overflow: hidden;
                    border-radius: 20px;
                }

                .rounded-image {
                    border-radius: 20px;
                }
                </style>
                <div class="col-md-6 d-md-block d-none p-0 mt-n1 vh-100 overflow-hidden">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image-container rounded-container">
                                    <img src="<?php echo media_url('images/auth/gradient1.png') ?>" alt="Slide 1"
                                        class="img-fluid gradient-main animated-scale rounded-image" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container rounded-container">
                                    <img src="<?php echo media_url('images/auth/gradient2.png') ?>" alt="Slide 2"
                                        class="img-fluid gradient-main animated-scale rounded-image" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-container rounded-container">
                                    <img src="<?php echo media_url('images/auth/gradient3.png') ?>" alt="Slide 3"
                                        class="img-fluid gradient-main animated-scale rounded-image" />
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                    </div>
                </div>



                <!-- Swiper JS -->
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                <!-- Initialize Swiper with Autoplay -->
                <script>
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay: {
                        delay: 5000, // 5 seconds delay between slides
                        disableOnInteraction: false, // Enable navigation buttons during autoplay
                    },
                });

                // Force update pagination when slides change
                swiper.on('slideChange', function() {
                    swiper.update();
                });
                </script>



            </div>
        </section>
    </div>

    <script src="<?php echo media_url() ?>/js/jquery.min.js"></script>
    <!-- Library Bundle Script -->
    <script src="<?php echo media_url() ?>/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="<?php echo media_url() ?>/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="<?php echo media_url() ?>/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="<?php echo media_url() ?>/js/charts/vectore-chart.js"></script>
    <script src="<?php echo media_url() ?>/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="<?php echo media_url() ?>/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="<?php echo media_url() ?>/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="<?php echo media_url() ?>/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="<?php echo media_url() ?>/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="<?php echo media_url() ?>/js/hope-ui.js" defer></script>

</body>

</html>