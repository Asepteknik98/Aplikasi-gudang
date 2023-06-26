<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">tampil data pegawai</h3>
      </div>
      <div class="col-md-2">
        <a href="dasboard.php?page=app/add_pegawai"><button type="button" class="btn btn-info">add pegawai</button></a>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>no</th>
        <th>nama pegawai</th>
        <th>tempat, tanggal lahir</th>
        <th>jenis kelamin</th>
        <th>email</th>
        <th>no telp</th>
        <th>alamat</th>
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT * FROM pegawai";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['nm_pegawai'];?></td>
          <td><?php echo $row['tmp_lahir'].", ".tgl_indo($row['tgl_lahir']);?></td>
          <td><?php echo $row['jsn_kelamin'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['no_telp'];?></td>          
          <td><?php echo $row['alamat'];?></td>
        </tr>
      </tbody>
      <?php $no++; } ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>