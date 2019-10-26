<!-- <form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
	NIS<input type="text" name="nis"><br>
	Nama<input type="text" name="nama"><br>
	Alamat<input type="text" name="alamat"><br>
	<input type="submit" name="simpan" value="Simpan">
</form> -->

<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo site_url('Welcome/AddDataGuru'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Guru</label>
                  <input type="text" class="form-control"  placeholder="Enter Kode" name="kd_guru">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama">
                </div>
				<div class="form-group">
                  <label>No TLP</label>
                  <input type="text" class="form-control" placeholder="Enter NO TLP" name="no_tlp">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->