		<?php
   include "../conf/koneksi.php";
   include "../conf/inc.session.php";

   /*-------- menghitung total jumlah poster pendidikan -----------*/
   $sql1 = mysqli_query($connect, "select *, count(poster.kategori) as jml_pendidikan from poster where poster.id_user = '$_SESSION[id_user]' and kategori = 'Pendidikan'");
   $r = mysqli_fetch_array($sql1);
   $jml = $r['jml_pendidikan'];

   /*-------- menghitung total jumlah poster lalu lintas -----------*/
   $sql2 = mysqli_query($connect, "select *, count(poster.kategori) as jml_lintas from poster where poster.id_user = '$_SESSION[id_user]' and kategori = 'Lalu-Lintas'");
   $s = mysqli_fetch_array($sql2);
   $jml_lintas = $s['jml_lintas'];

   /*-------- menghitung total jumlah poster kesehatan -----------*/
   $sql3 = mysqli_query($connect, "select *, count(poster.kategori) as jml_kesehatan from poster where poster.id_user = '$_SESSION[id_user]' and kategori = 'Kesehatan'");
   $t = mysqli_fetch_array($sql3);
   $jml_kesehatan = $t['jml_kesehatan'];

   /*-------- menghitung total jumlah poster lingkungan -----------*/
   $sql4 = mysqli_query($connect, "select *, count(poster.kategori) as jml_lingkungan from poster where poster.id_user = '$_SESSION[id_user]' and kategori = 'Lingkungan'");
    $u = mysqli_fetch_array($sql4);
   $jml_lingkungan = $u['jml_lingkungan'];

   ?>

   <!-- Main content -->
   <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">

     <div class="col-xs-12">
      <div class="box box-default">
       <div class="box-header with-border">
        <i class="fa fa-bullhorn"></i>
        <h3 class="box-title">Kolom Informasi</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <div class="alert alert-info">
         <h4>Selamat datang di <b>halaman dashboard user</b>.</h4>
         <p align="justify">Mohon gunakan fitur yang terdapat dihalaman ini dengan sebaik-baiknya.</p>
       </div>
     </div>
   </div>
 </div>

 <div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3><?php echo $jml; ?></h3>
      <p>Jumlah Poster Pendidikan</p>
    </div>
    <div class="icon">
      <i class="ion ion-university"></i>
    </div>
    <a href="?page=vwUs" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

 <div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-maroon">
    <div class="inner">
      <h3><?php echo $jml_lintas; ?></h3>
      <p>Jumlah Poster Lalu Lintas</p>
    </div>
    <div class="icon">
      <i class="fa fa-subway"></i>
    </div>
    <a href="?page=vwUs" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

 <div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3><?php echo $jml_kesehatan; ?></h3>
      <p>Jumlah Poster Kesehatan</p>
    </div>
    <div class="icon">
      <i class="fa fa-heartbeat "></i>
    </div>
    <a href="?page=vwUs" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-teal">
    <div class="inner">
      <h3><?php echo $jml_lingkungan; ?></h3>
      <p>Jumlah Poster Lingkungan</p>
    </div>
    <div class="icon">
      <i class="fa fa-recycle"></i>
    </div>
    <a href="?page=vwUs" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

</div><!-- /.row -->
</section>