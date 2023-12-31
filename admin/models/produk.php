<?php
class Produk{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }


    public function dataProduk(){
        $sql = 'SELECT p.*, j.nama AS jenis FROM produk p INNER JOIN jenis_produk j ON p.jenis_produk_id = j.id;';
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getProduk($id){
        $sql = "SELECT p.*, j.nama AS jenis FROM produk p INNER JOIN jenis_produk j ON p.jenis_produk_id = j.id WHERE p.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data){
        $sql = "INSERT INTO produk(kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>