<?php
include "conf/koneksi.php";
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
	<style>
	#map-canvas {
		width: 100%;
		height: 700px;
	}
  .map-control {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
    font-family: 'Roboto','sans-serif';
    margin: 10px;
    padding-right: 5px;
    padding-top: 5px;
    padding-left: 5px;
        /* Hide the control initially, to prevent it from appearing
        before the map loads. */
        display: none;
    }
    /* Display the control once it is inside the map. */
    #map-canvas .map-control { display: block; }

    .selector-control {
        font-size: 14px;
        line-height: 30px;
        vertical-align: baseline;
    }    
</style>  
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyA9bdADCIuSnEWSVxByVCpOTy9BmcsiYtQ"></script>
<script>
	// var marker;
	// var marker2;
	function initialize() {
		var mapCanvas = document.getElementById('map-canvas');
		var mapOptions = {   
			zoom: 11,
			center: new google.maps.LatLng(-7.060237, 107.619852),
            mapTypeControl: false
        // disableDefaultUI: true
    };    
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var infoWindow = new google.maps.InfoWindow; 
    var infoWindow2 = new google.maps.InfoWindow;    
    var infoWindow3 = new google.maps.InfoWindow;       
    var bounds = new google.maps.LatLngBounds();

// UNTUK PETA SRA
function bindInfoWindow(marker, map, infoWindow, html) {
 google.maps.event.addListener(marker, 'click', function() {
  infoWindow.setContent(html);
  infoWindow.open(map, marker);
});
}


function addMarker(lat, lng, info) {
 var pt = new google.maps.LatLng(lat, lng);
 bounds.extend(pt);
 var marker = new google.maps.Marker({
  map: map,
  position: pt,
  icon:'img/sra.png'
});       
            // map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);

        // Apply new JSON when the user chooses to hide/show features.
        document.getElementById('all-poi').addEventListener('click', function() {
          marker.setVisible(true); 
      });    

        document.getElementById('show-poi').addEventListener('click', function() {
          marker.setVisible(true);
      });  

        document.getElementById('show-poi2').addEventListener('click', function() {
          marker.setVisible(false);
      });

        document.getElementById('show-poi3').addEventListener('click', function() {
          marker.setVisible(false);
      });         
    }

    <?php
    $query = mysqli_query($connect, "select * from sra");
    while ($data = mysqli_fetch_array($query)) {
       $lat = $data['latitude'];
       $lon = $data['longitude'];
       $nama = $data['lokasi_sra'];
       $id = $data['id_sra'];
       echo ("addMarker($lat, $lon, '<center><b>Sumur Resapan Air</b></center> <br>Lokasi : $nama <br>Koordinat : $lat, $lon<br><br><a href=detail.php?map=sra&id=$id>Info Detail</a>');\n");                        
   }
   ?>

// UNTUK PETA DPN
function bindInfoWindow2(marker, map, infoWindow2, html) {
 google.maps.event.addListener(marker, 'click', function() {
  infoWindow.setContent(html);
  infoWindow.open(map, marker);
});
}

function addMarker2(lat2, lng2, info) {
 var pt2 = new google.maps.LatLng(lat2, lng2);
 bounds.extend(pt2);
 var marker2 = new google.maps.Marker({
  map: map,
  position: pt2,
  icon:'img/dam.png'
});       
            // map.fitBounds(bounds);
            bindInfoWindow2(marker2, map, infoWindow2, info);

            document.getElementById('all-poi').addEventListener('click', function() {
              marker2.setVisible(true);
          }); 

            document.getElementById('show-poi2').addEventListener('click', function() {
              marker2.setVisible(true);
          });  

            document.getElementById('show-poi').addEventListener('click', function() {
              marker2.setVisible(false);
          }); 

            document.getElementById('show-poi3').addEventListener('click', function() {
              marker2.setVisible(false);
          });         
        }

        <?php
        $query2 = mysqli_query($connect, "select * from dpn");
        while ($data2 = mysqli_fetch_array($query2)) {
        	$lat2 = $data2['latitude'];
        	$lon2 = $data2['longitude'];
        	$nama2 = $data2['blok'];
            $desa2 = $data2['desa'];
            $id2 = $data2['id_dpn'];
            echo ("addMarker2($lat2, $lon2, '<center><b>Dam Penahan</b></center> <br>Blok : $nama2 <br> Desa : $desa2 <br>Koordinat : $lat2, $lon2<br><br><a href=detail.php?map=dpn&id=$id2>Info Detail</a>');\n");                        
        }
        ?>

// UNTUK PETA GP
function bindInfoWindow3(marker, map, infoWindow3, html) {
 google.maps.event.addListener(marker, 'click', function() {
  infoWindow.setContent(html);
  infoWindow.open(map, marker);
});
}

function addMarker3(lat3, lng3, info) {
 var pt3 = new google.maps.LatLng(lat3, lng3);
 bounds.extend(pt3);
 var marker3 = new google.maps.Marker({
  map: map,
  position: pt3,
  icon:'img/gp.png'
});       
            // map.fitBounds(bounds);
            bindInfoWindow2(marker3, map, infoWindow3, info);

            document.getElementById('all-poi').addEventListener('click', function() {
              marker3.setVisible(true);
          }); 

            document.getElementById('show-poi3').addEventListener('click', function() {
              marker3.setVisible(true);
          });

            document.getElementById('show-poi').addEventListener('click', function() {
              marker3.setVisible(false);
          });          

            document.getElementById('show-poi2').addEventListener('click', function() {
              marker3.setVisible(false);
          }); 
        }

        <?php
        $query3 = mysqli_query($connect, "select * from gp");
        while ($data3 = mysqli_fetch_array($query3)) {
        	$lat3 = $data3['latitude'];
        	$lon3 = $data3['longitude'];
        	$nama3 = $data3['kecamatan'];
        	$desa3 = $data3['desa'];
        	$id3 = $data3['id_gp'];

        	echo ("addMarker3($lat3, $lon3, '<center><b>Gully Plug</b></center> <br>Kecamatan : $nama3<br>Desa : $desa3 <br> Koordinat : $lat3, $lon3<br><br><a href=detail.php?map=gp&id=$id3>Info Detail</a>');\n");                        
        }
        ?>

        // Add controls to the map, allowing users to hide/show features.
        var styleControl = document.getElementById('style-selector-control');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl);




    }



    google.maps.event.addDomListener(window, 'load', initialize);
</script>

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
          <li class="menu-active"><a href="petasra.php">Peta KTA</a></li>
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
    <section id="heropeta">
    	<div class="hero-container">
    		<h1>Peta</h1>
    		<h2>Persebaran Bangunan KTA BPDAS Citarum-Ciliwung</h2>
    		<a href="#about" class="btn-get-started"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
    	</div>
    </section><!-- #hero -->

    <main id="main">

    <!--==========================
      About Us Section
      ============================-->
      <section id="about">
      	<div class="container-fluid">
      		<div class="row about-container">

      			<div class="col-lg-12 content order-lg-1 order-2">
      				<div class="card border-success mb-3">
      					<h4 class="card-header text-center">Tampilan Peta</h4>
      					<div class="card-body text-dark">
                            <div id="style-selector-control" class="map-control">
                              <input type="radio" name="show-hide" id="show-poi"
                              class="selector-control" >
                              <label for="show-poi">Sumur Resapan Air</label><br>
                              <input type="radio" name="show-hide" id="show-poi2"
                              class="selector-control" >
                              <label for="show-poi">Dam Penahan</label><br>
                              <input type="radio" name="show-hide" id="show-poi3"
                              class="selector-control" >
                              <label for="show-poi">Gully Plug</label><br>
                              <input type="radio" name="show-hide" id="all-poi"
                              class="selector-control" checked="checked">
                              <label for="all-poi">All</label>                              
                          </div>                            
                          <div id="map-canvas"></div>  
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </section><!-- #about -->


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
