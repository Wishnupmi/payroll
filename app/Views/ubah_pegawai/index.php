
<?= $this->extend('cms/index_update'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-7"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                Ubah Data Pegawai
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/tambah_pegawai/update'); ?>" method="POST">
                <input type="hidden" name="kode" value="<?= $data_pegawai['id_pegawai']; ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pegawai</label>
                    <input type="text" class="form-control form-control-sm" name="nama" value="<?= $data_pegawai['nama']; ?>" required>
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
                    <input type="text" class="form-control form-control-sm" name="nip" value="<?= $data_pegawai['nip']; ?>" required>
                  </div>
                  <!-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <input type="text" class="form-control form-control-sm" name="jabatan" value="<?= $data_pegawai['jabatan']; ?>" >
                  </div> -->
                  <div class="col-md-8">
                    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
                    <!-- <input type="text" class="form-control form-control-sm" name="status"> -->
                    
                      <label for="exampleInputJabatan" class="form-label">Jabatan</label>
                      <select class="form-select form-select-sm" id="InputForJabatan" name="jabatan" required>
                        <option value="<?= $data_pegawai['jabatan']; ?>"><?= $data_pegawai['jabatan']; ?></option>
                        <option>=== Pilih jabatan karyawan ===</option>
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
                    <!-- <input type="text" class="form-control form-control-sm" name="alamat" value="<?= $data_pegawai['alamat']; ?>"> -->
                    <textarea name="alamat" class="form-control form-control-sm" id="InputForAddress" rows="2" value="<?= $data_pegawai['alamat']; ?>"><?= $data_pegawai['alamat']; ?></textarea>
                </div>
                  <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Status</label>
                    <input type="text" class="form-control form-control-sm" name="status" value="<?= $data_pegawai['status']; ?>">
                  </div> -->

                  <div class="col-md-5">
                    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
                    <!-- <input type="text" class="form-control form-control-sm" name="status"> -->
                    
                      <label for="exampleInputStatus1" class="form-label">Status</label>
                      <select class="form-select form-select-sm" id="InputForStatus" name="status" required>
                        <option value="<?= $data_pegawai['status']; ?>"><?= $data_pegawai['status']; ?></option>
                        <option value="">=== Pilih status nikah ===</option>
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
                    
                      <label for="exampleInputJabatan" class="form-label">Keikutsertaan BPJS</label>
                      <select class="form-select form-select-sm" id="InputForJabatan" name="pbjs" required>
                        <option value="<?= $data_pegawai['status_bpjs']; ?>"><?php if($data_pegawai['status_bpjs']=='1') { echo "Ikut"; } else { echo "Tidak ikut"; } ?></option>
                        <option value="">=== Pilih ikut BPJS / tidak ===</option>
                        <option value="1">Ikut</option>
                        <option value="2">Tidak Ikut</option>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan jabatan karyawan
                      </div>
            

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