		<?php
			include "../lib/inc.session.php";
		?>
		
		<!-- Main content -->
        <section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Tambah Data Acara</h3>
						</div><!-- /.box-header -->
				  
						<form role="form" name="form1" action="?page=svSmnr" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
							<div class="box-body">
								<p>
									<div class="form-group">
										<label for="exampleInputSmnr1">Nama Acara</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-pencil-square-o"></i>
											</div>
										<input type="text" class="form-control" name="nama_seminar" id="exampleInputSmnr1" placeholder="Ketikkan nama acara." required="required">
										</div>
									</div>
								</p>
					
								<p>
										<div class="row">
											<div class="col-xs-3">
												<label>Tanggal Pelaksanaan:</label>
												<div class="input-group date">
												<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
												</div>
												<input type="text" name="tgl" class="form-control" id="datetimepicker2" placeholder="Pilih tanggal." required="required">
											</div>
											</div>
											<div class="col-xs-3">
												<label>Waktu Pelaksanaan:</label>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-clock-o"></i>
													</div>
													<input type="text" name="jam" class="form-control" id="datetimepicker1" placeholder="Pilih waktu." required="required">
												</div>
											</div>
											<div class="col-xs-3">
												<label>Biaya (IDR):</label>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-money"></i>
													</div>
												<input type="text" name="biaya" class="form-control" placeholder="Biaya seminar/workshop." required="required">
												</div>
											</div>
											<div class="col-xs-3">
												<label>Kuota Peserta:</label>
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-users"></i>
													</div>
												<input type="text" name="kuota" class="form-control" placeholder="Ketikkan kuota peserta" required="required">
												</div>
											</div>
										</div>
									</p>
					
								<p>
									<div class="form-group">
										<label for="exampleInputLksSmnr1">Lokasi Acara</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-map"></i>
											</div>
										<select name="lokasi_seminar" id="exampleInputLksSmnr1" required="required" class="form-control select2" style="width: 100%;">
											<option value="0" selected="selected">- Pilih Lokasi Acara - </option>
											<option>Auditorium D462 - Depok</option>
											<option>Auditorium D461 - Depok</option>
											<option>Auditorium J167 - Kalimalang</option>
											<option>Auditorium J166 - Kalimalang</option>
											<option>Auditorium K181 - Karawaci</option>
										</select>
										</div>
									</div>
								</p>

							</div>
							<div class="box-footer">
								<button type="button" class="btn btn-default pull-right" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
								<button type="submit" class="btn btn-primary pull-right" name="submit">Save</button>
							</div>
						</form>
					</div>
				</div><!-- /.col-->
			</div><!-- ./row -->
        </section><!-- /.content -->
		
		<script src="jquery.js"></script>
		<script src="build/jquery.datetimepicker.full.js"></script>
		<script>
			$('#datetimepicker1').datetimepicker({
				datepicker:false,
				format:'H:i',
				step:30
			});
			$('#datetimepicker2').datetimepicker({
				yearOffset:0,
				lang:'ch',
				timepicker:false,
				/*-- format:'d/m/Y', format tanggal indonesia --*/
				format:'Y-m-d',
				formatDate:'Y/m/d',
				minDate:'yesterday', // yesterday is minimum date
				maxDate:'+2010/01/02' // and tommorow is maximum 
			});
		</script>