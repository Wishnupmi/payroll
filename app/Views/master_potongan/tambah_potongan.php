
<?= $this->extend('cms/index'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-7"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                INPUT DATA POTONGAN GAJI
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/simpan_potongan'); ?>" method="POST">
                  <!-- <div class="mb-3">
                    <label for="exampleInputJenis1" class="form-label">Jenis Potongan</label>
                    <input type="text" class="form-control form-control-sm" name="jenis_potongan" required>
                  </div> -->

                  <div class="col-md-8">
                      <label for="exampleInputJenisPotongan" class="form-label">Jenis Potongan</label>
                      <select class="form-select form-select-sm" id="InputForJenisPotongan" name="jenis_potongan" required>
                        <option value="">=== Pilih jenis potongan ===</option>
                        <option>Ijin</option>
                        <option>Alpha</option>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan Jenis Potongan
                      </div>
            
                  </div>

                  <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" class="form-select form-select-sm">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div> -->
                  
                  <br>
                  <div class="col-md-5">
                    <label for="exampleInputJumlah1" class="form-label">Jumlah</label>
                    <input type="number" class="form-control form-control-sm" name="jumlah" required>
                  </div>

                  
                  
               
                 
                  <br><br>
                  <button type="submit" class="btn btn-sm btn-primary" style="width:120px;">Simpan</button>&nbsp;
                  <input type="reset" class="btn btn-sm btn-danger" style="width:120px;" value="Reset">
                </form>

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>