<?php
session_start();
// This prevents them from going to a page without logging in
if(!isset($_SESSION['loggedin'])){ //if login in session is not set
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Haven Empire</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/aos2.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/maps.css">
    <link rel="stylesheet" id="color" href="css/colors/pink.css">
</head>

<body class="homepage-9 hp-6 homepage-1 mh">
    <div id="wrapper">
        <header id="header-container" class="header head-tr">
            <div id="header" class="head-tr bottom">
                <div class="container container-header">
                    <div class="left-side">
                        <div id="logo">
                            <a href="home.php"><img src="images/Home.png" data-sticky-logo="images/rest.png" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">
                                <li><a href="home.php">Home</a></li>
                                <li><a href="my_rooms.php">My Paid Rooms</a></li>
                                    <li><a href="user_faq.php">FAQ</a></li> 
                                    <li><a href="user_contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-user-menu user-menu add">
                    <a href="making_payment.php"><i class='fa fa-shopping-cart fa-2x' style='color:#232936;padding-left:25px;'></i>
                    <span class='badge badge-warning' id='lblCartCount'> 1 </span></a>
                        <div class="header-user-name">
                            <span><img src="images/icons/user.png" alt=""></span>Hi, <?php echo $_SESSION["username"];?>!
                        </div>
                        <ul>
                            <li><a href="user_profile.php"> Edit profile</a></li>
                            <li><a href="log_out.php">Log Out</a></li>
                        </ul>
                    </div>
            </div>
        </header>
        <div class="clearfix"></div>
           <!-- STAR HEADER SEARCH -->
           <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
            <div class="hero-main">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-inner">
                                <div class="welcome-text">
                                    <h1 class="h1">More than a
                                    <br class="d-md-none">
                                    <span class="typed border-bottom"></span>
                                </h1>
                                    <p class="mt-4">We Have Outstanding & Appealing Hostels For You.</p>
                                </div>
                                <div class="col-12">
                                <form action="search_home.php" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" style="border-radius:10px; height:auto;"class="form-control" placeholder="Search data">&nbsp;
                                <button type="submit" class="searching">Search</button>
                            </div>
                        </form>
                                    </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section>
        <!-- START SECTION POPULAR PLACES -->
        <section class="feature-categories bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Welcome To </span>Ashesi Off-Campus Hostels</h2>
                </div>
            </div>
        </section>
        <!-- START SECTION FEATURED PROPERTIES -->
        <section class="featured portfolio bg-white-2 rec-pro full-l">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>All </span>Hostels</h2>
                    <p>These are all the hostels around the school</p>
                </div>
                <div class="row portfolio-items">
                <?php require_once ("components/user_components.php");?>
                        <?php
                         require_once('settings/const.php');
                         $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
                         $sql = "SELECT * FROM hostels limit 6";
                         $result = mysqli_query($mysqli, $sql);
                        // Associative while loop array
                        while ($row = mysqli_fetch_assoc($result)){
                            home($row['hostel_id'], $row['hostel_name'], $row['price_range'],$row['image']);
                        }  
                        ?>  
                </div>
                <div class="bg-all">
                    <a href="all_hostels.php" class="btn btn-outline-light">View More</a>
                </div>
            </div>
        </section>
        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white rec-pro">
            <div class="container-fluid">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us?</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="images/icons/icon-4.svg" alt="">
                                <h3>Wide Range of hostels</h3>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="images/icons/icon-5.svg" alt="">
                                <h3>Trusted by thousands</h3>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="images/icons/icon-6.svg" alt="">
                                <h3>Simple transactions</h3>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="images/icons/icon-15.svg" alt="">
                                <h3>We are here near you</h3>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>   
        <footer class="first-footer">
            <div class="second-footer">
                <div class="container">
                    <p>2022 © Copyright - All Rights Reserved.</p>
                    <p>Made By <a href="mailto:alhassan.dramani@ashesi.edu.gh">Dramani Alhassan </a></p>
                </div>
            </div>
        </footer>
        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- ARCHIVES JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/rangeSlider.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/aos2.js"></script>
        <script src="js/animate.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/search.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/searched.js"></script>
        <script src="js/forms-2.js"></script>
        <script src="js/map-style2.js"></script>
        <script src="js/range.js"></script>
        <script src="js/color-switcher.js"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>

        <!-- Slider Revolution scripts -->
        <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

        <script>
            var typed = new Typed('.typed', {
                strings: ["Hostel ^2000", "Home ^4000"],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>
        <!-- MAIN JS -->
        <script src="js/script.js"></script>
    </div>
</body>
</html>