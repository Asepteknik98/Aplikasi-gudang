<?php 
$app = new application;
$query = "SELECT COUNT(id_pegawai) as jml FROM pegawai";
foreach ($app->tampilData($query) as $row) {   
    $jumlahPegawaiSaatini = $row['jml'];
    $idPeg = $jumlahPegawaiSaatini + 1;
    if($idPeg < 10){
        $idPegbaru = "0".$idPeg;
    }else{
        $idPegbaru = $idPeg;
    }
}
?>
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary mt-3 ml-3">
        <div class="card-header">
        <h3 class="card-title">Tambah Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form name="pegawi" method="POST" action="">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">id pegawai</label>
                <input type="text" name="id_peg" class="form-control" id="exampleInputEmail1" placeholder="PEG-00" value="<?php echo"PEG-$idPegbaru"?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Pegawai</label>
                <input type="text" name="nm_pegawai" class="form-control" id="exampleInputPassword1" placeholder="Nama pegawai">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Jenis Kelamin</label>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="jns_kelamin" class="custom-control-input" value="laki-laki">
                <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="jns_kelamin" class="custom-control-input" value="petempuan">
                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">tempat lahir</label>
                <input type="text" name="tmp_lahir" class="form-control" id="exampleInputPassword1" placeholder="ex: Purwakarta">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">tanggal lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1">
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
        $id_peg = $_POST['id_peg'];
        $nm_pegawai = $_POST['nm_pegawai'];
        $jns_kelamin = $_POST['jns_kelamin'];
        $tmp_lahir = $_POST['tmp_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        $username = $_POST['id_peg'];
        $password = "cobasaja";

        //jalankan method addPegawai   
        $app->addPegawai($id_peg,$nm_pegawai,$jns_kelamin,$tmp_lahir,$tgl_lahir,$email,$no_telp,$alamat);

        // jalankan method addAkun
        $app->addAkun($id_peg,$username,$password);
        echo'<a href="tampil_fakultas.php">Selanjutnya</a>';
    }

?>