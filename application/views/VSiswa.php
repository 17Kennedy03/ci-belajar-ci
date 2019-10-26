<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>

            
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>" class="btn btn-block btn-primary btn-flat">Tambah</a>
		
	
              <table class="table table-hover">
                <tr>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                </tr>
                
                <?php
	if(!empty($DataSiswa))
	{
		foreach($DataSiswa as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->nis; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->alamat; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataSiswa/'.$ReadDS->nis.'/view') ?>">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$ReadDS->nis) ?>">Delete</a>
		</td>
	</tr>
            
         <?php
     }
 }
 ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




