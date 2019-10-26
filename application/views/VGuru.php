<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Guru</h3>

            
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
    
      <a href="<?php echo site_url('Welcome/VFormAddGuru'); ?>"class="btn btn-block btn-primary btn-flat">Tambah</a>
    
  
              <table class="table table-hover">
                <tr>
                  <th>Kode Guru</th>
                  <th>Nama</th>
                  <th>NO TLP</th>
                </tr>
                
                <?php
  if(!empty($DataGuru))
  {
    foreach($DataGuru as $ReadDS)
    {
  ?>

  <tr>
    <td><?php echo $ReadDS->kd_guru; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->no_tlp; ?></td>
    <td>
      <a href="<?php echo site_url('Welcome/DataGuru/'.$ReadDS->kd_guru.'/view') ?>">Update</a>
      <a href="<?php echo site_url('Welcome/DeleteDataGuru/'.$ReadDS->kd_guru) ?>">Delete</a>
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



