<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">Tampil data costumer</h3>
      </div>
      <div class="col-md-2">
        <a href="dasboard.php?page=app/add_costumer"><button type="button" class="btn btn-info">add costumer</button></a>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>no</th>
        <th>id costumer</th>
        <th>nama costumer</th>
        <th>no telpon</th>
        <th>email</th>
        <th>alamat</th>
      </tr>
      </thead>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT * FROM costummer";
        foreach ($app->tampilData($query) as $row) {   
      ?>
      <tbody>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['id_costumer'];?></td>
          <td><?php echo $row['nm_costumer'];?></td>
          <td><?php echo $row['no_telp'];?></td>
          <td><?php echo $row['email'];?></td>          
          <td><?php echo $row['alamat'];?></td>
        </tr>
      </tbody>
      <?php $no++; } ?>
    </table>
  </div>
  <!-- /.card-body -->
</div>