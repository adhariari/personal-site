<?php
session_start();
include "conf/koneksi.php";
$vw = mysqli_query($connect, "SELECT * FROM poster, user WHERE poster.id_poster = $_GET[id] AND user.id_user = $_GET[user]");
while ($r = mysqli_fetch_array($vw)){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Negeri Poster</title>
    <meta name="description" content="Snow - Clean & Minimal Portfolio HTML template.">
    <meta name="keywords" content="portfolio, clean, minimal, blog, template, portfolio website">
    <meta name="author" content="nK">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- START: Styles -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/combined.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
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
                    <img src="assets/images/logo-light.png" alt="" width="85" class="nk-nav-logo-onscroll">
                    <img src="assets/images/logo.png" alt="" width="85">
                </a>

                <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                    <li>
                        <a href="index.php#about">About</a>
                    </li>
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
    <div class="container">
        <div class="nk-portfolio-single">
            <div class="nk-gap-1 mb-10"></div>
            <h1 class="nk-portfolio-title display-4"><?php echo $r['judul']; ?></h1>
            <div class="row vertical-gap">
                <div class="col-lg-8">
                    <center><img class="nk-img-fit" width="400" height="500" src="user/img_user/<?php echo $r['foto']; ?>"></center>
                    <div class="nk-portfolio-info">
                        <div class="nk-gap-1 mb-10  "></div>
                        <div class="nk-portfolio-text">
                            <p><?php echo $r['deskripsi']; ?></p>
                        </div>
                        <div class="nk-gap-1 mb-10  "></div>
                        <a href="download.php?download_file=<?php echo $r['foto'] ?>&id=<?php echo $r['id_poster'] ?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a> &emsp;&emsp;
                        <?php
                        // coding like dan unlike
                        if(!empty($_SESSION['email'])) {
                            $like=mysqli_query($connect,"SELECT * FROM suka WHERE id_user = $_SESSION[id_user] AND id_poster = $r[id_poster]");
                            $data=mysqli_fetch_array($like);

                            if($data['liked']==1)
                            {
                                ?>
                                <a href="unlike.php?yg_like=<?php echo $_SESSION['id_user'] ?>&id_user=<?php echo $r['id_user'] ?>&id_poster=<?php echo $r['id_poster'] ?>"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Liked</a>
                                <?php }else{ ?>                        
                                <a href="like.php?yg_like=<?php echo $_SESSION['id_user'] ?>&id_user=<?php echo $r['id_user'] ?>&id_poster=<?php echo $r['id_poster'] ?>"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Like</a>
                                <?php } } ?>                        
                            </div>

                            <!-- START: Comments -->
                            <div id="comments"></div>
                            <div class="nk-comments">
                                <div class="nk-gap-3"></div>    
                                <h3 class="nk-title">Comments:</h3>
                                <div class="nk-gap-1"></div>
<!-- coding komen -->
                                <?php
                                $w = mysqli_query($connect, "SELECT * FROM comment, user WHERE comment.id_poster = $_GET[id] AND user.id_user = comment.id_user");
                                if (empty(mysqli_num_rows($w))){
                                    echo "Tidak ada komentar";
                                }else{
                                    while ($z = mysqli_fetch_array($w)){
                                        ?>
                                        <!-- START: Comment -->
                                        <div class="nk-comment">
                                            <div class="nk-comment-avatar">
                                                <a href="#">
                                                    <img src="assets/images/avatar.png" alt="">
                                                </a>
                                            </div>
                                            <div class="nk-comment-meta">
                                                <div class="nk-comment-name"><a href="#"><?php echo $z['nama']; ?></a></div>
                                                <div class="nk-comment-reply"><a href="#komen">Reply</a></div>
                                                <div class="nk-comment-date"><?php echo date("d F Y", strtotime($z['tgl_komen'])); ?></div>
                                            </div>
                                            <div class="nk-comment-text">
                                                <p><?php echo $z['message']; ?></p>
                                            </div>
                                        </div>
                                        <!-- END: Comment -->

                                        <?php }}  ?>

                                    </div>
                                    <!-- END: Comments -->

                                    <!-- START: Reply -->
                                    <?php
                                    if(!empty($_SESSION['id_user'])) {

                                        ?>
                                        <div id="komen" class="nk-reply">
                                            <div class="nk-gap-3"></div>
                                            <h3 class="nk-title">Leave a Comment:</h3>
                                            <div class="nk-gap-1"></div>
                                            <form action="post_comment.php" class="nk-form" method="post">
                                                <div class="row vertical-gap">
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="back" value="<?php echo $r['id_user']; ?>">
                                                        <input type="hidden" class="form-control required" name="id_poster" value="<?php echo $r['id_poster']; ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="hidden" class="form-control required" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
                                                    </div>
                                                </div>
                                                <textarea class="form-control required" name="message" rows="5" placeholder="Your Comment" aria-required="true"></textarea>
                                                <div class="nk-gap-1"></div>
                                                <div class="nk-form-response-success"></div>
                                                <div class="nk-form-response-error"></div>
                                                <button type="submit" class="nk-btn">Post a Comment</button>
                                            </form>
                                            <div class="nk-gap-3"></div>
                                        </div>
                                        <!-- END: Reply -->
                                        <?php } ?>

                                    </div>

                                    <div class="col-lg-4">
                                        <table class="nk-portfolio-details">
                                            <tr>
                                                <td>
                                                    <strong>By:</strong>
                                                </td>
                                                <td><?php echo $r['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>On:</strong>
                                                </td>
                                                <td><?php echo date("d F Y", strtotime("$r[created]")); ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Category:</strong>
                                                </td>
                                                <td><?php echo $r['kategori']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Likes:</strong>
                                                </td>
                                                <?php
                                                $a = mysqli_query($connect,"SELECT COUNT(liked) as jumlah FROM suka WHERE id_poster = $r[id_poster]");
                                                $b = mysqli_fetch_array($a);
                                                ?>

                                                <td><?php echo $b['jumlah']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Downloaded:</strong>
                                                </td>
                                                <td><?php echo $r['downloaded']; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="nk-gap-4 mt-14"></div>

                            </div>
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
                <p>2017 &copy; Design by Us. Code by Us</p>
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
<?php 
}
?>