<?php
session_start();
/** 資料庫連線 */
$link = mysqli_connect("127.0.0.1", "HCHJ", "xx435kKHq", "HCHJ");
if ($link) {
  mysqli_query($link, 'SET NAMES UTF8');

} else {
  echo "資料庫連接失敗: " . mysqli_connect_error();
}
$userData = $_SESSION['user'];
// 確保你在 SESSION 中儲存了唯一識別符（例如 user_id 或 username）
$username= $userData['name']; // 例如從 SESSION 中獲取 user_id
$userId= $userData['user'];
$query1 = sprintf("SELECT user FROM `user` WHERE user = '%d'", mysqli_real_escape_string($link, $userId));
$query2 = sprintf("SELECT name FROM `user` WHERE name = '%s'", mysqli_real_escape_string($link, $username));
$result = mysqli_query($link, $query1);
$result = mysqli_query($link, $query2);
//if (mysqli_num_rows($result) > 0) {
   // $userDetails = mysqli_fetch_assoc($result);  
//} else {
   // echo "找不到使用者的詳細資料";
//}

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Alerts | Space</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha.min.css">
        <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">
		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/tiny-slider.css">
		<link rel="stylesheet" href="assets/css/glightbox.min.css">
		<link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- ========================= preloader start ========================= -->
            <div class="preloader">
                <div class="loader">
                    <div class="ytp-spinner">
                        <div class="ytp-spinner-container">
                            <div class="ytp-spinner-rotator">
                                <div class="ytp-spinner-left">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                                <div class="ytp-spinner-right">
                                    <div class="ytp-spinner-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- preloader end -->

        <!-- ========================= header start ========================= -->
        <header class="header navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll dd-menu" href="javascript:void(0)">Home</a>
                                        <ul class="sub-menu">
                                            <li class="nav-item"><a href="index.html">Home Style 1</a></li>
                                            <li class="nav-item"><a href="index-2.html">Home Style 2</a></li>
                                            <li class="nav-item"><a href="index-3.html">Home Style 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll dd-menu" href="javascript:void(0)">Service</a>

                                        <ul class="sub-menu">
                                            <li class="nav-item"><a href="service-1.html">Service Style 1</a></li>
                                            <li class="nav-item"><a href="service-2.html">Service Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll active dd-menu" href="javascript:void(0)">Pages</a>

                                        <ul class="sub-menu">
                                            <li class="nav-item"><a href="about.html">About Us</a></li>
                                            <li class="nav-item"><a href="team.html">Team Members</a></li>
                                            <li class="nav-item"><a href="portfolio.html">Portfolio</a></li>
                                            <li class="nav-item"><a href="portfolio-single.html">Portfolio Single</a></li>
                                            <li class="nav-item"><a href="counter.html">Counter</a></li>
                                            <li class="nav-item"><a href="accordion.html">Accordion</a></li>
                                            <li class="nav-item active"><a href="alerts.html">Alerts</a></li>
                                            <li class="nav-item"><a href="map.html">Map</a></li>
                                            <li class="nav-item"><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll dd-menu" href="javascript:void(0)">Blog</a>

                                        <ul class="sub-menu">
                                            <li class="nav-item"><a href="blog-1.html">Blog Style 1</a></li>
                                            <li class="nav-item"><a href="blog-2.html">Blog Style 2</a></li>
                                            <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                                <form action="#" class="search-form">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="lni lni-search-alt"></i></button>
                                </form>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        
        </header>
        <!-- ========================= header end ========================= -->

        <!-- ========================= page-banner-section start ========================= -->
        <section class="page-banner-section pt-75 pb-75 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="banner-content">
                            <h2 class="text-white">Alerts</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Alerts</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= page-banner-section end ========================= -->

        <!-- ========================= alerts-section start ========================= -->
        <section class="alerts-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow animated fadeInUp" data-wow-delay=".2s">
                        <div class="alert alert-success" role="alert">
                            <a href="javascript:void(0)" class="alert-link">Well done! You successfully read this important alert
                                message.</a>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <a href="javascript:void(0)" class="alert-link">Heads up! This alert needs your attention, but it's not super
                                important.</a>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <a href="javascript:void(0)" class="alert-link">Warning! Better check yourself, you're not looking too
                                good.</a>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <a href="javascript:void(0)" class="alert-link">Oh snap! Change a few things up and try submitting again.</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 wow animated fadeInUp" data-wow-delay=".4s">
                        <div class="alert alert-dismissible alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Success!</h4>

                            <p>Well done! You successfully read this important alert message.
                                <a href="javascript:void(0)" class="alert-link">vel scelerisque nisl consectetur et</a>.
                            </p>
                        </div>
                        <div class="alert alert-dismissible alert-warning">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Warning!</h4>

                            <p>Well done! You successfully read this important alert message.
                                <a href="javascript:void(0)" class="alert-link">vel scelerisque nisl consectetur et</a>.
                            </p>
                        </div>
                        <div class="alert alert-dismissible alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Danger!</h4>

                            <p>Well done! You successfully read this important alert message.
                                <a href="javascript:void(0)" class="alert-link">vel scelerisque nisl consectetur et</a>.
                            </p>
                        </div>
                        <div class="alert alert-dismissible alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Info!</h4>

                            <p>Well done! You successfully read this important alert message.
                                <a href="javascript:void(0)" class="alert-link">vel scelerisque nisl consectetur et</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= alerts-section end ========================= -->

        <!-- ========================= client-logo-section start ========================= -->
        <section class="client-logo-section pt-100 pb-130">
            <div class="container">
                <div class="client-logo-wrapper">
                    <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                        <div class="client-logo">
                            <img src="assets/img/client-logo/uideck-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/pagebulb-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/lineicons-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/graygrids-logo.svg" alt="">
                        </div>
                        <div class="client-logo">
                            <img src="assets/img/client-logo/lineicons-logo.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= client-logo-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->
        <section class="subscribe-section pt-70 pb-70 img-bg" style="background-image: url('assets/img/bg/common-bg.svg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title mb-30">
                            <span class="text-white wow fadeInDown" data-wow-delay=".2s">Subscribe</span>
                            <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s">Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <form action="#" class="subscribe-form wow fadeInRight" data-wow-delay=".4s">
                            <input type="text" name="subs-email" id="subs-email" placeholder="Your Email">
                            <button type="submit"><i class="lni lni-telegram-original"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= subscribe-section end ========================= -->

        <!-- ========================= footer start ========================= -->
        <footer class="footer pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                            <a href="index.html" class="logo mb-30"><img src="assets/img/logo/logo.svg" alt="logo"></a>
                            <p class="mb-30 footer-desc">We Crafted an awesome desig library that is robust and intuitive to use. No matter you're building a business presentation websit.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                            <h4>Quick Link</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">About Us</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Service</a>
                                </li> 
                                <li>
                                    <a href="javascript:void(0)">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                            <h4>Service</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="javascript:void(0)">Marketing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Branding</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Web Design</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Graphics Design</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                            <h4>Contact</h4>
                            <ul class="footer-contact">
                                <li>
                                    <p>+00983467367234</p>
                                </li>
                                <li>
                                    <p>yourmail@gmail.com</p>
                                </li>
                                <li>
                                    <p>United State Of America
                                    *12 Street House</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="copyright-area">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                             <div class="footer-social-links">
                                <ul class="d-flex">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="wow fadeInUp" data-wow-delay=".3s"><a target="_blank" href="http://www.mobanwang.com/" title="网页模板">网页模板</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========================= footer end ========================= -->


        <!-- ========================= scroll-top ========================= -->
        <a href="#" class="scroll-top">
            <i class="lni lni-arrow-up"></i>
        </a>
        
		<!-- ========================= JS here ========================= -->
		<script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
		<script src="assets/js/contact-form.js"></script>
        <script src="assets/js/count-up.min.js"></script>
        <script src="assets/js/tiny-slider.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/glightbox.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
		<script src="assets/js/imagesloaded.min.js"></script>
		<script src="assets/js/main.js"></script>
    </body>
</html>
