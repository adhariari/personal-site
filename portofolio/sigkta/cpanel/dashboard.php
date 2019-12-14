		<?php
   include "../conf/koneksi.php";
   include "../lib/inc.session.php";

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

   <!-- Main content -->
   <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">

     <div class="col-xs-12">
      <div class="box box-default">
       <div class="box-header with-border">
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div><!-- /. tools -->        
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

 <div class="col-lg-4 col-xs-4">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3><?php echo $jml_sra; ?></h3>
      <p>Jumlah Sumur Resapan Air</p>
    </div>
    <div class="icon">
      <i class="fa fa-tint" aria-hidden="true"></i>
    </div>
    <a href="?page=vwPst" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

 <div class="col-lg-4 col-xs-4">
  <!-- small box -->
  <div class="small-box bg-maroon">
    <div class="inner">
      <h3><?php echo $jml_dpn; ?></h3>
      <p>Jumlah Dam Penahan</p>
    </div>
    <div class="icon">
      <i class="fa fa-binoculars" aria-hidden="true"></i>
    </div>
    <a href="?page=vwSmnr" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->

 <div class="col-lg-4 col-xs-4">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3><?php echo $jml_gp; ?></h3>
      <p>Jumlah Gully Plug</p>
    </div>
    <div class="icon">
      <i class="fa fa-gears" aria-hidden="true"></i>
    </div>
    <a href="?page=vwCard" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->


</div><!-- /.row -->
</section>