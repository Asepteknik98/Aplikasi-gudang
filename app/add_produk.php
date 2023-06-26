<?php 
include "../application.php";
$app = new application;
$query = "SELECT COUNT(id_produk) as jml FROM produk";

foreach ($app->tampilData($query) as $row) {   
    $jumlahprodukSaatini = $row['jml'];
    $idPro = $jumlahprodukSaatini + 1;
    if($idPro < 10){
        $idProbaru = "0".$idPro;
    }else{
        $idProbaru = $idPro;
    }
}


?>
<!-- left column -->

<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-title {
        margin: 0;
    }

    .card-body {
        padding: 20px;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 4px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }
</style>

<div class="col-md-6">
    <div class="card card-primary mt-3 ml-3">
        <div class="card-header">
            <h3 class="card-title">Tambah Produk</h3>
        </div>
        <form name="pegawi" method="POST" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">id Produk</label>
                    <input type="text" name="id_produk" class="form-control" id="exampleInputEmail1" value="<?php echo 'PRO-' . $idProbaru ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Merek Produk</label>
                    <input type="text" name="merek" class="form-control" id="exampleInputPassword1" placeholder="Nama merek produk">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Supplier</label>
                    <select name="id_supplier" class="form-control select2bs4" style="width: 100%;">
                        <option>Pilih Supplier</option>
                        <?php
                        $query = "SELECT * FROM supplier";
                        foreach ($app->tampilData($query) as $row) {
                            echo "<option value=" . $row['id_supplier'] . ">" . $row['nm_supplier'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Satuan</label>
                    <select name="id_satuan" class="form-control select2bs4" style="width: 100%;">
                        <option>Pilih Satuan</option>
                        <?php
                        $query = "SELECT * FROM satuan";
                        foreach ($app->tampilData($query) as $row1) {
                            echo "<option value=" . $row1['id_satuan'] . ">" . $row1['nm_satuan'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <select name="id_kategori" class="form-control select2bs4" style="width: 100%;">
                        <option>Pilih Kategori</option>
                        <?php
                        $query = "SELECT * FROM kat_produk";
                        foreach ($app->tampilData($query) as $row2) {
                            echo "<option value=" . $row2['id_kategori'] . ">" . $row2['nm_kategori'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi produk</label>
                    <textarea name="deskripsi" class="form-control" id="exampleInputPassword1" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $id_produk = $_POST['id_produk'];
    $merek = $_POST['merek'];
    $id_supplier = $_POST['id_supplier'];
    $id_satuan = $_POST['id_satuan'];
    $id_kategori = $_POST['id_kategori'];
    $deskripsi = $_POST['deskripsi'];

    $app->addProduk($id_produk, $merek, $id_supplier, $id_satuan, $id_kategori, $deskripsi);
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_supplier">';
}
?>
