
<?= $this->extend('cms/index_update'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-7"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                Ubah Data Barang
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/tambah_barang/update'); ?>" method="POST">
                <input type="hidden" name="kode" value="<?= $tb_users['id_users']; ?>">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama User</label>
                    <input type="text" class="form-control form-control-sm" name="nama" value="<?= $tb_users['nm_users']; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" class="form-select form-select-sm" required>
                      <option value="<?= $tb_users['kelamin_users']; ?>"><?= $tb_users['kelamin_users']; ?></option>  
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control form-control-sm" name="username" value="<?= $tb_users['username']; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-sm" name="password" value="<?= $tb_users['password']; ?>" required>
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </form>

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>