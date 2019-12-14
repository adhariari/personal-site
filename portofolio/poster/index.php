<?php
session_start();
include "conf/koneksi.php";

/*-------- menghitung total jumlah poster pendidikan -----------*/
$sql1 = mysqli_query($connect, "select *, count(poster.kategori) as jml_pendidikan from poster where kategori = 'Pendidikan' and status = 'Approved'");
$r = mysqli_fetch_array($sql1);
$jml = $r['jml_pendidikan'];

/*-------- menghitung total jumlah poster lalu lintas -----------*/
$sql2 = mysqli_query($connect, "select *, count(poster.kategori) as jml_lintas from poster where  kategori = 'Lalu-Lintas' and status = 'Approved'");
$s = mysqli_fetch_array($sql2);
$jml_lintas = $s['jml_lintas'];

/*-------- menghitung total jumlah poster kesehatan -----------*/
$sql3 = mysqli_query($connect, "select *, count(poster.kategori) as jml_kesehatan from poster where  kategori = 'Kesehatan' and status = 'Approved'");
$t = mysqli_fetch_array($sql3);
$jml_kesehatan = $t['jml_kesehatan'];

/*-------- menghitung total jumlah poster lingkungan -----------*/
$sql4 = mysqli_query($connect, "select *, count(poster.kategori) as jml_lingkungan from poster where kategori = 'Lingkungan' and status = 'Approved'");
$u = mysqli_fetch_array($sql4);
$jml_lingkungan = $u['jml_lingkungan'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Negeri Poster</title>
    <meta name="description" content="Negeri Poster">
    <meta name="keywords" content="pendidikan, poster, lalu lintas, kesehatan, lingkungan, agama">
    <meta name="author" content="ari">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair Display:400,400i,700,700i%7cWork Sans:400,500,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/combined.css">

    <!-- END: Styles -->
</head>

<body>

    <header class="nk-header">
        <!--
        START: Navbar
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-white-text-on-top">
        <div class="container">
            <div class="nk-nav-table">
                <a href="index.php" class="nk-nav-logo">
                    <img src="assets/images/logo-light.png" alt="" width="85" class="nk-nav-logo-onscroll">
                    <img src="assets/images/logo.png" alt="" width="85">
                </a>

                <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                    <li>
                        <a href="#about">About</a>
                    </li>
<!--                         <li>
                            <a href="index.html#contact">Contact</a>
                        </li> -->
                        <li>
                            <a href="portfolio.php">Gallery</a>
                        </li>
                        <!-- cek session -->
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
        <div class="bg-image" style="background-image: url('assets/images/bg-menu.jpg')"></div>
    </div>
    <div class="nk-nav-table">
        <div class="nk-nav-row">
            <div class="container">
                <div class="nk-nav-header">

                    <div class="nk-nav-logo">
                        <a href="index.html" class="nk-nav-logo">
                            <img src="assets/images/logo-light.png" alt="" width="85">
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

    <!-- START: Header Title -->
    <div class="nk-header-title nk-header-title-full">
        <div class="bg-image">
            <div style="background-image: url('assets/images/home-7.jpg');"></div>
            <div class="bg-image-overlay" style="background-color: rgba(12, 12, 12, 0.6);"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">

                    <h1 class="animated fadeInUp nk-title display-3 text-white">Negeri Poster
                        <br>
                        <em class="fw-400">Karya Anak Bangsa</em>
                    </h1>
                    <div class="nk-gap"></div>
                    <div class="nk-header-text text-white">
                        <div class="nk-gap-4"></div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <a class="nk-header-title-scroll-down text-white" href="#nk-header-title-scroll-down">
                <span class="pe-7s-angle-down"></span>
            </a>
        </div>

    </div>

    <div id="nk-header-title-scroll-down"></div>

    <!-- END: Header Title -->

    <!-- START: About Negeri Poster -->
    <div class="bg-white" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-xs-center">
                    <div class="nk-gap-4 mt-9"></div>

                    <h2 class="display-4">About Negeri Poster</h2>
                    <div class="nk-gap mnt-5"></div>
                    <p>Negeri Poster adalah sebuah situs komunitas untuk menampilkan hasil karya seseorang dalam bentuk poster. Negeri Poster memiliki 4 kategori poster yaitu: Pendidikan, Lalu Lintas, Kesehatan dan Lingkungan.
                    </p>

                    <div class="nk-gap-4 mt-25"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: About Negeri Poster -->

    <!-- START: Kategori -->
    <div class="nk-box bg-dark-1 text-white">
        <div class="bg-image bg-image-parallax" style="background-image: url('assets/images/bg-pattern.jpg');"></div>
        <div class="nk-gap-5 mnt-6"></div>
        <div class="container">
            <div class="row vertical-gap">
                <div class="col-md-6 col-lg-3">
                    <div class="nk-ibox-1">
                        <div class="nk-ibox-icon">
                            <span class="pe-7s-science pe-spin"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <div class="nk-ibox-title"><?php echo $jml; ?></div>
                            <div class="nk-ibox-text">Pendidikan</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="nk-ibox-1">
                        <div class="nk-ibox-icon">
                            <span class="pe-7s-paper-plane"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <div class="nk-ibox-title"><?php echo $jml_lintas; ?></div>
                            <div class="nk-ibox-text">Lalu Lintas</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="nk-ibox-1">
                        <div class="nk-ibox-icon">
                            <span class="pe-7s-like"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <div class="nk-ibox-title"><?php echo $jml_kesehatan; ?></div>
                            <div class="nk-ibox-text">Kesehatan</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="nk-ibox-1">
                        <div class="nk-ibox-icon">
                            <span class="pe-7s-leaf"></span>
                        </div>
                        <div class="nk-ibox-cont">
                            <div class="nk-ibox-title"><?php echo $jml_lingkungan; ?></div>
                            <div class="nk-ibox-text">Lingkungan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-5 mnt-6"></div>
    </div>
    <!-- END: Kategori -->

    <!-- START: New Poster -->
    <div class="nk-box bg-white" id="projects">
        <div class="nk-gap-4 mt-5"></div>

        <h2 class="text-xs-center display-4">New Poster</h2>

        <div class="nk-gap mnt-6"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-xs-center">Poster terbaru hasil karya desainer komunitas Negeri Poster, ditampilkan dibawah ini.
                    </div>
                </div>
            </div>
        </div>

        <div class="nk-gap-2 mt-12"></div>
        <div class="container">
            <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">

                <?php 
// menampilkan poster yang sudah di approve
                include "conf/koneksi.php";
                $vw = mysqli_query($connect, "SELECT * FROM poster WHERE status = 'Approved' ORDER BY id_poster DESC");
                $no = 1;
                while ($r = mysqli_fetch_array($vw)){
                    if($no<10){
                        ?>

                        <div class="nk-isotope-item" data-filter="Mockup">
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
                        <?php } $no  ; } ?>
                    </div>
                </div>
                <div class="nk-gap-4 mt-15"></div>
            </div>
            <!-- END:  New Poster -->

            <!-- START: Reviews -->
            <div class="nk-box bg-dark-1">
                <div class="bg-image bg-image-parallax" style="background-image: url('assets/images/bg-pattern.jpg');"></div>
                <div class="nk-gap-3"></div>
                <div class="container-fluid">
                    <!-- START: Carousel -->
                    <div class="nk-carousel nk-carousel-all-visible text-white" data-autoplay="1500" data-dots="true">
                        <div class="nk-carousel-inner">
                            <div>
                                <div>
                                    <blockquote class="nk-blockquote-style-1 text-white">
                                        <p>Negeri Poster merupakan sebuah wadah para kreator-kreator Indonesia dalam bidang desain grafik khususnya dalam sebuah poster.</p>
                                        <cite>Lely Novia C</cite>
                                    </blockquote>
                                    <div class="nk-gap-3 mt-10"></div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <blockquote class="nk-blockquote-style-1 text-white">
                                        <p>Negeri Poster merupakan ajang untuk menunjukan kreativitas dalam membuat poster.</p>
                                        <cite>Zaid Billah</cite>
                                    </blockquote>
                                    <div class="nk-gap-3 mt-10"></div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <blockquote class="nk-blockquote-style-1 text-white">
                                        <p>Ingin menuangkan ide atau gagasan dalam bentuk visual? Negeri Poster tempatnya!</p>
                                        <cite>Ari</cite>
                                    </blockquote>
                                    <div class="nk-gap-3 mt-10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Carousel -->
                </div>
                <div class="nk-gap-4 mt-3"></div>
            </div>
            <!-- END: Reviews -->


            <!-- START: Poster lama -->
            <div class="nk-box bg-gray-1" id="blog">
                <div class="nk-gap-4 mt-5"></div>

                <h2 class="text-xs-center display-4">Old Poster</h2>

                <div class="nk-gap mnt-6"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="text-xs-center">Kumpulan poster-poster yang telah di upload ke situs Negeri Poster
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nk-gap-2 mt-12"></div>
                <div class="container">
                    <!-- START: Carousel -->
                    <div class="nk-carousel-2 nk-carousel-x2 nk-carousel-no-margin nk-carousel-all-visible nk-blog-isotope" data-dots="true">
                        <div class="nk-carousel-inner">

                            <?php 
                            include "conf/koneksi.php";
                            
                            $xx = mysqli_query($connect, "SELECT * FROM poster WHERE status = 'Approved' ORDER BY id_poster ASC");
                            $noo = 1;
                            while ($s = mysqli_fetch_array($xx)){
                                if($noo<8){
                                    $isi_deskripsi = htmlentities(strip_tags($s['deskripsi']));
// 51 menampilkan jumlah karakter
                                    $isi = substr($isi_deskripsi,0,51);    
                                    ?>

                                    <div>
                                        <div>
                                            <div class="pl-15 pr-15">
                                                <div class="nk-blog-post">
                                                    <div class="nk-post-thumb">
                                                        <a href="portfolio-single.php?id=<?php echo $s['id_poster']; ?>&user=<?php echo $s['id_user']; ?>">
                                                            <img src="user/img_user/<?php echo $s['foto']; ?>" width="500" height="350" alt="" class="nk-img-stretch">
                                                        </a>
                                                        <div class="nk-post-category"><a href="#"><?php echo $s['kategori']; ?></a></div>
                                                    </div>
                                                    <h2 class="nk-post-title h4"><a href="blog-single.html"><?php echo $s['judul']; ?></a></h2>

                                                    <div class="nk-post-date">
                                                        <?php echo date("d F Y", strtotime("$s[created]")); ?>
                                                    </div>

                                                    <div class="nk-post-text">
                                                        <p><?php echo $isi;?>...</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-gap-1"></div>
                                        </div>
                                    </div>

                                    <?php } $no  ; } ?>

                                </div>
                            </div>
                            <!-- END: Carousel -->
                        </div>
                        <div class="nk-gap-5 mt-20"></div>
                    </div>
                    <!-- END: Poster lama -->




        <!--
    START: Footer
-->
<footer class="nk-footer">


    <div class="nk-footer-cont">
        <div class="container text-xs-center">
            <div class="nk-footer-social">
                <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="nk-footer-text">
                <p>2017 © All right reserved. Code by Us</p>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->


</div>




<!-- START: Scripts -->

<script src="assets/js/combined.js"></script>
<script src="assets/js/jquery-3.2.1.min.js"></script>

<!-- END: Scripts -->


</body>

</html>