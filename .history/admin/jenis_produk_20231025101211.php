<?php
$model = new Jenis_produk();
$data_jenisProduk = $model->datajenis();
?>
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Jenis Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Jenis Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                               <a href="index.php?url=create_jenis">
                                <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah</button>
                               </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1;
                                            foreach ($data_jenisProduk as $row){ ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['nama']?></td>
                                        </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>