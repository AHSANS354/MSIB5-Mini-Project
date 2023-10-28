<?php
class Member{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }


    public function cekLogin($data){
        $sql = 'SELECT FROM member WHERE username = ? AND WHERE password = ?';
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetchAll();
        return $rs;
    }
}

?>