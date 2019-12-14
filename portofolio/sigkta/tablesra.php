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
  <link rel="stylesheet" type="text/css" href="lib/datatables/datatables.min.css"/>
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
          <li><a href="index.php#hero">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Feature</a></li>
          <li><a href="index.php#portfolio">Technical Design</a></li>
          <li><a href="index.php#team">Profile</a></li>
          <li><a href="peta.php">Peta KTA</a></li>
<!--           <li class="menu-has-children"><a href="#">Maps</a>
            <ul>
              <li><a href="petasra.php">Sumur Resapan Air (SRA)</a></li>
              <li><a href="petadpn.php">Dam Penahan (DPn)</a></li>
              <li><a href="petagp.php">Gully Plug (GP)</a></li>
            </ul>
          </li> -->
          <li class="menu-has-children menu-active"><a href="">Data Table</a>
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
  <section id="herosra">
    <div class="hero-container">
      <h1>Tabel Data</h1>
      <h2>Persebaran Sumur Resapan Air di Kabupaten Bandung</h2>
      <a href="#about" class="btn-get-started">View <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></i></a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-12 content order-lg-1 order-2">
            <h2 class="title" align="center">Data Persebaran Sumur Resapan Air</h2>
            <p>
              
            </p>
<div class="table-responsive">
<table id="example" class="table table-bordered table-hover" style="width:100%">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Lokasi</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Unit</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
                <?php
                include "conf/koneksi.php";
                
                $vw = mysqli_query($connect, "SELECT * FROM sra");
                $no = 1;
                while ($r = mysqli_fetch_array($vw)){
                  ?>
                  
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo "$r[kecamatan]"; ?></td>
                    <td><?php echo "$r[desa]"; ?></td>
                    <td><?php echo "$r[lokasi_sra]"; ?></td>
                    <td><?php echo "$r[latitude]"; ?></td>
                    <td><?php echo "$r[longitude]"; ?></td>
                    <td><?php echo "$r[unit]"; ?></td>
                    <td>
                      <div class="btn-group">
                        <a href="detail.php?map=sra&id=<?php echo $r['id_sra']; ?>" target="_blank" class="btn btn-outline-success btn-sm" role="button"><i class="fa fa-map-pin" aria-hidden="true"></i> Map</a>
                      </div>
                    </td>
                  </tr>
                  
                  <?php $no++; } ?>
        </tbody>
    </table>
</div>
          </div>
        </div>

      </div>
    </section><!-- #about -->

        <section id="facts">
          <?php
          if($_GET['kata']==''){

          }else{
            $kata = $_GET['kata'];
            $sql = mysqli_query($connect,"SELECT *, COUNT(sra.id_sra) as jml_sra FROM sra WHERE desa LIKE '%$kata%' OR kecamatan LIKE '%$kata%' OR lokasi_sra LIKE '%$kata%'");
            $s = mysqli_fetch_array($sql);
            $jml_sra = $s['jml_sra'];
            $total = round($jml_sra/108 * 100,2);
          }
          ?>

          <div class="container wow fadeIn">
            <div class="section-header">
              <h3 class="section-title">Analisis Data</h3>
              <?php

              ?>
              <p class="section-description">Jumlah Bangunan Sumur Resapan Air disuatu Lokasi</p>
            </div><center>
              <?php
              if($_GET['kata']==''){

              }else{
                ?>
                <p class="section-description">Jumlah sumur resapan air di <?php echo "$kata"; ?> terdapat sebanyak <?php echo "$total%"; ?> dari total 108 bangunan sumur resapan air.<br>

                </p>
                <?php
              }
              ?>
            </center>

            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                <form method="GET" action="?">
                  <div class="form-group search-box">
                    <center><small style="margin-bottom: 5px;" id="emailHelp" class="form-text text-muted">Masukkan nama kecamatan atau desa atau lokasi.</small></center>
                    <input type="text" name="kata" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search...">
                    <div class="result"></div>
                  </div><br>
                  <center><button type="submit" class="btn btn-primary">Submit</button></center>
                </form>
              </div>
              <div class="col-md-3">
              </div>
            </div>
          </section>

  </main>

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
  <script src="lib/datatables/datatables.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
