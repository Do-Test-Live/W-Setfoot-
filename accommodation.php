<?php
include ("config/dbconfig.php");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Setfoot - Accommodation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="assets/images/favicon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- CSS FILES HERE -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/vendors/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
</head>

<body>

<!-- Preloader -->
<div class="tm-preloader">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="tm-preloader-logo">
                    <img src="assets/images/flogo.png" alt="logo">
                </div>
                <span class="tm-preloader-progress"></span>
            </div>
        </div>
    </div>
    <button class="tm-button tm-button-small">Cancel Preloader</button>
</div>
<!--// Preloader -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <div class="tm-header tm-header-sticky">

            <div class="tm-header-bottomarea">
                <div class="container">
                    <div class="tm-header-inner">
                        <a href="index.php" class="tm-header-logo">
                            <img src="assets/images/logo.png" alt="malic" style="height: 80px;">
                        </a>
                        <nav class="tm-header-nav">
                            <ul>
                                <li><a href="accommodation.php">Accommodation</a></li>
                                <li><a href="index.php#question">Learn More</a></li>
                                <li><a href="aboutus.php">About Us</a></li>
                            </ul>
                        </nav>
                        <div class="tm-mobilenav"></div>
                    </div>
                </div>
            </div>

        </div>
        <!--// Header -->

        <!-- Breadcrumb Area -->
        <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg"
            data-white-overlay="2">
            <div class="container">
                <div class="tm-breadcrumb">
                    <h2>Accommodations for you
                    </h2>
                    <ul>
                        <li><a href="#">Best sustainable accommodation options guaranteed</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->


        <!-- Page Content -->
        <main class="page-content">

            <!-- Products Area -->
            <div class="tm-products-area tm-section tm-padding-section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-12 order-1 order-lg-2">
                            <div class="row justify-content-end mt-30-reverse mb-3">

                                <?php
                                $hotel_data = $con->query("SELECT * FROM `hotel`");
                                if ($hotel_data){
                                    while ($row = mysqli_fetch_assoc($hotel_data)){
                                        ?>
                                        <!-- Single Feature -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-30 text-center">
                                            <div class="tm-feature text-center tm-scrollanim">
                                                <div class="tm-feature-content">
                                                    <h6><?php echo $row['name'];?></h6>
                                                    <ul class="stylish-list-color">
                                                        <li><i class="ion-android-checkmark-circle"></i>
                                                            Starting Price: <?php echo $row['startingprice'];?>
                                                        </li>
                                                        <li><i class="ion-android-checkmark-circle"></i>
                                                            Certification:
                                                        </li>
                                                        <li><i class="ion-android-checkmark-circle"></i>
                                                            Address: <a href="<?php echo $row['addresslink'];?>" target="_blank"
                                                                        style="color: #777;"><?php echo $row['address'];?></a>
                                                        </li>
                                                        <li><i class="ion-android-checkmark-circle"></i>
                                                            Rating: <?php echo $row['rating'];?>
                                                        </li>
                                                        <li><i class="ion-android-checkmark-circle"></i>
                                                            Excellent
                                                        </li>
                                                        <li><i class="ion-android-checkmark-circle"></i>
                                                            Numbers of reviews: <?php echo $row['numberofreviews'];?>
                                                        </li>
                                                        <li><i class="ion-android-checkmark-circle"></i>
                                                            Star rating: <?php echo $row['numberofreviews'];?>
                                                        </li>
                                                        <li><i class="ion-android-checkmark-circle"></i>
                                                            <?php echo $row['description'];?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="<?php echo $row['agencywebsite'];?>"
                                               target="_blank" class="tm-button">Explore more</a>
                                        </div>
                                        <!--// Single Feature -->
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                        <div class="col-lg-3 col-12 order-2 order-lg-1">
                            <div class="widgets widgets-shop">

                                <form action="#" class="tm-shop-header">
                                    <p class="tm-shop-countview"> </p>
                                    <select>
                                        <option value="value">Sort by Price</option>
                                        <option value="value">Highest Price</option>
                                        <option value="value">Lowest Price</option>
                                    </select>
                                </form>
                                <form action="#" class="tm-shop-header">
                                    <p class="tm-shop-countview"> </p>
                                    <select>
                                        <option value="value">Filter by:
                                            Certifications
                                        </option>
                                        <option value="value">Green Globe</option>
                                        <option value="value">Earth Check</option>
                                        <option value="value">Preferred by Nature</option>
                                    </select>
                                </form>
                                <form action="#" class="tm-shop-header">
                                    <p class="tm-shop-countview"> </p>
                                    <select>
                                        <option value="value">Filter by: Destination</option>
                                        <option value="value">Riviera Maya & Cancun</option>
                                        <option value="value">Oaxaca</option>
                                        <option value="value">Pacific Coast</option>
                                        <option value="value">Puerto Vallarta & Punta Mita</option>
                                    </select>
                                </form>


                                <!--// Single Widget -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Products Area -->

            <!-- Newsletter Area -->
            <div class="tm-newsletter-area tm-section tm-padding-section bg-pattern mt-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-12">
                            <h4 class="tm-newsletter-title">Subscribe Newsletter</h4>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-12">
                            <form id="tm-mailchimp-form" class="tm-newsletter-form">
                                <input id="mc-email" type="email" placeholder="Email address...">
                                <button id="mc-submit" type="submit" class="tm-button">Sign Up</button>
                            </form>
                            <!-- Mailchimp Alerts -->
                            <div class="tm-mailchimp-alerts">
                                <div class="tm-mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="tm-mailchimp-error"></div>
                            </div>
                            <!--// Mailchimp Alerts -->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                            <div class="tm-newsletter-call">
                                <p>Call Any Question?</p>
                                <h3><a href="mailto:info@setfoot.io">info@setfoot.io</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Newsletter Area -->

        </main>
        <!--// Page Content -->

        <!-- Footer -->
        <div class="tm-footer">
            <div class="tm-footer-toparea tm-padding-section" data-bgimage="assets/images/footer-area-bg.jpg"
                 data-black-overlay="9">
                <div class="container">
                    <div class="widgets widgets-footer row">

                        <!-- Single Widget -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-widget widget-info">
                                <a class="widget-info-logo" href="index.php"><img src="assets/images/flogo.png"
                                                                                  alt="white logo" style="height: 100px;"></a>
                                <p>Setfoot mobilises collective climate action to revolutionaries travel innovation</p>
                                <!--<ul>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-skype-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                                </ul>-->
                            </div>
                        </div>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-widget widget-contact">
                                <h6 class="widget-title">Contact Us</h6>
                                <ul>
                                    <li>
                                        <i class="ion-ios-email-outline"></i>
                                        <p><a href="mailto:info@setfoot.io">info@setfoot.io</a></p>
                                    </li>
                                    <li>
                                        <i class="ion-ios-location-outline"></i>
                                        <p>8/F, Building 19w, 19 Science Park West Avenue, Hong Kong Science Park, Shatin, New Territories, Hong Kong</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--// Single Widget -->

                        <!-- Single Widget -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-widget widget-twitterfeed">
                                <h6 class="widget-title">Supported By</h6>
                                <a class="widget-info-logo" href="index.php"><img src="assets/images/HKSTP-logo.png"
                                                                                  alt="white logo" style="height: 80px;"></a>
                            </div>
                        </div>
                        <!--// Single Widget -->

                    </div>
                </div>
            </div>

            <div class="tm-footer-bottomarea bg-dark">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <p class="tm-footer-copyright">Powered By <a href="#">SETFOOT</a> ©
                                2023</p>
                        </div>
                        <div class="col-md-5">
                            <div class="tm-footer-payment">
                                <img src="assets/images/payment-methods.png" alt="payment methods">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer -->


        <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

    </div>
    <!--// Wrapper -->

    <!-- JS FILES HERE -->
    <!-- inject:js -->
    <script src="assets/js/vendors/plugins.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- endinject -->
</body>

</html>