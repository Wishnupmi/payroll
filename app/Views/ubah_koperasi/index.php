
<?= $this->extend('cms/index_update'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-7"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                FORM UPDATE DATA KOPERASI
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/tambah_koperasi/update'); ?>" method="POST">
                <input type="hidden" name="kode" value="<?= $data_koperasi['id_data_koperasi']; ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIP</label>
                    <input type="text" class="form-control form-control-sm" name="nama" value="<?= $data_koperasi['nip']; ?>" required>
                  </div>
                  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-sm" name="nama" value="<?= $data_koperasi['nama']; ?>" required>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masuk Bulan</label>
                    <input type="text" class="form-control form-control-sm" name="masuk_bln" value="<?= $data_koperasi['masuk_bln']; ?>" required>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masuk Tahun</label>
                    <input type="text" class="form-control form-control-sm" name="masuk_thn" value="<?= $data_koperasi['masuk_thn']; ?>" required>
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