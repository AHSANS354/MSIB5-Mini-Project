<?php
include_once 'top.php';
include_once 'menu.php';
?>
    <div class="container-fluid px-4">
        <div>
            <?php
            // error_reporting(0);
                $url = $_GET['url'];
                if($url == 'dashboard'){
                    include_once 'dashboard.php';
                }elseif(!empty($url)){
                    include_once ''.$url.'.php';
                }else{
                    'dashboard.php';
                }
            ?>
        </div>
    </div>
<?php
include_once 'bottom.php';
?>