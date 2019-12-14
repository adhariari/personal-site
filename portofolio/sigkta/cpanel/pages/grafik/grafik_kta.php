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
            text: 'Grafik Pembangunan SRA, DPn, GP'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            },
            showInLegend: true
        }
    },
        series: [{
            name: 'Rancangan',
            colorByPoint: true,
            <?php 
            include "../conf/koneksi.php";
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
data: [{
            name: 'Sumur Resapan Air',
            y: <?php echo $jml_sra; ?>,
        }, {
            name: 'Dam Penahan',
            y: <?php echo $jml_dpn; ?>
        }, {
            name: 'Gully Plug',
            y: <?php echo $jml_gp; ?>
        }]
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
						<h3 class="box-title">Grafik Pembangunan <br><small>Berdasarkan SRA, DPN, GP</small></h3>
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


