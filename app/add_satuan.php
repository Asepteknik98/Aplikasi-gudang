<?php 
$app = new application;
$no = 1;
?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary mt-3 ml-3">
        <div class="card-header">
        <h3 class="card-title">Tambah Jenis Satuan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form name="pegawi" method="POST" action="">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Nama satuan</label>
                <input type="text" name="nm_sat" class="form-control" id="exampleInputPassword1" placeholder="Nama costumer">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Keterangan</label>
                <textarea name="keterangan" class="form-control" id="exampleInputPassword1" cols="30" rows="10"></textarea>
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
    <!-- /.card -->



</div>
<?php 
    if (isset($_POST['submit'])) {
        // untuk menerima post dari textfield
        $nm_sat = $_POST['nm_sat'];
        $keterangan = $_POST['keterangan'];

        //jalankan method addPegawai   
        $app->addSatuan($nm_sat,$keterangan);
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_satuan">';
    }

?>