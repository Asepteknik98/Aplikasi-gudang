<?php
$app = new application;

// Periksa apakah parameter id_supplier ada dan tidak kosong
if (isset($_GET['id_supplier']) && !empty($_GET['id_supplier'])) {
    $id_supplier = $_GET['id_supplier'];
        
    // Periksa apakah tombol "Batal" ditekan
    if (isset($_POST['batal'])) {
        // Redirect kembali ke halaman view_supplier.php dengan menyertakan parameter id_supplier
        header("Location: view_supplier.php?id_supplier=$id_supplier");
        exit();
    }

    // Query untuk menghapus data supplier berdasarkan id_supplier
    $deleteQuery = "DELETE FROM supplier WHERE id_supplier = $id_supplier";

    // Eksekusi query
    $app->jalankanQuery($deleteQuery);

    // Redirect ke halaman view_supplier.php setelah berhasil menghapus data
    header("Location: view_supplier.php");
    exit();
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
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
</div>
