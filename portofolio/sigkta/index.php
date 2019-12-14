    <?php
   include "conf/koneksi.php";

   /*-------- menghitung total sumur resapan air -----------*/
   $sql1 = mysqli_query($connect, "select *, count(sra.id_sra) as jml_sra from sra");
   $r = mysqli_fetch_array($sql1);
   $jml_sra = $r['jml_sra'];

   /*-------- menghitung total Dam penahan -----------*/
   $sql2 = mysqli_query($connect, "select *, count(dpn.id_dpn) as jml_dpn from dpn");
   $s = mysqli_fetch_array($sql2);
   $jml_dpn = $s['jml_dpn'];

   /*-------- menghitung total gully plug -----------*/
   $sql3 = mysqli_query($connect, "select *, count(gp.id_gp) as jml_gp from gp");
   $t = mysqli_fetch_array($sql3);
   $jml_gp = $t['jml_gp'];

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Geographic Information System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Feature</a></li>
          <li><a href="#portfolio">Technical Design</a></li>
          <li><a href="#team">Profile</a></li>
          <li><a href="peta.php">Peta KTA</a></li>
<!--           <li class="menu-has-children"><a href="#">Maps</a>
            <ul>
              <li><a href="petasra.php">Sumur Resapan Air (SRA)</a></li>
              <li><a href="petadpn.php">Dam Penahan (DPn)</a></li>
              <li><a href="petagp.php">Gully Plug (GP)</a></li>
            </ul>
          </li> -->
          <li class="menu-has-children"><a href="">Data Table</a>
          <ul>
              <li><a href="tablesra.php?kata=">Sumur Resapan Air (SRA)</a></li>
              <li><a href="tabledpn.php?kata=">Dam Penahan (DPn)</a></li>
              <li><a href="tablegp.php?kata=">Gully Plug (GP)</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Sistem Informasi Geografis</h1>
      <h2>Persebaran SRA, DPn, GP di kabupaten Bandung</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Sistem Informasi Geografis</h2>
            <p align="justify">
              <b> Sistem Informasi Geografis (SIG)</b> atau <b>Geographic Information System (GIS)</b> merupakan sistem informasi berbasis komputer yang menggabungkan antara unsur peta (geografis) dengan informasi yang terkait tentang peta tersebut (data atribut). SIG sebagai sistem komputer yang digunakan untuk memanipulasi data geografi.
            </p>
            <p align="justify">
              Sedangkan <b> Web GIS</b> adalah pemetaan digital yang di aplikasikan dalam bentuk web sebagai media komunikasi yang berfungsi mendistribusikan, mempublikasikan, mengintegrasikan, mengkomunikasikan dan menyediakan sistem informasi geografis. Web GIS ini menampilkan pemetaan bangunan KTA BPDAS Citarum-Ciliwung.
            </p>
          </div>

          <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
          	<img src="img/logo.jpg" class="img-thumbnail">
          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Total Pekerjaan</h3>
          <p class="section-description">Bangunan KTA Balai Pengelolaan DAS dan Hutan Lindung Citarum-Ciliwung</p>
        </div>
        <div class="row counters">

  				<div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $jml_sra; ?></span>
            <p>Sumur Resapan Air</p>
  				</div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $jml_dpn; ?></span>
            <p>Dam Penahan</p>
  				</div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $jml_gp; ?></span>
            <p>Gully Plug</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Feature</h3>
          <p class="section-description">Keunggulan Sistem Informasi Geografis Berbasis WEB</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-clone"></i></a></div>
              <h4 class="title"><a href="">Transparansi Data</a></h4>
              <p class="description">Data yang disajikan di website ini akan di tampilkan pada halaman data table.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Sumber Data</a></h4>
              <p class="description">Data rancangan teknis bangunan KTA ini didapat dari Kementrian Lingkungan Hidup dan Kehutanan</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
              <h4 class="title"><a href="">Aksesibilitas</a></h4>
              <p class="description">Peta dapat dengan mudah di akses dan <i>Friendly User</i></p>
            </div>
          </div>

<!--           <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-road"></i></a></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-shopping-bag"></i></a></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Peta Persebaran</h3>
            <p class="cta-text">Sumur Resapan Air, Dam Penahan dan Gully Plug di Wilayah Kabupaten Bandung.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="peta.php">View Maps</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Rancangan Teknis</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-sra, .filter-dpn, .filter-gp" class="filter-active">All</li>
              <li data-filter=".filter-sra">SRA</li>
              <li data-filter=".filter-dpn">DPn</li>
              <li data-filter=".filter-gp">GP</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-sra">
            <a href="" data-toggle="modal" data-target="#myModal">
              <img src="img/portfolio/app1.jpg" alt="" class="img-thumbnail" >
              <div class="details">
                <h4>Sumur Resapan Air</h4>
                <span>Rancangan Teknis</span>
              </div>
            </a>
          </div>

<!--           <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web2.jpg" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div> -->

          <div class="col-lg-3 col-md-6 portfolio-item filter-sra">
            <a href="" data-toggle="modal" data-target="#myModal2">
              <img src="img/portfolio/app2.jpg" alt="" class="img-thumbnail">
              <div class="details">
                <h4>Sumur Resapan Air</h4>
                <span>Rancangan Teknis</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-dpn">
            <a href="" data-toggle="modal" data-target="#myModal3">
              <img src="img/portfolio/card1.jpg" alt="" class="img-thumbnail">
              <div class="details">
                <h4>Dam Penahan</h4>
                <span>Rancangan Teknis</span>
              </div>
            </a>
          </div>

<!--           <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web3.jpg" alt="">
              <div class="details">
                <h4>Web 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div> -->


          <div class="col-lg-3 col-md-6 portfolio-item filter-gp">
            <a href="" data-toggle="modal" data-target="#myModal4">
              <img src="img/portfolio/logo1.jpg" alt="" class="img-thumbnail">
              <div class="details">
                <h4>Gully Plug</h4>
                <span>Rancangan Teknis</span>
              </div>
            </a>
          </div>


<!--           <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web1.jpg" alt="">
              <div class="details">
                <h4>Web 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div> -->


        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Author</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <h4>Dr HERI SUPRAPTO, ST.MT</h4>
              <span>Dosen Pembimbing</span>
              <div class="social">
                <a href="http://hsuprapto.staff.gunadarma.ac.id/" target="_blank"><i class="fa fa-globe"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Adhari</h4>
              <span>Sistem Informasi - Universitas Gunadarma</span>
              <div class="social">
                <a href="https://twitter.com/ariganesha" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/sayaadhari" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/ariganesha/" target="_blank"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>

<!--           <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Any Questions?</h3><br>
          <center><p>Jika ada pertanyaan atau saran silahkan kirim melalui form atau melalui email dibawah ini<br><i class="fa fa-envelope"></i> : <a href="mailto:admin@bangunankta.web.id">admin@bangunankta.web.id</a></p></center>
        </div>
      </div>

      <div class="container wow fadeInUp">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="submit.php" method="post">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 3 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sumur Resapan Air</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="img/portfolio/app1.jpg" alt="" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sumur Resapan Air</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="img/portfolio/app2.jpg" alt="" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dam Penahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="img/portfolio/card1.jpg" alt="" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengendali Jurang / Gully Plug</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="img/portfolio/logo1.jpg" alt="" class="img-thumbnail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright SIG Adhari 2018.
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        All Rights Reserved Made with <i class="fa fa-gratipay" aria-hidden="true"></i>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
