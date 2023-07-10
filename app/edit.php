$app = new application;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // untuk menerima post dari textfield
    $nm_supplier = $_POST['nm_supplier'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    //jalankan method addSupplier
    $app->addSupplier($nm_supplier, $email, $no_telp, $alamat);
    // redirect link
    header("Location: dasboard.php?page=app/view_supplier");
    exit();
}
?>

<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary mt-3 ml-3">
        <div class="card-header">
            <h3 class="card-title">Tambah Customer</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form name="pegawai" method="POST" action="">
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Supplier</label>
                    <input type="text" name="nm_supplier" class="form-control" id="exampleInputPassword1" placeholder="Nama Customer">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="ex: Budi@gmail.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="ex: 099900">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
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
