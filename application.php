<?php
    include "koneksi.php";
    class application extends koneksi{
        public function cekLogin($username, $password)
        {
            // echo $username." ini adalah username";
            $query = "SELECT * FROM users WHERE username ='$username' and password = '$password'";
            $data = mysqli_query($this->koneksi,$query);
            $row = mysqli_fetch_assoc($data);
            
            if($row != null){
                echo "anda bisa login";
                $roles = $row['roles'];
                session_start();
                $_SESSION["roles"] = $roles;
                header("location: dasboard.php");
            }else{
                echo "anda tidak bisa login";
            }
        }
        public function tampilData($query)
        {
            $data = mysqli_query($this->koneksi, $query);
            $hasil = array(); // Inisialisasi variabel $hasil sebagai array kosong
            
            while ($row = mysqli_fetch_assoc($data)) {
                $hasil[] = $row;
            }
            
            return $hasil;
        }
        
        public function addPegawai($id_peg,$nm_pegawai,$jns_kelamin,$tmp_lahir,$tgl_lahir,$email,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,"INSERT INTO pegawai (id_pegawai, nm_pegawai, email, alamat, no_telp, jsn_kelamin, tgl_lahir, tmp_lahir) VALUES ('$id_peg','$nm_pegawai','$email','$alamat','$no_telp','$jns_kelamin','$tgl_lahir','$tmp_lahir')");
        }
        public function addAkun($id_peg,$username,$password)
        {
            mysqli_query($this->koneksi,"INSERT INTO users(id_pegawai, username, password, roles) VALUES ('$id_peg','$username','$password','2')");
        }
        public function addCostumer($id_costumer,$nm_costumer,$email,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,"INSERT INTO costummer(id_costumer, nm_costumer, alamat, email, no_telp) VALUES ('$id_costumer','$nm_costumer','$alamat','$email','$no_telp')");
        }
        public function addKatProduk($nm_kat,$ketrangan)
        {
            mysqli_query($this->koneksi,"INSERT INTO kat_produk(nm_kategori, keterangan) VALUES ('$nm_kat','$ketrangan')");
        }
        public function addSatuan($nm_sat,$ketrangan)
        {
            mysqli_query($this->koneksi,"INSERT INTO satuan(nm_satuan, keterangan) VALUES ('$nm_sat','$ketrangan')");
        }
        public function addSupplier($nm_supplier,$email,$no_telp,$alamat)
        {
            mysqli_query($this->koneksi,"INSERT INTO supplier(nm_supplier, alamat, no_telp, email) VALUES ('$nm_supplier','$alamat','$no_telp','$email')");
        }
        public function addProduk($id_produk,$merek,$id_supplier,$id_satuan,$id_kategori,$deskripsi)
        {
            mysqli_query($this->koneksi,"INSERT INTO produk(id_produk, nm_produk, id_supplier, deskripsi, id_satuan, id_kategori) VALUES ('$id_produk','$merek','$id_supplier','$deskripsi','$id_satuan','$id_kategori')");
        }
    }
?>