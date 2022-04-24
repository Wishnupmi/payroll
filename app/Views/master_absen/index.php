
<?= $this->extend('cms/index'); ?>
<?= $this->section('content'); ?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

<style>
    /* .dataTables_wrapper .dataTables_filter {
    float: none;
    text-align: right;
} */
/* Ensure that the demo table scrolls */
th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        margin: 0 auto;
    }
 
    div.container {
        width: 
        100%;
    }


    .dataTables_filter {
     display: none;
}
.dataTables_wrapper .dataTables_info,
.dataTables_wrapper .dataTables_paginate {
float: left;
text-align: right;
padding-top: 0.25em;
}
</style>

    <div class="container px-5 py-5">
        <div class="row">
            <div class="col-md-10 mx-auto table-responsive">

                <h3>Master Data Absensi</h3>
                <br>
                <a href="<?= base_url('/public/index.php/tambah_absen'); ?>" class="btn btn-sm btn-primary">Tambah Data Absensi</a>



<br><br>
                <div class="card col-md-12">
              <div class="card-header">
                Pencarian Tanggal
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/tambah_absen/cari'); ?>" method="POST">
                <div class="col-md-3">
                  <p><label for="start">Periode :</label></p>

<input type="month" id="periode" name="periode" min="2022-04" required>
</div>
                  
                 
                  <br>
                  <button type="submit" class="btn btn-sm btn-primary">Cari</button>
                </form>

              </div>
            </div>


                <hr>
                Cari : <input type="text" id="searchbox">
                <br><br>
                <table class="table table-sm table-bordered table-striped table-responsive" id="table_id" style="width:100%;">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nip</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Masuk</th>
                    <th scope="col">Alpha</th>
                    <th scope="col">Ijin</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach($data_absen as $data) : ?>
                    <tr>
                        <th scope="row"><?=$no; ?></th>
                        <td><?= $data['nip']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['nama_jabatan']; ?></td>
                        <td><?= $data['masuk']; ?></td>
                        <td><?= $data['alpha']; ?></td>
                        <td><?= $data['ijin']; ?></td>
                        <td>
                            <a href="<?= base_url('/public/index.php/tambah_absen/ubah/'.$data['id_data_absen']); ?>" class="btn btn-sm btn-info">Ubah</a>
                            <a href="<?= base_url('/public/index.php/tambah_absen/delete/'.$data['id_data_absen']); ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                    $no++;
                    endforeach; ?>
                </tbody>
                </table>
                <br><br>
               
                
            </div>
        </div>
    </div>
  



    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            // $('#table_id').DataTable();

    //         $('#table_id').DataTable( {
    //     "dom": '<"top"i>lt<"bottom"flp><"clear">'
    // } );

    var dataTable = $('#table_id').dataTable();
    $("#searchbox").keyup(function() {
        dataTable.fnFilter(this.value);
    });  


        } );

        
        // $('#table_id').dataTable( {
        //     "columnDefs": [
        //         { type: "phoneNumber", targets: 0 }
        //     ]
        // } );
    </script>

<?= $this->endSection(); ?>
