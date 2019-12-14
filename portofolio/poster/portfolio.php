<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Snow | Portfolio</title>

    <meta name="description" content="Snow - Clean & Minimal Portfolio HTML template.">
    <meta name="keywords" content="portfolio, clean, minimal, blog, template, portfolio website">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="assets/css/combined.css">

    <!-- END: Styles -->



</head>


<body>




    <header class="nk-header nk-header-opaque">
        <!--
        START: Navbar
    -->
    <nav class="nk-navbar nk-navbar-top">
        <div class="container">
            <div class="nk-nav-table">
                <a href="index.php" class="nk-nav-logo">
                    <img src="assets/images/logo-light.svg" alt="" width="85" class="nk-nav-logo-onscroll">
                    <img src="assets/images/logo.svg" alt="" width="85">
                </a>

                <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                    <li>
                        <a href="index.php#about">About</a>
                    </li>
<!--                         <li>
                            <a href="index.html#contact">Contact</a>
                        </li> -->
                        <li>
                            <a href="portfolio.php">Gallery</a>
                        </li>
                        <?php 
                        if(empty($_SESSION['email'])) {
                            ?>
                            <li>
                                <a href="login/index.php">Sign In</a>
                            </li>
                            <li>
                                <a href="signup/index.php">Sign Up</a>
                            </li>


                            <?php }else{ ?>
                            <li>
                                <a href="user/media.php?page=dashboard">Upload Poster</a>
                            </li>
                            <li>
                                <a href="sign_out.php">Sign Out</a>
                            </li>
                            <?php } ?>                        

                        </ul>

                        <ul class="nk-nav nk-nav-right nk-nav-icons">
                            <li class="single-icon hidden-lg-up">
                                <a href="#" class="nk-navbar-full-toggle">
                                    <span class="nk-icon-burger">
                                        <span class="nk-t-1"></span>
                                        <span class="nk-t-2"></span>
                                        <span class="nk-t-3"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END: Navbar -->

        </header>




    <!--
    START: Navbar Mobile
-->
<nav class="nk-navbar nk-navbar-full nk-navbar-align-center" id="nk-nav-mobile">
    <div class="nk-navbar-bg">
        <div class="bg-image" style="background-image: url('assets/images/bg-menu.jpg');"></div>
    </div>
    <div class="nk-nav-table">
        <div class="nk-nav-row">
            <div class="container">
                <div class="nk-nav-header">

                    <div class="nk-nav-logo">
                        <a href="index.html" class="nk-nav-logo">
                            <img src="assets/images/logo-light.svg" alt="" width="85">
                        </a>
                    </div>

                    <div class="nk-nav-close nk-navbar-full-toggle">
                        <span class="nk-icon-close"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-nav-row-full nk-nav-row">
            <div class="nano">
                <div class="nano-content">
                    <div class="nk-nav-table">
                        <div class="nk-nav-row nk-nav-row-full nk-nav-row-center nk-navbar-mobile-content">
                            <ul class="nk-nav">
                                <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-nav-row">
            <div class="container">
                <div class="nk-nav-social">
                    <ul>
                        <li><a href="https://twitter.com/nkdevv"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/unvabdesign/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://dribbble.com/_nK"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="https://www.instagram.com/unvab/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END: Navbar Mobile -->


<div class="nk-main">

    <div class="container">
        <!-- START: Filter -->
        <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
            <a href="#nk-toggle-filter">
                <span class="nk-icon-squares"></span>
            </a>
        </div>
        <ul class="nk-isotope-filter">
            <li class="active" data-filter="*">All</li>
            <li data-filter="Pendidikan">Pendidikan</li>
            <li data-filter="Lalu-Lintas">Lalu Lintas</li>
            <li data-filter="Kesehatan">Kesehatan</li>
            <li data-filter="Lingkungan">Lingkungan</li>
        </ul>
        <!-- END: Filter -->

        <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">
            <!-- narik data dari database -->
            <?php 
            include "conf/koneksi.php";                  
            $vw = mysqli_query($connect, "SELECT * FROM poster ORDER BY id_poster ASC");
            while ($r = mysqli_fetch_array($vw)){
                ?>
                <div class="nk-isotope-item" data-filter="<?php echo $r['kategori']; ?>">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="portfolio-single.php?id=<?php echo $r['id_poster']; ?>&user=<?php echo $r['id_user']; ?>" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('user/img_user/<?php echo $r['foto']; ?>'); background-size: 100% 100%;"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3"><?php echo $r['judul']; ?></h2>
                                <div class="portfolio-item-category"><?php echo $r['kategori']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="nk-gap-4"></div>
        </div>

       <!--
    START: Footer
-->
<footer class="nk-footer">


    <div class="nk-footer-cont">
        <div class="container text-xs-center">
            <div class="nk-footer-social">
                <ul>
                    <li><a href="https://twitter.com/nkdevv"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/unvabdesign/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://dribbble.com/_nK"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="https://www.instagram.com/unvab/"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="nk-footer-text">
                <p>2016 &copy; Design by Unvab. Code by nK</p>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->


</div>




<!-- START: Scripts -->

<script src="assets/js/combined.js"></script>

<!-- END: Scripts -->


</body>

</html>