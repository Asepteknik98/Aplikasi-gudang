<?php
// Periksa apakah parameter id_supplier ada dan tidak kosong
if (isset($_GET['id_supplier']) && !empty($_GET['id_supplier'])) {
    $id_supplier = $_GET['id_supplier'];

    $app = new application;

    // Query untuk mengambil data supplier berdasarkan id_supplier
    $query = "SELECT * FROM supplier WHERE id_supplier = $id_supplier";
    $result = $app->tampilData($query);

    // Periksa apakah data supplier ditemukan
    if ($result && count($result) > 0) {
        $supplier = $result[0];

        // Periksa apakah form telah disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil data dari form
            $nm_supplier = $_POST['nm_supplier'];
            $no_telp = $_POST['no_telp'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];

            // Query untuk mengupdate data supplier
            $updateQuery = "UPDATE supplier SET nm_supplier = '$nm_supplier', no_telp = '$no_telp', email = '$email', alamat = '$alamat' WHERE id_supplier = $id_supplier";

            // Eksekusi query
            $app->jalankanQuery($updateQuery);
        }

        // Periksa apakah tombol "Batal" ditekan
        if (isset($_POST['batal'])) {
            // Redirect kembali ke halaman view_supplier.php dengan menyertakan parameter id_supplier
            header("Location: view_supplier.php?id_supplier=$id_supplier");
            exit();
        }
    } else {
        // Data supplier tidak ditemukan, redirect ke halaman view_supplier.php
        header("Location: view_supplier.php");
        exit();
    }
} else {
    // Parameter id_supplier tidak ada, redirect ke halaman view_supplier.php
    header("Location: view_supplier.php");
    exit();
}
?>

<!-- Kode HTML untuk form edit supplier -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Supplier</h3>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label for="nm_supplier">Nama Supplier</label>
                <input type="text" class="form-control" id="nm_supplier" name="nm_supplier" value="<?php echo $supplier['nm_supplier']; ?>" required>
            </div>
            <div class="form-group">
                <label for="no_telp">No Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $supplier['no_telp']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $supplier['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?php echo $supplier['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-secondary" name="batal">Batal</button>
        </form>
    </div>
</div>
