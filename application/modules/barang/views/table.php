<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= $title?></h4>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="d-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#modal-tambah-barang">Tambah Barang</button>
                    <a class="btn btn-success btn-icon-text mx-3" href="<?= base_url();?>data-barang/tambah-transaksi-barang">Tambah Transaksi Stok</a>
                    <div class="modal fade" id="modal-tambah-barang" tabindex="-1" role="dialog" aria-labelledby="ModalLabel2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ModalLabel2">Tambah Barang</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=base_url();?>data-barang/tambah-barang" method="POST">
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Nama Barang:</label>
                                        <input type="text" name="nama_barang" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Harga Barang:</label>
                                        <input type="number" name="harga" class="form-control"></input>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Tambah</button>
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['data_barang'] as $value) { ?>
                                <tr>
                                    <td><?= $value['nama_barang']?></td>
                                    <td><?= $value['stok']?></td>
                                    <td>
                                        <!-- <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-barang-<?=$value['id_barang'];?>">Kurangi stok</button> -->
                                        <a class="btn btn-danger btn-hapus" href="<?=base_url().'data-barang/hapus-barang/'.$value['id_barang']?>">hapus</a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="modal-barang-<?=$value['id_barang'];?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Kurangi Stok</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?=base_url()."data-barang/kurangi-stok/".$value["id"];?>" method="POST">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nama Barang : <?= $value['nama_barang']?></label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Jumlah Barang:</label>
                                                    <input type="number" name="kurangi_stok" class="form-control" id="jumlah-stok" min="0"></input>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Kurangi</button>
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>