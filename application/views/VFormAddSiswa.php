<!-- <form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
	NIS<input type="text" name="nis"><br>
	Nama<input type="text" name="nama"><br>
	Alamat<input type="text" name="alamat"><br>
	<input type="submit" name="simpan" value="Simpan">
</form> -->

<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>nis</label>
                  <input type="text" class="form-control"  placeholder="Enter nis" name="nis">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama">
                </div>
				<div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Enter Alamat" name="alamat">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->