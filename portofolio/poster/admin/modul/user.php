<?php
  if (empty($_SESSION['id_user']) AND empty($_SESSION['email'])){
  echo "<link href='../../assets/css/bootstrap.css' rel='stylesheet' type='text/css'>
  	<center><h2>Untuk mengakses modul</h2> <h1>Anda harus login</h1><br>";
  echo "<a href=../index.php><h3>LOGIN</b></h3></center>";
}
else {

?>

<script src="../assets/js/jquery-2.0.3.min.js"></script>

<?php
	echo "<div class='row-fluid sortable'>						
	<div class='box span12'>
	<div class='box-content'>
		<table class='table table-striped table-bordered bootstrap-datatable datatable'>
		  <thead>
			  <tr>
				  <th>No</th>
				  <th>Nama User</th>
				  <th>Email</th>
				  <th>No Handphone</th>
				  <th>Gender</th>
			  </tr>
		  </thead>   
		  <tbody>";

		  	$b = mysqli_query($connect,"SELECT * FROM user WHERE role='User' ORDER BY id_user ASC");
		  	
		  	$no=1;

		  	while($rb = mysqli_fetch_array($b)){
		  		echo "<tr>";
		  		echo "<td>$no</td>";
		  		echo "<td>$rb[nama]</td>";
		  		echo "<td>$rb[email]</td>";
		  		echo "<td>$rb[no_hp]</td>";
		  		echo "<td>$rb[gender]</td>";
		  		echo "</tr>";
		  		$no++;						  		
		  	}
		  
		echo "</tbody>							
	  		</table>";
	?>            
	</div>
</div><!--/span-->
<?php
}
?>
			
</div><!--/row-->