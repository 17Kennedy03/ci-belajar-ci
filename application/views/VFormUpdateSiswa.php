<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
              <div class="box-body">

               
                  <input type="hidden" class="form-control"  placeholder="Enter nis" name="nis" value="<?php echo $detail['nis']; ?> ">
                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama" value="<?php echo $detail['nama']; ?> ">
                </div>
				<div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Enter Alamat" name="alamat" value="<?php echo $detail['alamat']; ?> ">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
          











<!-- <form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="hidden" name="nis" value="<?php echo $detail['nis']; ?>">
			<input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
 -->