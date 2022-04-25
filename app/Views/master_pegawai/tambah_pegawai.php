
<?= $this->extend('cms/index'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-7"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                INPUT DATA PEGAWAI
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/simpan_pegawai'); ?>" method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                    <input type="text" class="form-control form-control-sm" name="nama" required>
                  </div>
                  <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" class="form-select form-select-sm">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div> -->
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIP</label>
                    <input type="text" class="form-control form-control-sm" name="nip" required>
                  </div>
                  <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <input type="text" class="form-control form-control-sm" name="jabatan">
                  </div> -->
                  <div class="col-md-8">
                    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
                    <!-- <input type="text" class="form-control form-control-sm" name="status"> -->
                    
                      <label for="exampleInputJabatan" class="form-label">Jabatan</label>
                      <select class="form-select form-select-sm" id="InputForJabatan" name="jabatan" required>
                        <option value="">=== Pilih jabatan karyawan ===</option>
                        <option>Pegawai Kantor</option>
                        <option>Pegawai Gudang</option>
                        <option>Pegawai Sales</option>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan jabatan karyawan
                      </div>
            

                  </div><br>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <!-- <input type="text" class="form-control form-control-sm" name="alamat"> -->
                    <textarea name="alamat" class="form-control form-control-sm" id="InputForAddress" rows="2"></textarea>
                  </div>
                  <div class="col-md-5">
                    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
                    <!-- <input type="text" class="form-control form-control-sm" name="status"> -->
                    
                      <label for="exampleInputStatus1" class="form-label">Status</label>
                      <select class="form-select form-select-sm" id="InputForStatus" name="status" required>
                        <option value=""></option>
                        <option>Menikah</option>
                        <option>Belum Menikah</option>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan status karyawan
                      </div>
            

                  </div><br>
                  


                  <div class="col-md-8">
                    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
                    <!-- <input type="text" class="form-control form-control-sm" name="status"> -->
                    
                      <label for="exampleInputStatus1" class="form-label">Keikutsertaan BPJS</label>
                      <select class="form-select form-select-sm" id="InputForStatus" name="bpjs" required>
                        <option value="">=== Pilih ikut BPJS / tidak ===</option>
                        <option>Ikut</option>
                        <option>Tidak Ikut</option>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan status karyawan
                      </div>
            

                  </div>

                  <br><br>
                  <button type="submit" class="btn btn-sm btn-primary" style="width:150px;">Simpan</button>
                  <input type="reset" class="btn btn-sm btn-danger" style="width:150px;" value="Reset">
                </form>

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>