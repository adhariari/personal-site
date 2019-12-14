<?php
include "conf/koneksi.php";
$id = $_GET['id'];
$map = $_GET['map'];
$data = mysqli_query($connect, "SELECT * FROM $map WHERE id_$map = $id");
while ($r = mysqli_fetch_array($data)){

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

	<?php
	include "header.php";
	?>

  <!--==========================
    Hero Section
    ============================-->
    <section id="herodetail">
    	<div class="hero-container">
    		<h1>Detail Wilayah</h1>
    		<h2><?php if ($map == "sra") {
    			echo "Persebaran Sumur Resapan Air";
    		} elseif ($map == "dpn") {
    			echo "Persebaran Dam Penahan";
    		} else {
    			echo "Persebaran Gully Plug";} ?></h2>
    			<a href="#about" class="btn-get-started"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
    		</div>
    	</section><!-- #hero -->

    	<main id="main">

    <!--==========================
      About Us Section
      ============================-->
      <section id="about">
      	<div class="container">
      		<div class="row about-container">

      			<div class="col-lg-5 content order-lg-1 order-2">
      				<div class="card border-dark mb-3">
      					<div class="card-header text-center">Lokasi</div>
      					<div class="card-body text-dark">
      						<h5 class="card-titl text-center"><?php if ($map == "sra") {
      							echo "$r[lokasi_sra]";
      						} elseif ($map == "dpn") {
      							echo "$r[blok]";
      						} else {
      							echo "$r[desa]";} ?></h5>
      							<div id="map-canvas" style="width:100%;height:650px;"></div>
      						</div>
      					</div>

      				</div>

      				<div class="col-lg-7 order-lg-2 order-1 wow fadeInRight">
      					<div class="card border-dark mb-3">
      						<div class="card-header text-center">Informasi</div>
      						<div class="card-body text-dark">
      							<table class="table">
      								<thead>
      									<tr>
      										<th scope="col">Item</th>
      										<th scope="col">Detail</th>
      									</tr>
      								</thead>
      								<tbody>
      									<tr>
      										<td>Koordinat</td>
      										<td><?php echo $r['latitude']; ?>, <?php echo $r['longitude']; ?></td>
      									</tr>
      									<tr>
      										<td>Desa</td>
      										<td><?php echo $r['desa']; ?></td>
      									</tr>
      									<tr>
      										<td>Kecamatan</td>
      										<td><?php echo $r['kecamatan']; ?></td>
      									</tr>
      									<tr>
      										<td>Kabupaten</td>
      										<td>Bandung</td>
      									</tr>
      									<tr>
      										<td>Provinsi</td>
      										<td>Jawa Barat</td>
      									</tr>
      									<tr>
      										<td>DAS</td>
      										<td>Citarum</td>
      									</tr>
      									<tr>
      										<td>SUBDAS</td>
      										<td>Cisangkuy</td>
      									</tr>
      									<tr>
      										<td>Volume</td>
      										<td><?php echo $r['unit']; ?></td>
      									</tr>   
      									<tr>
      										<td>Gambar</td>
      										<td><?php if ($map == "sra" && $r['gambar']!='') {
                    echo "<a href='' data-toggle='modal' data-target='#myModal'><img src='cpanel/gambar/img_sra/$r[gambar]' class='img-thumbnail' height='300px' width='250px' ></a>";
                  } elseif ($map == "dpn" && $r['gambar']!='') {
                    echo "<a href='' data-toggle='modal' data-target='#myModal'><img src='cpanel/gambar/img_dpn/$r[gambar]' class='img-thumbnail' height='300px' width='250px' ></a>";
                  } elseif ($map =="gp" && $r['gambar']!='') {
                    echo "<a href='' data-toggle='modal' data-target='#myModal'><img src='cpanel/gambar/img_gp/$r[gambar]' class='img-thumbnail' height='300px' width='250px' ></a>";}
                    else{
                      echo "Gambar tidak tersedia.";
                    } ?></td>
      									</tr>                         
      								</tbody>
      							</table>
      						</div>
      					</div>
      				</div>
      			</div>

      		</div>
      	</section><!-- #about -->



      </main>
      <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      	<div class="modal-dialog modal-lg" role="document">
      		<div class="modal-content">
      			<div class="modal-header">
      				<h5 class="modal-title" id="exampleModalLabel"><?php if ($map == "sra") {
      					echo "$r[lokasi_sra]";
      				} elseif ($map == "dpn") {
      					echo "$r[blok]";
      				} else {
      					echo "$r[desa]";} ?></h5>
      					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      						<span aria-hidden="true">&times;</span>
      					</button>
      				</div>
      				<div class="modal-body"><center>
      					<?php if ($map == "sra") {
                    echo "<img src='cpanel/gambar/img_sra/$r[gambar]' class='img-thumbnail'>";
                  } elseif ($map == "dpn") {
                    echo "<img src='cpanel/gambar/img_dpn/$r[gambar]' class='img-thumbnail'>";
                  } else {
                    echo "<img src='cpanel/gambar/img_gp/$r[gambar]' class='img-thumbnail'>";} ?>
      				</center></div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9bdADCIuSnEWSVxByVCpOTy9BmcsiYtQ"></script>

<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
<script>

	function initialize() {
		var myLatlng = new google.maps.LatLng(<?php echo $r['latitude'] ?>,<?php echo $r['longitude'] ?>);
		var mapOptions = {
			zoom: 13,
			center: myLatlng
		};

		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var contentString = '<div id="content">'+
		'<div id="siteNotice">'+
		'</div>'+
		'<h1 id="firstHeading" class="firstHeading">asd</h1>'+
		'<div id="bodyContent">'+
		'<p>asd</p>'+
		'</div>'+
		'</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Maps Info',
			icon:<?php if ($map == "sra") {
				echo "'img/sra.png'";
			} elseif ($map == "dpn") {
				echo "'img/dam.png'";
			} else {
				echo "'img/gp.png'";
			}?>
		});
  // google.maps.event.addListener(marker, 'click', function() {
  //   infowindow.open(map,marker);
  // });

  marker.addListener('click', function() {
  	map.setZoom(15);
  	map.setCenter(marker.getPosition());
  });  

  map.addListener('center_changed', function() {
          // 3 seconds after the center of the map has changed, pan back to the
          // marker.
          window.setTimeout(function() {
          	map.panTo(marker.getPosition());
          }, 5000);
      });

}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
</body>
</html>
<?php } ?>