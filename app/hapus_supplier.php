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

        // Periksa apakah tombol "Hapus" ditekan
        if (isset($_POST['hapus'])) {
            // Query untuk menghapus data supplier
            $deleteQuery = "DELETE FROM supplier WHERE id_supplier = $id_supplier";

            // Eksekusi query
            $app->jalankanQuery($deleteQuery);

            // Redirect ke halaman view_supplier.php setelah berhasil menghapus data
            //header("Location: view_supplier.php");
            //exit();
        }

        // Periksa apakah tombol "Batal" ditekan
        if (isset($_POST['batal'])) {
        }
    } else {
        // Data supplier tidak ditemukan, redirect ke halaman view_supplier.php
        //header("Location: view_supplier.php");
        //exit();
    }
} else {
    // Parameter id_supplier tidak ada, redirect ke halaman view_supplier.php
    header("Location: view_supplier.php");
    exit();
}
?>

<!-- Kode HTML untuk form hapus supplier -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Hapus Supplier</h3>
    </div>
    <div class="card-body">
        <form method="POST">
            <p>Anda yakin ingin menghapus supplier ini?</p>
            <button type="submit" class="btn btn-danger" name="hapus">Hapus</button>
            <button type="submit" class="btn btn-secondary" name="batal">Batal</button>
        </form>
    </div>
</div>