<?php 
$app = new application;
$no = 1;
$query = "SELECT COUNT(id_costumer) as jml FROM costummer";
foreach ($app->tampilData($query) as $row) {   
    $jumlahcostumerSaatini = $row['jml'];
    $idCos = $jumlahcostumerSaatini + 1;
    if($idCos < 10){
        $idCosbaru = "0".$idCos;
    }else{
        $idCosbaru = $idCos;
    }
}
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
                <label for="exampleInputEmail1">id Costumer</label>
                <input type="text" name="id_costumer" class="form-control" id="exampleInputEmail1" placeholder="PEG-00" value="<?php echo"COS-$idCosbaru"?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama costumer</label>
                <input type="text" name="nm_costumer" class="form-control" id="exampleInputPassword1" placeholder="Nama costumer">
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
        $id_costumer = $_POST['id_costumer'];
        $nm_costumer = $_POST['nm_costumer'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        //jalankan method addPegawai   
        $app->addCostumer($id_costumer,$nm_costumer,$email,$no_telp,$alamat);
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_costumer">';
    }

?>