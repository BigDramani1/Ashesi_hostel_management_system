<?php
session_start();
require('controllers/product_controller.php');
$customer_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : "";
// this is for cart counting
$cart_count = cart_count_controller($customer_id);

if (empty($_SESSION['user_id'])) {
    header('Location: login.php');
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
    <title>My Paid Rooms</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/dashbord-mobile-menu.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <div id="header">
                    <div class="container-fluid">
                        <div class="left-side">
                            <div id="logo">
                                <a href="index.php"><img src="images/rest.png" data-sticky-logo="images/rest.png" alt=""></a>
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
                            <nav id="navigation" class="style-1">
                                <ul id="responsive">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="my_rooms.php">My Paid Rooms</a></li>
                                    <li><a href="faq.php">FAQ</a></li>
                                    <li><a href="contact_us.php">Contact</a></li>

                                </ul>
                            </nav>
                            <div class="clearfix"></div>
                        </div>
                        <div class="header-user-menu user-menu">
                            <a href="cart.php"><i class='fa fa-shopping-cart fa-2x' style='color:#232936;padding-left:25px;'></i>
                                <span class='badge badge-warning' id='lblCartCount'> <?php if (empty($cart_count['counting'])) {
                                                                                            echo '';
                                                                                        } else {
                                                                                            echo $cart_count['counting'];
                                                                                        } ?> </span></a>
                            <div class="header-user-name">
                                <span><img src="images/icons/user.png" alt=""></span>Hi, <?php echo $_SESSION["username"]; ?>!
                            </div>
                            <ul>
                                <li><a href="user_profile.php"> Edit profile</a></li>
                                <li><a href="log_out.php">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="sidebar-header"><img src="images/haven.svg" data-sticky-logo="images/rest.png"> </div>
                            <div class="header clearfix">
                                <img src="images/icons/icons.png" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2><?php echo $_SESSION["full_name"]; ?></h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a href="dashboard.php">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user_profile.php">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="my_rooms.php">
                                            <i class="fas fa-credit-card" aria-hidden="true"></i>Paid Rooms
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.php">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="log_out.php">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                        <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a href="dashboard.php">
                                                <i class="fa fa-map-marker"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user_profile.php">
                                                <i class="fa fa-user"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="my_rooms.php">
                                                <i class="fas fa-credit-card" aria-hidden="true"></i>Paid Rooms
                                            </a>
                                        </li>
                                        <li>
                                            <a href="change-password.php">
                                                <i class="fa fa-lock"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="log_out.php">
                                                <i class="fas fa-sign-out-alt"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="my-properties">
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <th class="pl-2">My Properties</th>
                                        <th class="p-0"></th>
                                        <th>Date Paid</th>
                                        <th>Type of room</th>
                                        <th>Quantity</th>
                                        <th>Invoice id</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $products = select_all_receipt_for_user_controller($customer_id);
                                    foreach ($products as $hostel) { ?>
                                        <tr>
                                            <td class="image myelist">
                                                <a href="hostel_details.php?id=<?php echo $hostel['hostel_id'] ?>"><img alt="my-properties-3" src="images/feature-properties/fp-1.jpg" class="img-fluid"></a>
                                            </td>
                                            <td>
                                                <div class="inner">
                                                    <a href="hostel_details.php?id=<?php echo $hostel['hostel_id'] ?>">
                                                        <h2><?php echo $hostel['hostel_name'] ?></h2>
                                                    </a>
                                                    <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                </div>
                                            </td>
                                            <td><?php echo $hostel['order_date'] ?></td>
                                            <td><?php echo $hostel['room_num'] ?></td>
                                            <td><?php echo $hostel['qty'] ?></td>
                                            <td><?php echo $hostel['invoice_num'] ?></td>
                                            <form id="remove-<?php echo $hostel['receipt_id'] ?>">
                                                <input type='hidden' name='receipt_id' value=<?php echo $hostel['receipt_id'] ?>>
                                                <input type='hidden' name='user_id' value=<?php echo $_SESSION['user_id'] ?>>
                                                <td><button type='submit' name='delete' style='border:none; background:none'><i class='fa fa-trash fa-lg' style='color:red'></i></button></td>
                                            </form>
                                        </tr>
                                    <?php }
                                    if (empty($products)) {
                                        echo "<h2>You have not purchased anything!</h2>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- START FOOTER -->
                        <footer class="first-footer">
                            <div class="second-footer">
                                <div class="container">
                                    <p>2022 © Copyright - All Rights Reserved.</p>
                                    <p>Made By <a href="mailto:alhassan.dramani@ashesi.edu.gh">Dramani Alhassan </a></p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </section>

        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                $('form[id^="remove-"]').submit(function(event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'action/delete_receipt.php',
                        dataType: 'json',
                        data: $(this).serialize(),
                        success: function(response) {
                            if (response.success) {
                                // Show success sweet alert
                                Swal.fire('Success!', response.message, 'success').then((result) => {
                                    // Reload the Page
                                    location.reload();
                                });
                            }
                        },
                        error: function() {
                            // Show error sweet alert
                            Swal.fire({
                                title: 'Oops!',
                                text: 'Something went wrong, please try again later',
                                icon: 'error',
                            });
                        }
                    });
                });
            });
        </script>
        <!-- END SECTION USER PROFILE -->
        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick2.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
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
        <script src="js/dashbord-mobile-menu.js"></script>
        <script src="js/forms-2.js"></script>
        <script src="js/color-switcher.js"></script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>

        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });
        </script>

    </div>
</body>

</html>