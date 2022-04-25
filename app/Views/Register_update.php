<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Form Register</title>
  </head>
  <body class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('../../../public/images/bg_login.jpg');height: 100%;background-size: cover;">
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-5" style="margin-top:20px;">

            <div class="card">
  <div class="card-body">

                <h2>Daftar Akun</h2>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><small><?= $validation->listErrors() ?></small></div>
                <?php endif;?>
                <form action="/payroll/public/index.php/register/save" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label col-form-label-sm">Name</label>
                        <input type="text" name="name" class="form-control form-control-sm" id="InputForName" value="<?= set_value('name') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForAddress" class="form-label col-form-label-sm">Alamat</label>
                        <textarea name="alamat" class="form-control form-control-sm" id="InputForAddress" rows="2" value="<?= set_value('alamat') ?>"><?= set_value('alamat') ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label col-form-label-sm">Email address</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="col-md-8">
                    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
                    <!-- <input type="text" class="form-control form-control-sm" name="status"> -->
                    
                      <label for="exampleInputStatus1" class="form-label">Status</label>
                      <select class="form-select form-select-sm" id="InputForStatus" name="status" required>
                        <option value="">=== Status User ===</option>
                        <option>Manager</option>
                        <option>User</option>
                      </select>
                      <div class="invalid-feedback">
                        Pilihan status karyawan
                      </div>
            

                  </div><br>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label col-form-label-sm">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="InputForPassword" value="<?= set_value('password') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label col-form-label-sm">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control form-control-sm" id="InputForConfPassword" value="<?= set_value('confpassword') ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-sm btn-primary d-grid gap-2 col-2">Simpan</button>
                    <input type="reset" class="btn btn-sm btn-danger d-grid gap-2 col-2" value="Reset">
                </form>
                <br>
                    <small><small>Kembali ke Halaman LOGIN ? <a href="/payroll/public/index.php/Login">Klik disini</a></small></small>
                </div></div><br><br>
            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>