<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo site_url('User/AddDataUser'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode login</label>
                  <input type="text" class="form-control"  placeholder="Enter Kode login" name="kd_login">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Enter Username" name="username">
                </div>
				<div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Enter Password" name="password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->