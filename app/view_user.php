<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tampil Data users</h3>
  </div>
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Pemilik Akun</th>
          <th>Username</th>
          <th>Password</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      $app = new Application();
      $no = 1;
      $query = "SELECT a.id_users, b.nm_pegawai, a.username, a.password, a.roles
                FROM users a
                INNER JOIN pegawai b ON a.id_pegawai = b.id_pegawai";
      foreach ($app->tampilData($query) as $row) { 
      ?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row['nm_pegawai'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['password'];?></td>
          <td><?php echo ($row['roles'] == 1) ? "admin" : "user";?></td>
        </tr>
      <?php $no++; } ?>
      </tbody>
    </table>
  </div>
</div>
