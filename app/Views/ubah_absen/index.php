
<?= $this->extend('cms/index_update'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-12"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                FORM UPDATE ABSENSI
              </div>
              <div class="card-body">
                <?php
//               foreach ($data_gaji->getResult() as $baris)
// {
//         echo $baris->gaji;
// }
              ?>
                
                













                <form action="<?= base_url('/public/index.php/tambah_absen/update'); ?>" method="POST" class="row g-3">
                <input type="hidden" name="kode" value="<?= $data_absen['id_data_absen']; ?>" required>
                <div class="col-md-3">
                  <p><label for="start">Periode :</label></p>

<!-- <input type="month" id="periode" name="periode" min="2022-04" required> -->
<input type="month" id="periode" name="periode"
       value="<?= $data_absen['tahun']; ?>-<?= $data_absen['bulan']; ?>" required>
</div>




                  <div class="col-md-9">
                  </div>
                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Nip</label>
                    <input type="text" class="form-control form-control-sm" id="nip" name="nip" value="<?= $data_absen['nip']; ?>" readonly="" required>
                  </div>
                
                  <div class="col-md-9">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-sm" name="nama" value="<?= $data_absen['nama']; ?>" required>
                  </div>
                  
                  

                  <div class="col-12">
                    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
                    <!-- <input type="text" class="form-control form-control-sm" name="status"> -->
                    
                      <label for="exampleInputJabatan" class="form-label">Jabatan</label>
                      <select class="form-select form-select-sm" id="jabatan" name="jabatan" required>
                        <option value="<?= $data_absen['jabatan']; ?>"><?= $data_absen['nama_jabatan']; ?></option>
                        <option value="">=== Pilih jabatan karyawan ===</option>
                        <?php 
                          foreach($data_gaji as $data) : ?>
                          <option value="<?= $data['id_data_gaji']; ?>"><?= $data['jabatan']; ?></option>
                          <?php 
                          endforeach; 
                        ?>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan jabatan karyawan
                      </div>
            

                  </div><br>
                  <div class="col-md-12">
                    <input type="hidden" class="form-control form-control-sm" id="jabatan2" name="jabatan2" value="<?= $data_absen['nama_jabatan']; ?>" required>
                  </div>

                  <!-- <div class="col-12">
                      <label for="exampleInputJabatan" class="form-label">Tidak Masuk</label>
                      <select class="form-select form-select-sm" id="jenis_potongan" name="jenis_potongan" required>
                        <option value="0">=== Pilih jenis absen ===</option>
                        <?php 
                          foreach($data_potongan as $data) : ?>
                          <option value="<?= $data['id_potongan']; ?>"><?= $data['jenis_potongan']; ?></option>
                          <?php 
                          endforeach; 
                        ?>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan jabatan karyawan
                      </div>
            

                  </div><br> -->
                
                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Masuk</label>
                    <input type="number" class="form-control form-control-sm" id="masuk" name="masuk" value="<?= $data_absen['masuk']; ?>" required>
                  </div>
                  <br>
                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Alpha</label>
                    <input type="number" class="form-control form-control-sm" id="alpha" name="alpha" value="<?= $data_absen['alpha']; ?>" readonly="" required>
                  </div>
                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Ijin</label>
                    <input type="number" class="form-control form-control-sm" id="ijin" name="ijin" value="<?= $data_absen['ijin']; ?>" readonly="" required>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">Gaji Pokok</label>
                      <input type="number" class="form-control form-control-sm" id="gaji_pokok" name="gaji_pokok" value="<?= $data_absen['gaji_pokok']; ?>" readonly="" required>
                    </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">Uang Transport</label>
                      <input type="number" class="form-control form-control-sm" id="uang_transport" name="uang_transport" value="<?= $data_absen['uang_transport']; ?>" readonly="" required>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">Uang Makan</label>
                      <input type="number" class="form-control form-control-sm" id="uang_makan" name="uang_makan" value="<?= $data_absen['uang_makan']; ?>" readonly="" required>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">Tunjangan Kawin</label>
                      <input type="number" class="form-control form-control-sm" id="tunjangan_kawin" name="tunjangan_kawin" value="<?= $data_absen['tunjangan_kawin']; ?>" readonly="" required>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">Potongan Alpha</label>
                      <input type="number" class="form-control form-control-sm" id="potongan_alpha" name="potongan_alpha" value="<?= $data_absen['potongan_alpha']; ?>" readonly="">
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">Potongan Ijin</label>
                      <input type="number" class="form-control form-control-sm" id="potongan_ijin" name="potongan_ijin" value="<?= $data_absen['potongan_ijin']; ?>" readonly="">
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">Sewa Motor</label>
                      <input type="number" class="form-control form-control-sm" id="sewa_motor" name="sewa_motor" readonly="" value="<?= $data_absen['sewa_motor']; ?>" required>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">BPJS</label>
                      <input type="number" class="form-control form-control-sm" id="bpjs" name="bpjs" value="<?= $data_absen['bpjs']; ?>" readonly="" required>
                  </div>
                  <div class="col-md-4">
                      <label for="exampleInputEmail1" class="form-label">Total Gaji</label>
                      <input type="number" class="form-control form-control-sm" id="total_gaji" name="total_gaji" value="<?= $data_absen['total_gaji']; ?>" readonly="" required>
                  </div>

                  <div class="col-12">
                  </div>        
                  <div class="col-12">
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                  </div>
                  
                </form>










              </div>
            </div>


      </div>
  </div>
</div>
<script>
         $(function() {
        //     $( "#datepicker-13" ).datepicker({
        //       viewMode: 'years',
		    //  format: 'mm-yyyy'
        // });
        //     $( "#datepicker-13" ).datepicker("show");
        //  });

         $("#periode").datepicker(
		    {viewMode: 'years',
		     format: 'mm-yyyy'
		});
    $( "#periode" ).datepicker("show");
  });
      </script>  
<script>
	$('#jabatan').on('change', (event) => {
    // alert(event.target.value);
    
    var jbtn  = $("#jabatan").val();
    
    if (jbtn==1) {
        // document.getElementById("alpha").disabled = false;
        // document.getElementById("ijin").disabled = false;
        document.getElementById('alpha').readOnly = false;
        document.getElementById('ijin').readOnly = false;

      } else if (jbtn==3) {
        // document.getElementById("alpha").readonly = true;
        // document.getElementById("ijin").readonly = true;
        // document.getElementById('ijin').readOnly = false;

        document.getElementById('alpha').readOnly = true;
        document.getElementById('ijin').readOnly = true;

        $('#potongan_alpha').val("0");
        $('#bpjs').val("");
        $('#alpha').val("0");
        $('#ijin').val("0");
         
      } else if (jbtn==4) {
        
        document.getElementById('alpha').readOnly = true;
        document.getElementById('ijin').readOnly = true;

        $('#potongan_alpha').val("0");
        $('#bpjs').val("");
        $('#alpha').val("0");
        $('#ijin').val("0");
        // document.getElementById('jenis_potongan').selectedOptions[0].text= '=== Pilih jenis absen ===';
      }  
    

		getGaji(event.target.value).then(data_gaji => {
			$('#gaji_pokok').val(data_gaji.gaji);
			$('#uang_transport').val(data_gaji.uang_transport);
			$('#uang_makan').val(data_gaji.uang_makan);
      $('#tunjangan_kawin').val(data_gaji.tunjangan_kawin);
      $('#sewa_motor').val(data_gaji.sewa_motor);
      $('#jabatan2').val(data_gaji.jabatan);
      $('#bpjs').val(data_gaji.bpjs);
      var hasil = ""
      $('#total_gaji').val(hasil);

      // var gj_pokok  = parseInt($("#gaji_pokok").val());
      // var tunj_kawin  = parseInt($("#tunjangan_kawin").val());
      // var hasil = gj_pokok + tunj_kawin;
      
      // var uang_trans  = parseInt($("#uang_transport").val());
      // var uang_mkn  = parseInt($("#uang_makan").val());
      // var hasil = uang_trans + uang_mkn;

      // $('#total_gaji').val(hasil);
		});
	});
  
  $('#nip').on('change', (event) => {
      // alert(event.target.value);
      $('#nama').val("");
      getNip(event.target.value).then(data_pegawai => {
        $('#nama').val(data_pegawai.nama);
        // alert(data_pegawai.nama);
      });  
  });

  $('#masuk').on('change', (event) => {
    // alert(event.target.value);
      var jbtn  = $("#jabatan").val();
      var masuk  = parseInt($("#masuk").val());
      var alpha  = parseInt($("#alpha").val());
      var ijin  = parseInt($("#ijin").val());
      var uang_trans  = parseInt($("#uang_transport").val());
      var uang_mkn  = parseInt($("#uang_makan").val());
      var tunj_kawin  = parseInt($("#tunjangan_kawin").val());
      var gj_pokok  = parseInt($("#gaji_pokok").val());
      var sewa  = parseInt($("#sewa_motor").val());
      var potongan_alpha  = parseInt($("#potongan_alpha").val());
      var potongan_ijin  = parseInt($("#potongan_ijin").val());
      var bpjs  = parseInt($("#bpjs").val());
      
      if (jbtn==1) {
        var hasil = (masuk * (uang_trans + uang_mkn)) + gj_pokok + tunj_kawin - ((alpha*potongan_alpha)+(ijin*potongan_ijin)) - bpjs;
      } else if (jbtn==3) {
        var hasil = masuk * (uang_trans + uang_mkn + gj_pokok + sewa);
        
      } else if (jbtn==4) {
        var hasil = masuk * (uang_trans + uang_mkn + gj_pokok);  
      }  
      
      

      if (masuk<=0) {
          $('#total_gaji').val("");
      } else {
          $('#total_gaji').val(hasil);
      }

		
	});
  

  $('#alpha').on('change', (event) => {
    // alert(event.target.value);
      
        
      getPotongan('2').then(data_potongan => {
        var jbtn  = $("#jabatan").val();
        var masuk  = parseInt($("#masuk").val());
        var alpha  = parseInt($("#alpha").val());
        var ijin  = parseInt($("#ijin").val());
        var uang_trans  = parseInt($("#uang_transport").val());
        var uang_mkn  = parseInt($("#uang_makan").val());
        var tunj_kawin  = parseInt($("#tunjangan_kawin").val());
        var gj_pokok  = parseInt($("#gaji_pokok").val());
        var sewa  = parseInt($("#sewa_motor").val());
        var potongan_alpha  = parseInt($("#potongan_alpha").val());
        var potongan_ijin  = parseInt($("#potongan_ijin").val());
        var bpjs  = parseInt($("#bpjs").val());
        var total_gaji  = parseInt($("#total_gaji").val());

        if (alpha<=0) {
            $('#potongan_alpha').val("0");
            $('#total_gaji').val("");
        } else {
            $('#potongan_alpha').val(data_potongan.jumlah);
       
        

        if (jbtn==1) {
          var hasil = (masuk * (uang_trans + uang_mkn)) + gj_pokok + tunj_kawin - ((alpha*data_potongan.jumlah)+(ijin*potongan_ijin)) - bpjs;
        } else if (jbtn==3) {
          var hasil = (masuk * (uang_trans + uang_mkn + gj_pokok + sewa)) - (alpha*data_potongan.jumlah)-(ijin*potongan_ijin) - bpjs;
          
        } else if (jbtn==4) {
          var hasil = (masuk * (uang_trans + uang_mkn + gj_pokok)) - (alpha*data_potongan.jumlah)-(ijin*potongan_ijin) - bpjs;  
        }  
        
        // alert(masuk*(uang_trans + uang_mkn + tunj_kawin + gj_pokok) - alpha*pot_alpha);
        if (masuk!='') {
          $('#total_gaji').val(hasil);
        }
      }


		  });
	});



  $('#ijin').on('change', (event) => {
    // alert(event.target.value);
      
        
      getPotongan('3').then(data_potongan => {
        var jbtn  = $("#jabatan").val();
        var masuk  = parseInt($("#masuk").val());
        var alpha  = parseInt($("#alpha").val());
        var ijin  = parseInt($("#ijin").val());
        var uang_trans  = parseInt($("#uang_transport").val());
        var uang_mkn  = parseInt($("#uang_makan").val());
        var tunj_kawin  = parseInt($("#tunjangan_kawin").val());
        var gj_pokok  = parseInt($("#gaji_pokok").val());
        var sewa  = parseInt($("#sewa_motor").val());
        var potongan_alpha  = parseInt($("#potongan_alpha").val());
        var potongan_ijin  = parseInt($("#potongan_ijin").val());
        var bpjs  = parseInt($("#bpjs").val());
        var total_gaji  = parseInt($("#total_gaji").val());

        if (ijin<=0) {
            $('#potongan_ijin').val("0");
            $('#total_gaji').val("");
        } else {
            $('#potongan_ijin').val(data_potongan.jumlah);
        
        

       
        
        if (jbtn==1) {
          var hasil = (masuk * (uang_trans + uang_mkn + tunj_kawin)) + gj_pokok - ((alpha*potongan_alpha)+(ijin*data_potongan.jumlah)) - bpjs;
        } else if (jbtn==3) {
          var hasil = (masuk * (uang_trans + uang_mkn + gj_pokok + sewa)) - (alpha*potongan_alpha)-(ijin*data_potongan.jumlah) - bpjs;
          
        } else if (jbtn==4) {
          var hasil = (masuk * (uang_trans + uang_mkn + gj_pokok)) - (alpha*potongan_alpha)-(ijin*data_potongan.jumlah) - bpjs;  
        }
        
        
        if (masuk!='') {
          $('#total_gaji').val(hasil);
        }

      }

		  });
	});

	async function getGaji(id) {
		let response = await fetch('../../api/home/' + id)
		let data = await response.json();

		return data;
	}

  async function getPotongan(id) {
		let response = await fetch('../../api/potongan/' + id)
		let data = await response.json();

		return data;
	}

  async function getNip(id) {
		let response = await fetch('api/nip/' + id)
		let data = await response.json();

		return data;
	}
  
</script>
<?= $this->endSection(); ?>

<br><br>