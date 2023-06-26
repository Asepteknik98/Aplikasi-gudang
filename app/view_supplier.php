<div class="card">
  <div class="card-header">
    <div class="row">
      <div class="col-md-10">
          <h3 class="card-title">Tampil Data Supplier</h3>
      </div>
      <div class="col-md-2">
        <a href="dasboard.php?page=app/add_supplier"><button type="button" class="btn btn-info">Tambah Supplier Baru</button></a>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Nama Supplier</th>
        <th>No Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
      </thead>
      <tbody>
      <?php 
        $app = new application;
        $no = 1;
        $query = "SELECT * FROM supplier";
        foreach ($app->tampilData($query) as $row) {   
      ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['nm_supplier'];?></td>
          <td><?php echo $row['no_telp'];?></td>
          <td><?php echo $row['email'];?></td>          
          <td><?php echo $row['alamat'];?></td>
          <td>
            <!-- Tambahkan tombol edit dan hapus dengan link ke halaman edit_supplier.php dan hapus_supplier.php -->
            <a href="edit_supplier.php?id_supplier=<?php echo $row['id_supplier']; ?>"><button type="button" class="btn btn-primary">Edit</button></a>
            <a href="hapus_supplier.php?id_supplier=<?php echo $row['id_supplier']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
          </td>
        </tr>
      <?php $no++; } ?>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
