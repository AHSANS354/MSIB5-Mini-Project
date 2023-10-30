<?php
$objProduk = new Produk();
$obj_jenisProduk = new Jenis_Produk();

$data_produk = $objProduk->dataProduk();
$data_jenis = $obj_jenisProduk->dataJenis();
$idedit = $_GET['idedit'];
if (!empty($idedit)){
  $produk = $objProduk->getProduk($idedit);
} else{  
  $produk = array(); 
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<h2 align="center" class="m-3"><i class="fa fa-plus-square"></i>&nbsp;CREATE PRODUK</h2>
<form class="m-5" action="produk_controller.php" method="POST">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
        <div class="col-8">
            <input id="harga_beli" name="harga_beli" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
        <div class="col-8">
            <input id="harga_jual" name="harga_jual" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
            <input id="stok" name="stok" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Minimal Stok</label> 
        <div class="col-8">
            <input id="min_stok" name="min_stok" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
        <div class="col-8">
            <select id="jenis_produk" name="jenis_produk" class="custom-select">
                <option value="">Jenis Produk</option>
                <?php
                foreach ($data_jenis as $jenis){
                ?>
                <option value="<?= $jenis['id'] ?>"><?= $jenis['nama']?></option>
                <?php } ?>
            </select>
        </div>
    </div> 
    <div class="form-group row">
    <div class="offset-4 col-8">
    <?php
    if(empty($idedit)) { ?>
    <button name="proses" value="simpan" type="submit" class="btn btn-primary">Tambah</button>
        <?php } else {
        ?>
        <button type="submit" name="proses" value="ubah" class="btn btn-warning">Ubah</button>
        <?php } ?>
        <a href="index.php?url=produk">
            <button type="submit" class="btn btn-secondary">Kembali</button>
        </a>
    </div>
    </div>
</form>