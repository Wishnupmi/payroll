
<?= $this->extend('cms/index_update'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-12"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                Ubah Data Pegawai
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/tambah_gaji/update'); ?>" method="POST" class="row g-3">
                <input type="hidden" name="kode" value="<?= $data_gaji['id_data_gaji']; ?>" required>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <input type="text" class="form-control form-control-sm" name="jabatan" value="<?= $data_gaji['jabatan']; ?>" required>
                  </div>
                  <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select name="kelamin" class="form-select form-select-sm">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div> -->
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gaji</label>
                    <input type="text" class="form-control form-control-sm" name="gaji" value="<?= $data_gaji['gaji']; ?>" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Uang Makan</label>
                    <input type="number" class="form-control form-control-sm" name="uang_makan" value="<?= $data_gaji['uang_makan']; ?>" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Uang Transport</label>
                    <input type="number" class="form-control form-control-sm" name="uang_transport" value="<?= $data_gaji['uang_transport']; ?>" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Tunjangan Kawin</label>
                    <input type="text" class="form-control form-control-sm" name="tunjangan_kawin" value="<?= $data_gaji['tunjangan_kawin']; ?>" required>
                  </div><br>
                  
                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Sewa Motor</label>
                    <input type="text" class="form-control form-control-sm" name="sewa_motor" value="<?= $data_gaji['sewa_motor']; ?>" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">BPJS</label>
                    <input type="text" class="form-control form-control-sm" name="bpjs" value="<?= $data_gaji['bpjs']; ?>" required>
                  </div>

                  <div class="col-12">
                  </div>        
                  <div class="col-12">
                    <button type="submit" class="btn btn-sm btn-primary" style="width:110px;">Simpan</button>
                  </div>
                  
                </form>

                  

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>