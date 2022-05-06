
<?php //$this->extend('cms/index_update'); ?>
<?php //$this->section('content'); ?>

<style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-12"> 

<div style="text-align:center">
            <h3> Slip Gaji Pegawai</h3>
        </div>
        <table id="table">
            <!-- <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Harga Jual</th>
                    <th>Terjual</th>
                    <th>Tanggal Transaksi</th>
                </tr>
            </thead> -->
            <tbody>
                <tr>
                    <td rowspan="14" style="border:0;width:50px;"></td>
                    <td scope="row" style="width:150px;">Nama</td>
                    <td scope="row" style="width:10px;">:</td>
                    <td><?= $data_absen['nama']; ?></td>
                    <td rowspan="14" style="border:0;width:50px;"></td>
                </tr>
                <tr>
                    <td scope="row">Nip</td>
                    <td scope="row">:</td>
                    <td><?= $data_absen['nip']; ?></td>
                </tr>
                <tr>
                    <td scope="row">Jabatan</td>
                    <td scope="row">:</td>
                    <td><?= $data_absen['nama_jabatan']; ?></td>
                </tr>
                <tr>
                    <td scope="row">Masuk</td>
                    <td scope="row">:</td>
                    <td><?= $data_absen['masuk']; ?></td>
                </tr>
                <tr>
                    <td scope="row">Ijin</td>
                    <td scope="row">:</td>
                    <td><?= $data_absen['ijin']; ?></td>
                </tr>
                <tr>
                    <td scope="row">Alpha</td>
                    <td scope="row">:</td>
                    <td><?= $data_absen['alpha']; ?></td>
                </tr>
                <tr>
                    <td scope="row">Gaji Pokok</td>
                    <td scope="row">:</td>
                    <td><?php echo "Rp " . number_format($data_absen['gaji_pokok'], 2, ",", "."); ?></td>
                </tr>
                <tr>
                    <td scope="row">Uang Transport</td>
                    <td scope="row">:</td>
                    <td><?php echo "Rp " . number_format($data_absen['uang_transport'], 2, ",", "."); ?></td>
                </tr>
                <tr>
                    <td scope="row">Uang Makan</td>
                    <td scope="row">:</td>
                    <td><?php echo "Rp " . number_format($data_absen['uang_makan'], 2, ",", "."); ?></td>
                </tr>
                <tr>
                    <td scope="row">Tunjangan Kawin</td>
                    <td scope="row">:</td>
                    <td><?php echo "Rp " . number_format($data_absen['tunjangan_kawin'], 2, ",", "."); ?></td>
                </tr>
                <tr>
                    <td scope="row">Potongan Alpha</td>
                    <td scope="row">:</td>
                    <td><?php echo "Rp " . number_format($data_absen['potongan_alpha'], 2, ",", "."); ?></td>
                </tr>
                <tr>
                    <td scope="row">Potongan Ijin</td>
                    <td scope="row">:</td>
                    <td><?php echo "Rp " . number_format($data_absen['potongan_ijin'], 2, ",", "."); ?></td>
                </tr>
                <tr>
                    <td scope="row">Potongan BPJS</td>
                    <td scope="row">:</td>
                    <td><?php echo "Rp " . number_format($data_absen['bpjs'], 2, ",", "."); ?></td>
                </tr>
                <tr>
                    <td scope="row">Total Gaji</td>
                    <td scope="row">:</td>
                    <td><?php echo "Rp " . number_format($data_absen['total_gaji'], 2, ",", "."); ?></td>
                </tr>
            </tbody>
        </table>
            <!-- <div class="card col-md-10 mx-auto">
              <div class="card-header">
                FORM LAPORAN SLIP GAJI
              </div>
              <div class="card-body">
              
                <form action="<?= base_url('/public/index.php/tambah_slip_gaji/update'); ?>" method="POST">
                <input type="hidden" name="kode" value="<?= $data_absen['id_data_absen']; ?>">
                <div class="col-md-12">
                    <label for="exampleInputEmail1" class="form-label">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?= $data_absen['nama']; ?></label>
                    
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?= $data_absen['nip']; ?></label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?= $data_absen['jabatan']; ?></label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Masuk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?= $data_absen['masuk']; ?> hari.</label>
                  </div>
                  
                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Alpha &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?= $data_absen['alpha']; ?> hari.</label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Ijin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?= $data_absen['ijin']; ?> hari.</label>
                  </div>
                  
                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Gaji Pokok &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?php echo "Rp " . number_format($data_absen['gaji_pokok'], 2, ",", "."); ?></label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Uang Transport &nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?php echo "Rp " . number_format($data_absen['uang_transport'], 2, ",", "."); ?></label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Uang Makan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?php echo "Rp " . number_format($data_absen['uang_makan'], 2, ",", "."); ?></label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Tunjangan Kawin : </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?php echo "Rp " . number_format($data_absen['tunjangan_kawin'], 2, ",", "."); ?></label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Potongan Alpha &nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?php echo "Rp " . number_format($data_absen['potongan_alpha'], 2, ",", "."); ?></label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Potongan Ijin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?php echo "Rp " . number_format($data_absen['potongan_ijin'], 2, ",", "."); ?></label>
                  </div>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Total Gaji &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
                    <label for="exampleInputEmail1" class="form-label">&nbsp;<?php echo "Rp " . number_format($data_absen['total_gaji'], 2, ",", "."); ?></label>
                  </div>

                  <br><br>
                </form>

                  

              </div>
            </div> -->


      </div>
  </div>
</div>
  

<?php //$this->endSection(); ?>

<br><br>