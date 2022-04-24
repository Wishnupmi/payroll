
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
            <h3>LAPORAN REKAP GAJI</h3>
        </div>
        <table id="table">
            <thead>
            <tr>
                    <th scope="col" style="width:20px;">No.</th>
                    <th scope="col" style="width:150px;text-align:center;">NIP</th>
                    <th scope="col" style="width:300px;text-align:center;">Nama</th>
                    <th scope="col" style="text-align:center;">Jabatan</th>
                    <th scope="col" style="width:200px;text-align:center;">Total Gaji</th>
                    </tr>
                </thead>
            </thead>
            <tbody>
            <?php 
                    $no=1;
                    foreach($data_absen as $data) : ?>
                <tr>
                <td scope="row"><?=$no; ?></td>
                    <td scope="row"><?= $data['nip']; ?></td>
                    <td scope="row"><?= $data['nama']; ?></td>
                    <td scope="row"><?= $data['nama_jabatan']; ?></td>
                    <td scope="row" style="text-align:right;"><?php echo "Rp " . number_format($data['total_gaji'], 2, ",", "."); ?></td>
                </tr>
                <?php 
                    $no++;
                    endforeach; ?>
            </tbody>
        </table>

      





           

      </div>
  </div>
</div>
  

<?php //$this->endSection(); ?>

<br><br>