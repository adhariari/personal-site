<?php
include "../lib/inc.session.php";
?>
<html>
  <head>
<!-- jQuery 2.1.4 -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Peserta Acara',
      x: -20
         },
     subtitle: {
                text: 'Berdasarkan Jenis Kelamin Peserta',
                x: -20
            },
         xAxis: {
            categories: ['Jenis Kelamin Peserta']
         },
         yAxis: {
            title: {
               text: 'Total Peserta Acara'
            }
         },
              series:             
            [
            <?php 
          include "../conf/koneksi.php";
// menghitung jumlah peserta berdasarkan jenis kelamin
            $sql   = "SELECT jns_kelamin FROM peserta WHERE peserta.cr_username_peserta = '$_SESSION[username]' GROUP BY jns_kelamin";
            $query = mysqli_query($connect, $sql);
            while( $ret = mysqli_fetch_array( $query ) ){
              $kel = $ret['jns_kelamin'];                     
                 $sql_jumlah   = "SELECT jns_kelamin, 
                              count(peserta.jns_kelamin) as jumlah
                              FROM peserta 
                  WHERE jns_kelamin='$kel' AND peserta.cr_username_peserta = '$_SESSION[username]' 
                  GROUP BY jns_kelamin";        
                 $query_jumlah = mysqli_query($connect, $sql_jumlah);
                 while( $data = mysqli_fetch_array($query_jumlah) ){
                    $jumlah = $data['jumlah'];                
                  }             
                  ?>
                  {
                      name: '<?php echo $kel; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>          
            ]
      });
   });  
</script>

  </head>
  <body>
    <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-md-12">
        <!-- AREA CHART -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Peserta Acara <br><small>Berdasarkan Jenis Kelamin</small></h3>
          </div>
          <div class="box-body">
            <div class="chart">
              <div id='container' style="width: 600px; height: 400px; margin: 0 auto;"></div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  </body>
</html>