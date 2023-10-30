<?php
$model = new Produk();
$data_produk = $model->dataProduk();

$member = $_SESSION['MEMBER'];
if(isset($member)){


?>
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="index.php?url=create_produk">
                                    <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Stok Minimal</th>
                                            <th>Jenis Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Stok Minimal</th>
                                            <th>Jenis Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1;
                                            foreach ($data_produk as $row){ ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['kode'] ?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['harga_beli']?></td>
                                            <td><?= $row['harga_jual']?></td>
                                            <td><?= $row['stok']?></td>
                                            <td><?= $row['min_stok']?></td>
                                            <td><?= $row['jenis']?></td>
                                            <td>
                                                <form>
                                                    <a href="index.php?url=produk_detail&id=<?= $row['id'] ?>">
                                                        <button type="button" class='btn btn-sm btn-primary'>Detail</button>
                                                    </a>
                                                    <a href="index.php?url=produk_form&id=<?= $row['id'] ?>">
                                                        <button type="button" class="btn btn-sm btn-warning">Ubah</button>
                                                    </a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Akan Menghapus <?= $row['nama'] ?>?')">
                                                        Hapus
                                                    </button>
                                                    <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                                </form>
                                            </td>
                                        </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
                } else {
                    echo "<script> alert('Anda tidak memiliki akses untuk mengakses halaman ini');history.back();</script>";
                }
                ?>