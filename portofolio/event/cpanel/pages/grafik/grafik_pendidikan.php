<html>
	<head>
<!-- jQuery 2.1.4 -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    // Build the chart
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Grafik Peserta Acara Berdasarkan Jurusan'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Jurusan',
            colorByPoint: true,
            data: [            <?php 
          include "../conf/koneksi.php";
// menghitung jumlah peserta berdasarkan pendidikan  
            $sql   = "SELECT *, pendidikan.pendidikan FROM peserta, pendidikan 
                WHERE peserta.id_pendidikan = pendidikan.id_pendidikan
                AND peserta.cr_username_peserta = '$_SESSION[username]'
            GROUP BY pendidikan.pendidikan";
            $query = mysqli_query($connect, $sql);
            while( $ret = mysqli_fetch_array( $query ) ){
              $edu = $ret['pendidikan'];                     
                 $sql_jumlah   = "SELECT *, pendidikan.pendidikan, 
                              count(pendidikan.pendidikan) as jumlah
                              FROM peserta, pendidikan 
                  WHERE peserta.id_pendidikan = pendidikan.id_pendidikan 
                  AND pendidikan.pendidikan = '$edu'
                  AND peserta.cr_username_peserta = '$_SESSION[username]' 
                  GROUP BY pendidikan.pendidikan";        
                 $query_jumlah = mysqli_query($connect, $sql_jumlah);
                 while( $data = mysqli_fetch_array($query_jumlah) ){
                    $jumlah = $data['jumlah'];                
                  }             
                  ?>
                  {
                      name: '<?php echo $edu; ?>',
                      y: <?php echo $jumlah; ?>
                  },
                  <?php } ?>    ]
        }]
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
						<h3 class="box-title">Grafik Peserta Acara <br><small>Berdasarkan Jurusan</small></h3>
					</div>
					<div class="box-body">
						<div class="chart">
							<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>
	</body>
</html>


