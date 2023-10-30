<?php
session_start();
include_once 'koneksi.php';
include_once 'models/jenis_produk.php';
include_once 'models/kartu.php';
include_once 'models/produk.php';
$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){

include_once 'top.php';
include_once 'menu.php';
?>
    <div class="container-fluid px-4">
        <div>
            <?php
                $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
                if($url == 'dashboard'){
                    include_once 'dashboard.php';
                }elseif(!empty($url)){
                    include_once ''.$url.'.php';
                }else{
                    include_once 'dashboard.php';
                }
            ?>
        </div>
    </div>
<?php
include_once 'bottom.php';
} else {
    echo "<script> alert('Anda tidak memiliki akses untuk mengakses halaman ini');history.back();</script>";
}
?>