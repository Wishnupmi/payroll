
<?= $this->extend('cms/index_update'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-7"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                FORM UPDATE DATA PINJAMAN
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/tambah_pinjaman/update'); ?>" method="POST">
                <input type="hidden" name="kode" value="<?= $data_pinjaman['id_data_pinjaman']; ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIP</label>
                    <input type="text" class="form-control form-control-sm" name="nip" value="<?= $data_pinjaman['nip']; ?>" required>
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-sm" name="nama" value="<?= $data_pinjaman['nama']; ?>" required>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pinjaman</label>
                    <input type="text" class="form-control form-control-sm" name="pinjaman" value="<?= $data_pinjaman['pinjaman']; ?>" required>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jangka Waktu</label>
                    <input type="text" class="form-control form-control-sm" name="jangka_waktu" value="<?= $data_pinjaman['jangka_waktu']; ?>" required>
                  </div>

                  <br><br>
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </form>

                  

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>