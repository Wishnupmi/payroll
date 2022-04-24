
<?= $this->extend('cms/index'); ?>
<?= $this->section('content'); ?>




<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<style>
    /* .dataTables_wrapper .dataTables_filter {
    float: none;
    text-align: right;
} */
</style>
    <div class="container px-5 py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">

                <h3>Master Data Koperasi</h3>
                <br>
                <a href="<?= base_url('/public/index.php/tambah_koperasi'); ?>" class="btn btn-sm btn-primary">Tambah Data Koperasi</a>
                <hr>
                <table class="table table-success table-striped" id="table_id" style="width:100%;">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Masuk Bulan</th>
                    <th scope="col">Masuk Tahun</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach($data_koperasi as $data) : ?>
                    <tr>
                        <th scope="row"><?=$no; ?></th>
                        <td><?= $data['nip']; ?></td>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['masuk_bln']; ?></td>
                        <td><?= $data['masuk_thn']; ?></td>
                        <td>
                            <a href="<?= base_url('/public/index.php/tambah_koperasi/ubah/'.$data['id_data_koperasi']); ?>" class="btn btn-sm btn-info">Ubah</a>
                            <a href="<?= base_url('/public/index.php/tambah_koperasi/delete/'.$data['id_data_koperasi']); ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                    $no++;
                    endforeach; ?>
                </tbody>
                </table>
                
               
                
            </div>
        </div>
    </div>
  



    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>

    
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();

            

        } );

        
        // $('#table_id').dataTable( {
        //     "columnDefs": [
        //         { type: "phoneNumber", targets: 0 }
        //     ]
        // } );
    </script>

<?= $this->endSection(); ?>
