<style>
  th{
    text-align: center;
  }
  td{
    text-align: center; 
  }
  
}
</style>
<!-- <script src="<?=base_url()?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script> -->
<!-- START CUSTOM TABS -->
      <h2 class="page-header">Daftar Siswa</h2>
      <
     <form name="form1" action="<?=base_url()?>admin/tampil_dari_search" method="post" enctype="multipart/form-data" style="width:40%; float:right">

      <div>
        <label>Cari</label>
        <input type="text" id="cari" name="cari" >&nbsp;&nbsp;
        <input class="btn btn-primary" type="submit" value="Cari">&nbsp;&nbsp;
         <a href="<?=base_url()?>admin/tambah_pengguna" class="btn btn-primary" type="submit" value="Tambah"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
     </div>
     </form>
     <br>
     <br>
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            
            <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-tooltip" data-toogle="tooltip">
                <tr>
                 <th>Id User</th>
                  <th>Foto</th>
                   <th>Nama</th>
                   <th>Level</th>
                    <th>Username</th>
                  <th>Password</th>
                  <th>No Absen</th>
                  <th>Kelas</th>
                   <th>Nama Anak</th>
                  <th>Action</th>
                  
                  <th> </th>
                </tr>

                <?php foreach ($daftar_pengguna as $u_key){ ?>
                <tr>
                  <td><?php echo $u_key->iduser; ?></td>
                  <td></td>
                  <td><?php echo $u_key->nama; ?></td>
                  <td><?php echo $u_key->level_user; ?></td>
                  <td><?php echo $u_key->username; ?></td>
                  <td><?php echo $u_key->password; ?></td>
                   <td><?php echo $u_key->absen; ?></td>
                   <td><?php echo $u_key->kelas; ?></td>
                   <td><?php echo $u_key->id_anak; ?></td>
                  <td>
                    <a href="<?=base_url()?>user/lihat_grafik/<?php echo $u_key->iduser ?>" type="submit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                    
                  </td>
                  
                </tr>
                
                <?php }?>
              </table>
            </div>
              </div>
            

              

