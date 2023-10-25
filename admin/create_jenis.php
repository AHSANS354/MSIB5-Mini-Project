<?php
$objJenis = new Jenis_produk();
$rs = $objJenis->dataJenis();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2 align="center" class="m-3"><i class="fa fa-plus-square"></i>&nbsp;Jenis Produk</h2>
<form action="jenis_controller.php" method="POST" class="m-5">
    <div class="container">
        <div class="form-group row"> 
            <label for="text1" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
                <input id="text1" name="nama" type="text" class="form-control" placeholder="Tambahkan Data">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" value="simpan" type="submit" class="btn btn-primary">Tambah</button>
                <a href="index.php?url=jenis_produk">
                    <button type="submit" class="btn btn-secondary">Kembali</button>
                </a>
            </div>
        </div>
    </div>
</form>