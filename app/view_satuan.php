<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">tampil data Satuan</h3>
      </div>
      <div class="col-md-2">
        <a href="dasboard.php?page=app/add_satuan"><button type="button" class="btn btn-info">add Satuan baru</button></a>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>no</th>
        <th>nama satuan</th>
        <th>keterangan</th>
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT * FROM satuan";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['nm_satuan'];?></td>
          <td><?php echo $row['keterangan'];?></td>
      </tbody>
      <?php $no++; } ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>