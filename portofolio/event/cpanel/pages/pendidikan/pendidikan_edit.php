		<?php
			include "../conf/koneksi.php";
			include "../lib/inc.session.php";
			
			$ed = mysqli_query($connect, "SELECT * FROM pendidikan WHERE token_pendidikan = '$_GET[tid]'");
			while ($r = mysqli_fetch_array($ed)){
		?>
		
		<!-- Main content -->
        <section class="content">
		  <div class="example-modal">
            <div class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location='?page=vwEdu'"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Data Jurusan</h4>
                  </div>
				  <form role="form" action="?page=upEdu" method="post">
				  <input type='hidden' name='tid' value="<?php echo $r['token_pendidikan']; ?>" >
                  <div class="modal-body">
                    <p>
						<div class="form-group">
                            <label for="exampleInputEdu1">Jurusan</label>
                            <input type="text" class="form-control" name="pendidikan" id="exampleInputEdu1" placeholder="Masukkan Jurusan." value="<?php echo $r['pendidikan']; ?>" required="required">
                        </div>
					</p>
					
					<p>
						<?php
							if ($r['aktif_pendidikan']=='Y'){
						?>
										
						<div class="form-group">
							<label>Aktifkan Jurusan</label>
						</div>
										
						<div class="form-group">
							<input type="radio" name="aktif" id="optionsRadios1" value="Y" checked> Ya
							<input type="radio" name="aktif" id="optionsRadios1" value="N" > Tidak
						</div>
										
						<?php } else { ?>
										
						<div class="form-group">
							<label>Aktifkan Jurusan</label>
						</div>
										
						<div class="form-group">
							<input type="radio" name="aktif" id="optionsRadios1" value="Y" > Ya
							<input type="radio" name="aktif" id="optionsRadios1" value="N" checked> Tidak
						</div>
										
						<?php } ?>
					</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
				  </form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
		</section>
		
		<?php } ?>
		