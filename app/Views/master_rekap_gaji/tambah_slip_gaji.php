
<?= $this->extend('cms/index'); ?>
<?= $this->section('content'); ?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<style>
    /* .dataTables_wrapper .dataTables_filter {
    float: none;
    text-align: right;
} */
</style>
    <div class="container px-5 py-5">
        <div class="row">
            <div class="col-md-7">



            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                FORM INPUT GAJI KARYAWAN
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/simpan_slip_gaji'); ?>" method="POST">

                  <div class="col-md-12">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-sm" name="nama" required>
                  </div><br>

                  <div class="col-md-8">
                    <label for="exampleInputEmail1" class="form-label">Nip</label>
                    <input type="text" class="form-control form-control-sm" name="nip" required>
                  </div><br>

                  <div class="col-md-8">
                    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
                    <!-- <input type="text" class="form-control form-control-sm" name="status"> -->
                    
                      <label for="exampleInputStatus1" class="form-label">Jabatan</label>
                      <select class="form-select form-select-sm" id="jabatan" name="jabatan" required>
                        <option value="" selected disabled>-- Pilih Jabatan --</option>
                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                        <option value="Sales">Sales</option>
                        <option value="Gudang">Gudang</option>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan jabatan
                      </div>
                      
            
                  </div><br>

                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Masuk</label>
                    <input type="number" class="form-control form-control-sm" name="masuk" required>
                  </div><br>
                  
                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Tidak Masuk</label>
                    <input type="number" class="form-control form-control-sm" name="tidak_masuk" required>
                  </div><br>
                  
                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Gaji Pokok</label>
                    <input type="number" class="form-control form-control-sm" name="gaji_pokok" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Uang Transport</label>
                    <input type="number" class="form-control form-control-sm" name="uang_transport" required>
                  </div><br>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Uang Makan</label>
                    <input type="number" class="form-control form-control-sm" name="uang_makan" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Tunjangan Kawin</label>
                    <input type="number" class="form-control form-control-sm" name="tunjangan_kawin" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Potongan</label>
                    <input type="number" class="form-control form-control-sm" name="potongan" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Pinjaman</label>
                    <input type="number" class="form-control form-control-sm" name="pinjaman" required>
                  </div>

                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">Total Gaji</label>
                    <input type="number" class="form-control form-control-sm" name="total_gaji" required>
                  </div>
                  
                  <br><br>
                  <button type="submit" class="btn btn-sm btn-primary" style="width:120px;">Simpan</button>
                  &nbsp;&nbsp;<input type="reset" class="btn btn-sm btn-danger" style="width:120px;" value="Reset">
                </form>

              </div>
            </div>


            
               
                
               
                
            </div>
        </div>
    </div>
  
   


    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>

    
    <script type="text/javascript">
        // $(document).ready( function () {
        //     $('#table_id').DataTable();

            

        // } );

        
        // $('#table_id').dataTable( {
        //     "columnDefs": [
        //         { type: "phoneNumber", targets: 0 }
        //     ]
        // } );
    </script>


<?= $this->endSection(); ?>
