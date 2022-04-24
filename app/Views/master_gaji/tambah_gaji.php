
<?= $this->extend('cms/index'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-12"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                FORM INPUT DATA GAJI
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/simpan_gaji'); ?>" method="POST" class="row g-3">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <input type="text" class="form-control form-control-sm" name="jabatan" required>
                  </div>
                  
                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Gaji</label>
                    <input type="number" class="form-control form-control-sm" name="gaji" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Uang Makan</label>
                    <input type="number" class="form-control form-control-sm" name="uang_makan" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Uang Transport</label>
                    <input type="number" class="form-control form-control-sm" name="uang_transport" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Tunjangan Kawin</label>
                    <input type="text" class="form-control form-control-sm" name="tunjangan_kawin" required>
                  </div><br>
                  
                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Sewa Motor</label>
                    <input type="text" class="form-control form-control-sm" name="sewa_motor" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">BPJS</label>
                    <input type="text" class="form-control form-control-sm" name="bpjs" required>
                  </div>

                  <div class="col-12">
                  </div>        
                  <div class="col-12">
                    <button type="submit" class="btn btn-sm btn-primary" style="width:110px;">Simpan</button>
                    &nbsp;<input type="reset" class="btn btn-sm btn-danger" style="width:110px;" value="Reset">
                  </div>
                  
                </form>

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>