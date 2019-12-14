		<?php
   include "../conf/koneksi.php";
   include "../lib/inc.session.php";

   /*-------- menghitung total jumlah peserta -----------*/
   $sql1 = mysqli_query($connect, "select *, count(peserta.id_peserta) as jml_peserta from peserta where peserta.cr_username_peserta = '$_SESSION[username]'");
   $r = mysqli_fetch_array($sql1);
   $jml = $r['jml_peserta'];

   /*-------- menghitung total jumlah event -----------*/
   $sql2 = mysqli_query($connect, "select *, count(seminar.id_seminar) as jml_seminar from seminar where seminar.cr_username_seminar = '$_SESSION[username]'");
   $s = mysqli_fetch_array($sql2);
   $jml_allseminar = $s['jml_seminar'];

   /*-------- menghitung total jumlah kartu identitas aktif -----------*/
   $sql3 = mysqli_query($connect, "select *, count(kartu_identitas.id_kartu) as jml_kartu from kartu_identitas where kartu_identitas.cr_username_kartuid = '$_SESSION[username]' and aktif_kartuid = 'Y'");
   $t = mysqli_fetch_array($sql3);
   $jml_allkartu = $t['jml_kartu'];

   /*-------- menghitung total jumlah jurusan aktif -----------*/
   $sql4 = mysqli_query($connect, "select *, count(pendidikan.id_pendidikan) as jml_jurusan from pendidikan where pendidikan.cr_username_pendidikan = '$_SESSION[username]' and aktif_pendidikan = 'Y'");
    $u = mysqli_fetch_array($sql4);
   $jml_alljurusan = $u['jml_jurusan'];

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
         <h4>Selamat datang di <b>halaman administrator</b>.</h4>
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
      <p>Jumlah Peserta Event</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="?page=vwPst" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

 <div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-maroon">
    <div class="inner">
      <h3><?php echo $jml_allseminar; ?></h3>
      <p>Jumlah Event</p>
    </div>
    <div class="icon">
      <i class="ion ion-calendar"></i>
    </div>
    <a href="?page=vwSmnr" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

 <div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3><?php echo $jml_allkartu; ?></h3>
      <p>Jumlah Kartu Identitas Aktif</p>
    </div>
    <div class="icon">
      <i class="ion ion-card"></i>
    </div>
    <a href="?page=vwCard" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-teal">
    <div class="inner">
      <h3><?php echo $jml_alljurusan; ?></h3>
      <p>Jumlah Jurusan Aktif</p>
    </div>
    <div class="icon">
      <i class="ion ion-university"></i>
    </div>
    <a href="?page=vwEdu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

</div><!-- /.row -->
</section>