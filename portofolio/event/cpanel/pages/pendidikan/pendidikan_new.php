		<!-- Main content -->
        <section class="content">
		  <div class="example-modal">
            <div class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location='?page=vwEdu'"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Jurusan</h4>
                  </div>
				  <form role="form" action="?page=svEdu" method="post">
                  <div class="modal-body">
                    <p>
						<div class="form-group">
                            <label for="exampleInputEdu1">Jurusan</label>
                            <input type="text" class="form-control" name="pendidikan" id="exampleInputEdu1" placeholder="Masukkan jurusan." required="required">
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