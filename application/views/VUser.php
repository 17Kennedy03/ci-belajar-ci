<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			<a href="<?php echo site_url('User/VFormAddUser'); ?>" class="btn btn-block btn-primary btn-flat">Tambah</a>
		
	
              <table class="table table-hover">
                <tr>
          
                  <th>Username</th>
                
                </tr>
                
                <?php
	if(!empty($DataUser))
	{
		foreach($DataUser as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->username; ?></td>

		<td>
			<a href="<?php echo site_url('User/DeleteDataUser/'.$ReadDS->kd_login) ?>">Delete</a>
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




