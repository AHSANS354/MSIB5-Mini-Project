<?php
class Jenis_produk{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }


    public function dataJenis(){
        $sql = 'SELECT * FROM jenis_produk';
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function simpan($data){
        $sql = 'INSERT INTO jenis_produk(nama) VALUES (?)';
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

?>