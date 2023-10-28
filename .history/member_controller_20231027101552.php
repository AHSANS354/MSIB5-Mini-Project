<?php
session_start();
include_once 'admin/koneksi';
include_once 'models/member.php';

$uname = $_POST['username'];
$password = $_POST['password'];
$data = [
    $uname,$password
];

$obj = new Member();
$rs = $obj->cekLogin($data);

if(!empty($rs)){
    $_SESSION['MEMBER'] = $rs;
    header('location:index.php?url=produk');
}else{
    header('location:indexphp?hal=home');
}

?>