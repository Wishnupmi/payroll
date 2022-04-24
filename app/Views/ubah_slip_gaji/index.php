
<?= $this->extend('cms/index_update'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-12"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                Ubah Data Gaji
              </div>
              <div class="card-body">
                


              <form action="<?= base_url('/public/index.php/tambah_slip_gaji/update'); ?>" method="POST" class="row g-3">
              <input type="text" name="kode" value="<?= $data_absen['id_data_absen']; ?>">
  <div class="col-md-3">
      <label for="exampleInputEmail1" class="form-label">Nip</label>
      <input type="text" class="form-control form-control-sm" name="nip" value="<?= $data_absen['nip']; ?>" required>
  </div>
  <div class="col-md-9">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <input type="text" class="form-control form-control-sm" name="nama" value="<?= $data_absen['nama']; ?>" required>
  </div>
  <div class="col-12">
      <label for="exampleInputStatus1" class="form-label">Jabatan</label>
      <select class="form-select form-select-sm" id="jabatan" name="jabatan" required>
          <option value="<?= $data_absen['jabatan']; ?>" selected disabled><?= $data_absen['jabatan']; ?></option>
          <option value="">-- Pilih Jabatan --</option>
          <option value="Pegawai Tetap">Pegawai Tetap</option>
          <option value="Sales">Sales</option>
          <option value="Gudang">Gudang</option>
      </select>
      <div class="invalid-feedback">
        Pilihan jabatan
      </div>
  </div>
  <div class="col-4">
      <label for="exampleInputEmail1" class="form-label">Masuk</label>
      <input type="number" class="form-control form-control-sm" name="masuk" value="<?= $data_absen['masuk']; ?>" required>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Tidak Masuk</label>
      <input type="number" class="form-control form-control-sm" name="tidak_masuk" value="<?= $data_absen['tidak_masuk']; ?>" required>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Gaji Pokok</label>
      <input type="number" class="form-control form-control-sm" name="gaji_pokok" value="<?= $data_absen['gaji_pokok']; ?>" required>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Uang Transport</label>
      <input type="number" class="form-control form-control-sm" name="uang_transport" value="<?= $data_absen['uang_transport']; ?>" required>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Uang Makan</label>
      <input type="number" class="form-control form-control-sm" name="uang_makan" value="<?= $data_absen['uang_makan']; ?>" required>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Tunjangan Kawin</label>
      <input type="number" class="form-control form-control-sm" name="tunjangan_kawin" value="<?= $data_absen['tunjangan_kawin']; ?>" required>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Potongan</label>
      <input type="number" class="form-control form-control-sm" name="potongan" value="<?= $data_absen['potongan']; ?>" required>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Pinjaman</label>
      <input type="number" class="form-control form-control-sm" name="pinjaman" value="<?= $data_absen['pinjaman']; ?>" required>
  </div>
  <div class="col-md-4">
      <label for="exampleInputEmail1" class="form-label">Total Gaji</label>
      <input type="number" class="form-control form-control-sm" name="total_gaji" value="<?= $data_absen['total_gaji']; ?>" required>
  </div>

  <div class="col-12">
  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
  </div>
</form>





                <!-- <form action="<?= base_url('/public/index.php/tambah_slip_gaji/update'); ?>" method="POST">
                <input type="hidden" name="kode" value="<?= $data_absen['id_data_absen']; ?>">
                <div class="col-md-12">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-sm" name="nama" value="<?= $data_absen['nama']; ?>" required>
                  </div><br>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Nip</label>
                    <input type="text" class="form-control form-control-sm" name="nip" value="<?= $data_absen['nip']; ?>" required>
                  </div><br>

                  <div class="col-md-8">
                      <label for="exampleInputStatus1" class="form-label">Jabatan</label>
                      <select class="form-select form-select-sm" id="jabatan" name="jabatan" required>
                        <option value="<?= $data_absen['jabatan']; ?>" selected disabled><?= $data_absen['jabatan']; ?></option>
                        
                      </select>
                      <div class="invalid-feedback">
                        Pilihan jabatan
                      </div>
            
                  </div><br>

                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Masuk</label>
                    <input type="number" class="form-control form-control-sm" name="masuk" value="<?= $data_absen['masuk']; ?>" required>
                  </div><br>
                  
                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Tidak Masuk</label>
                    <input type="number" class="form-control form-control-sm" name="tidak_masuk" value="<?= $data_absen['tidak_masuk']; ?>" required>
                  </div><br>
                  
                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Gaji Pokok</label>
                    <input type="number" class="form-control form-control-sm" name="gaji_pokok" value="<?= $data_absen['gaji_pokok']; ?>" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Uang Transport</label>
                    <input type="number" class="form-control form-control-sm" name="uang_transport" value="<?= $data_absen['uang_transport']; ?>" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Uang Makan</label>
                    <input type="number" class="form-control form-control-sm" name="uang_makan" value="<?= $data_absen['uang_makan']; ?>" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Tunjangan Kawin</label>
                    <input type="number" class="form-control form-control-sm" name="tunjangan_kawin" value="<?= $data_absen['tunjangan_kawin']; ?>" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Potongan</label>
                    <input type="number" class="form-control form-control-sm" name="tunjangan_kawin" value="<?= $data_absen['potongan']; ?>" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Pinjaman</label>
                    <input type="number" class="form-control form-control-sm" name="tunjangan_kawin" value="<?= $data_absen['pinjaman']; ?>" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Total Gaji</label>
                    <input type="number" class="form-control form-control-sm" name="tunjangan_kawin" value="<?= $data_absen['total_gaji']; ?>" required>
                  </div>

                  <br><br>
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </form> -->

                  

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>