<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin | Negeri Poster</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
  <meta name="author" content="Lely">

  <!-- The styles -->
  <link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
  <style type="text/css">
    body {
    padding-bottom: 40px;
    }
    .sidebar-nav {
    padding: 9px 0;
    }
  </style>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/charisma-app.css" rel="stylesheet">
  <link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
  <link href='css/fullcalendar.css' rel='stylesheet'>
  <link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
  <link href='css/chosen.css' rel='stylesheet'>
  <link href='css/uniform.default.css' rel='stylesheet'>
  <link href='css/colorbox.css' rel='stylesheet'>
  <link href='css/jquery.cleditor.css' rel='stylesheet'>
  <link href='css/jquery.noty.css' rel='stylesheet'>
  <link href='css/noty_theme_default.css' rel='stylesheet'>
  <link href='css/elfinder.min.css' rel='stylesheet'>
  <link href='css/elfinder.theme.css' rel='stylesheet'>
  <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
  <link href='css/opa-icons.css' rel='stylesheet'>
  <link href='css/uploadify.css' rel='stylesheet'>

  <!-- The fav icon -->
  <link rel="shortcut icon" href="img/logo20.png">
    
</head>

<body>
<?php
  include "../conf/koneksi.php";
  
  if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
  echo "<center><h1>Anda harus login terlebih dahulu</h1><br>";
  echo "<a href=../index.php?hal=admin><h3>LOGIN</b></h3></center>";
}
else{
?>
    <!-- topbar starts -->
  <div class="navbar">

    <div class="navbar-inner" >

      <div class="container-fluid">

        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="kepala" align="center">
        <img src="img/head.png" style="max-width:800px;" />
      </div>
     
        
      </div>
    </div>
  </div>
  <!-- topbar ends -->
    <div class="container-fluid">
    <div class="row-fluid">
        
      <!-- left menu starts -->
      <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="nav-header hidden-tablet">MENU</li>
              <li><a class="ajax-link" href="?modul=poster"><i class="icon-file"></i><span class="hidden-tablet"> Poster</span></a></li>
              <li><a class="ajax-link" href="?modul=user"><i class="icon-user"></i><span class="hidden-tablet"> User</span></a></li>
               <li><a class="ajax-link" href="logout.php "><i class="icon-trash"></i><span class="hidden-tablet"> Logout</span></a></li>
            
          </ul>          
        </div><!--/.well -->
      </div><!--/span-->
      <!-- left menu ends -->
      
      <div id="content" class="span10">
      <!-- content starts -->
      <div>
        <ul class="breadcrumb" class='nav nav-pills nav-stacked'>
          <li>
            <a href="dashboard.php?modul=home"><h3>BERANDA</h3></a>
          </li>
        </ul>
        <div>
          <?php
            $m = $_GET['modul'];
            
            //Ini ditampilkan pertama kali ketika berhasil Login
            if($m=='home')
            {
              echo "SELAMAT DATANG DI HALAMAN ADMIN";
              echo "<br><br>";
              echo "<p>Silakan memilih salah satu menu yang ada di sebeleh kiri untuk mengelola</p>";
            }

            //Ini untuk memanggil modul poster
            elseif($m=='poster'){
              include "modul/poster.php";
            }
            //memanggil modul user
            elseif($m=='user'){
              include "modul/user.php";
            }
            
            else{
              echo "Halaman yang dicari tidak ditemukan";
            }

          ?> 
        </div>

      </div>      
        <!-- content ends -->
      </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        
    <hr>

    <footer>
  
      <p class="pull-right">Copyright Us @ 2017</a></p>
    </footer>
    
  </div><!--/.fluid-container-->

  <!-- external javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <!-- jQuery -->
  <script src="js/jquery-1.7.2.min.js"></script>
  <!-- jQuery UI -->
  <script src="js/jquery-ui-1.8.21.custom.min.js"></script>
  <!-- transition / effect library -->
  <script src="js/bootstrap-transition.js"></script>
  <!-- alert enhancer library -->
  <script src="js/bootstrap-alert.js"></script>
  <!-- modal / dialog library -->
  <script src="js/bootstrap-modal.js"></script>
  <!-- custom dropdown library -->
  <script src="js/bootstrap-dropdown.js"></script>
  <!-- scrolspy library -->
  <script src="js/bootstrap-scrollspy.js"></script>
  <!-- library for creating tabs -->
  <script src="js/bootstrap-tab.js"></script>
  <!-- library for advanced tooltip -->
  <script src="js/bootstrap-tooltip.js"></script>
  <!-- popover effect library -->
  <script src="js/bootstrap-popover.js"></script>
  <!-- button enhancer library -->
  <script src="js/bootstrap-button.js"></script>
  <!-- accordion library (optional, not used in demo) -->
  <script src="js/bootstrap-collapse.js"></script>
  <!-- carousel slideshow library (optional, not used in demo) -->
  <script src="js/bootstrap-carousel.js"></script>
  <!-- autocomplete library -->
  <script src="js/bootstrap-typeahead.js"></script>
  <!-- tour library -->
  <script src="js/bootstrap-tour.js"></script>
  <!-- library for cookie management -->
  <script src="js/jquery.cookie.js"></script>
  <!-- calander plugin -->
  <script src='js/fullcalendar.min.js'></script>
  <!-- data table plugin -->
  <script src='js/jquery.dataTables.min.js'></script>

  <!-- select or dropdown enhancer -->
  <script src="js/jquery.chosen.min.js"></script>
  <!-- checkbox, radio, and file input styler -->
  <script src="js/jquery.uniform.min.js"></script>
  <!-- plugin for gallery image view -->
  <script src="js/jquery.colorbox.min.js"></script>
  <!-- rich text editor library -->
  <script src="js/jquery.cleditor.min.js"></script>
  <!-- notification plugin -->
  <script src="js/jquery.noty.js"></script>
  <!-- file manager library -->
  <script src="js/jquery.elfinder.min.js"></script>
  <!-- star rating plugin -->
  <script src="js/jquery.raty.min.js"></script>
  <!-- for iOS style toggle switch -->
  <script src="js/jquery.iphone.toggle.js"></script>
  <!-- autogrowing textarea plugin -->
  <script src="js/jquery.autogrow-textarea.js"></script>
  <!-- multiple file upload plugin -->
  <script src="js/jquery.uploadify-3.1.min.js"></script>
  <!-- history.js for cross-browser state change on ajax -->
  <script src="js/jquery.history.js"></script>
  <!-- application script for Charisma demo -->
  <script src="js/charisma.js"></script>
<?php
  }
?>
</body>
</html>