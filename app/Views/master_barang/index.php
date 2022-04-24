
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

                <h3>Master Barang</h3>
                <br>
                <a href="<?= base_url('/public/index.php/tambah_barang'); ?>" class="btn btn-sm btn-primary">Tambah</a>
                <hr>
                <table class="table table-striped table-bordered" id="table_id" style="width:100%;">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Users</th>
                    <th scope="col">Kelamin</th>
                    <th scope="col">Username</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no=1;
                    foreach($tb_user as $data) : ?>
                    <tr>
                        <th scope="row"><?=$no; ?></th>
                        <td><?= $data['nm_users']; ?></td>
                        <td><?= $data['kelamin_users']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td>
                            <a href="<?= base_url('/public/index.php/tambah_barang/ubah/'.$data['id_users']); ?>" class="btn btn-sm btn-info">Ubah</a>
                            <a href="<?= base_url('/public/index.php/tambah_barang/delete/'.$data['id_users']); ?>" class="btn btn-sm btn-danger">Hapus</a>
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
