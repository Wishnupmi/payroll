
<?= $this->extend('cms/index_update'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-7"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                Ubah Data Potongan Gaji
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/tambah_potongan/update'); ?>" method="POST">
                  <input type="hidden" name="kode" value="<?= $data_potongan['id_potongan']; ?>">
                  <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis</label>
                    <input type="text" class="form-control form-control-sm" name="jenis_potongan" value="<?= $data_potongan['jenis_potongan']; ?>">
                  </div> -->

                  <div class="col-md-8">
                      <label for="exampleInputJenisPotongan" class="form-label">Jenis Potongan</label>
                      <select class="form-select form-select-sm" id="InputForJenisPotongan" name="jenis_potongan" required>
                        <option value="<?= $data_potongan['jenis_potongan']; ?>"><?= $data_potongan['jenis_potongan']; ?></option>
                        <option value="">=== Pilih jenis potongan ===</option>
                        <option>Ijin</option>
                        <option>Alpha</option>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan Jenis Potongan
                      </div>
            
                  </div><br>
                  <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" class="form-select form-select-sm">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div> -->
                  
                  <div class="col-md-5">
                    <label for="exampleInputJumlah1" class="form-label">Jumlah</label>
                    <input type="number" class="form-control form-control-sm" name="jumlah" value="<?= $data_potongan['jumlah']; ?>" required>
                  </div>
                 
                  <br>
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </form>

                  

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>