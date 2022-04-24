
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

<BR>
      <div style="text-align:center">
      <h3>LAPORAN REKAP GAJI</h3>
            Periode : <?php 
            
            if($bulan=='01') {
                echo "Januari";
            } else if ($bulan=='02') {
                echo "Februari";
            } else if ($bulan=='03') {
                echo "Maret";
            } else if ($bulan=='04') {
                echo "April";
            } else if ($bulan=='05') {
                echo "Mei";
            } else if ($bulan=='06') {
                echo "Juni";
            } else if ($bulan=='07') {
                echo "Juli";
            } else if ($bulan=='08') {
                echo "Agustus";
            } else if ($bulan=='09') {
                echo "September";
            } else if ($bulan=='10') {
                echo "Oktober";
            } else if ($bulan=='11') {
                echo "November";
            } else if ($bulan=='12') {
                echo "Desember";
            }
            ?> <?= $tahun; ?><BR><BR>
        </div>
        <table border="0" width="100%">
            <tr><td width="100px"></td><td>
        <table id="table">
            <thead>
                <tr>
                    
                    <th scope="col" style="width:20px;">No.</th>
                    <th scope="col" style="width:150px;text-align:center;">NIP</th>
                    <th scope="col" style="width:150px;text-align:center;">Nama</th>
                    <th scope="col" style="width:150px;text-align:center;">Jabatan</th>
                    <th scope="col" style="width:150px;text-align:center;">Masuk</th>
                    <th scope="col" style="width:150px;text-align:center;">Alpha</th>
                    <th scope="col" style="width:150px;text-align:center;">Ijin</th>
                </tr>
                
            </thead>
            <tbody>
            <?php 
            // $warnaGenap="#FFFFFF";
            // $warnaGanjil="CEF6F5";
                $no=1;
                foreach($dataLaporan as $data) : 
                // if ($no % 2 == 0) $warna = $warnaGenap;
                // else $warna = $warnaGanjil;
                ?>
                <tr>
                    
                    <!-- <td style="border:0;width:50px;"></td> -->
                    <td scope="row"><?=$no; ?></td>
                    <td scope="row"><?= $data['nip']; ?></td>
                    <td scope="row"><?= $data['nama']; ?></td>
                    <td scope="row"><?= $data['nama_jabatan']; ?></td>
                    <td scope="row"><?= $data['masuk']; ?></td>
                    <td scope="row"><?= $data['alpha']; ?></td>
                    <td scope="row"><?= $data['ijin']; ?></td>
                    <!-- <td style="border:0;width:50px;"></td> -->
                </tr>
                <?php 
                    $no++;
                    endforeach; ?>
            </tbody>
        </table>

                </td><td width="100px"></td></tr></table>





           

      </div>
  </div>
</div>
  

<?php //$this->endSection(); ?>

<br><br>