		<!-- Main content -->
        <section class="content">
		  <div class="example-modal">
            <div class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location='?page=vwCard'"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Kartu Identitas</h4>
                  </div>
				  <form role="form" action="?page=svCard" method="post">
                  <div class="modal-body">
                    <p>
						<div class="form-group">
                            <label for="exampleInputKartuid1">Kartu Identitas</label>
                            <input type="text" class="form-control" name="jns_kartuid" id="exampleInputKartuid1" placeholder="Masukkan jenis kartu identitas." required="required">
                        </div>
					</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
				  </form>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
		</section>