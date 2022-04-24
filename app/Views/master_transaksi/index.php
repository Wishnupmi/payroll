
<?= $this->extend('cms/index'); ?>
<?= $this->section('content'); ?>

    <div class="container px-5 py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">

                <h3>Transaksi Penjualan Barang</h3>
                <br>
                <a href="<?= base_url('/public/index.php/tambah_transaksi_penjualan'); ?>" class="btn btn-sm btn-primary">Tambah Penjualan Barang</a>
                <hr>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Users</th>
                    <th scope="col">Kelamin</th>
                    <th scope="col">Username</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach($tb_user as $data) : ?>
                    <tr>
                        <th scope="row"><?=$no; ?></th>
                        <td><?= $data['nm_users']; ?></td>
                        <td><?= $data['kelamin_users']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td>
                            <a href="<?= base_url('/public/index.php/tambahbarang/ubah/'.$data['id_users']); ?>" class="btn btn-sm btn-info">Ubah</a>
                            <a href="<?= base_url('/public/index.php/tambahbarang/delete/'.$data['id_users']); ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                    $no++;
                    endforeach; ?>
                </tbody>
                </table>
                

                
            </div>
        </div>
    </div>
  
    
<?= $this->endSection(); ?>

