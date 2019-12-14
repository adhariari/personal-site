<?php
session_start();
include "../lib/inc.session.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="plugins/ionicons/css/ionicons.css">
  <!-- faveicon -->
  <link rel="shortcut icon" href="icon.ico">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- modal style -->
        <style>
          .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
          }
          .example-modal .modal {
            background: transparent !important;
          }
        </style>
        <!-- end of modal style -->

        <!-- date picker -->
        <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>
        <style type="text/css">

          .custom-date-style {
           background-color: red !important;
         }

         .input{	
         }
         .input-wide{
           width: 500px;
         }

       </style>
       <!-- end of date picker -->

     </head>
     <!-- kerangka dashboard -->
     <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">

        <header class="main-header">
          <!-- Logo -->
          <a href="media.php?page=dashboard" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">SIG</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="assets/logo.png"></span>
          </a>
          <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <?php
                include "../conf/koneksi.php";

                $sql = mysqli_query($connect, "select * from admin where username = '$_SESSION[username]'");
                $r = mysqli_fetch_array($sql);
                ?>
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="gambar/admin.png" class="user-image" alt="User Image">
                    <span class="hidden-xs"><?php echo $r['username']; ?></span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="gambar/admin.png" class="img-circle" alt="User Image">
                      <p>
                        <?php echo $r['username']; ?>
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <!-- Menu Footer-->
                    <li class="user-footer">
                     <div class="pull-right">
                       <a href="?page=sign-out" class="btn btn-primary">Sign out</a>
                     </div>
                   </li>
                 </ul>
               </li>
             </ul>
           </div>
         </nav>
       </header>
       <!-- Left side column. contains the logo and sidebar -->
       <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="gambar/admin.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $r['username']; ?></p>
              <i class="fa fa-circle text-success"></i>&nbsp; Online
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="?page=dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

            <li class="treeview">
              <a href="?page=vwSmnr">
                <i class="fa fa-tint"></i> <span>Sumur Resapan Air</span>
              </a>
            </li>

            <li class="treeview">
              <a href="?page=vwPst">
                <i class="fa fa-binoculars"></i> <span>Dam Penahan</span>
              </a>
            </li>

            <li class="treeview">
              <a href="?page=vwUs">
                <i class="fa fa-gears"></i> <span>Gully Plug</span>
              </a>
            </li>

            <li class="treeview">
              <a href="?page=grafik-edu">
                <i class="fa fa-pie-chart"></i> <span>Grafik</span>
              </a>
            </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-tasks"></i> <span>Utilities</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="?page=ks"><i class="fa fa-circle-o"></i> Kritik & Saran</a></li>
                    <li><a href="?page=userguide"><i class="fa fa-circle-o"></i> Petunjuk Penggunaan Sistem</a></li>

                  </ul>
                </li>

              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>Dashboard - Control Panel
              </h1>
            </section>

            <!-- Main content -->
            <section class="content">

             <?php include "../cpanel/akses_file.php"; ?>

           </section><!-- /.content -->
         </div><!-- /.content-wrapper -->
         <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
          </div>
          <strong>Copyright &copy; 2018 <a href="media.php?page=dashboard">Sistem Informasi Geografis</a>.</strong> All rights reserved.
        </footer>
      </div><!-- ./wrapper -->

      <!-- jQuery 2.1.4 -->
      <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button);
      </script>
      <!-- Bootstrap 3.3.5 -->
      <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- DataTables -->
      <script src="plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
      <!-- Slimscroll -->
      <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
      <!-- FastClick -->
      <script src="plugins/fastclick/fastclick.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dist/js/app.min.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="dist/js/pages/dashboard.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dist/js/demo.js"></script>
    </body>
    </html>