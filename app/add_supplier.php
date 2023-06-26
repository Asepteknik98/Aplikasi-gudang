<?php 
$app = new application;
?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary mt-3 ml-3">
        <div class="card-header">
        <h3 class="card-title">Tambah Costumer</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form name="pegawi" method="POST" action="">
        <div class="card-body">
            
            <div class="form-group">
                <label for="exampleInputPassword1">Nama supplier</label>
                <input type="text" name="nm_supplier" class="form-control" id="exampleInputPassword1" placeholder="Nama costumer">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">email</label>
                <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="ex: Budi@gmail.com">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">no telp</label>
                <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="ex: 099900">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">alamat</label>
                <textarea name="alamat" class="form-control" id="exampleInputPassword1" cols="30" rows="10"></textarea>
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
        $nm_supplier = $_POST['nm_supplier'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        //jalankan method addPegawai   
        $app->addSupplier($nm_supplier,$email,$no_telp,$alamat);
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_supplier">';
    }

?>