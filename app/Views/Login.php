<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Login User</title>
  </head>
  <body>
    <div class="container-fluid" class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('../../public/images/bg_login.jpg');height: 100vh;background-size: cover;">
        <div class="row justify-content-md-center">
 

        
    
 
            <div class="col-5" style="margin-top:50px;">

            <div class="card">
  <div class="card-body">

                <h2>Form Login</h2>
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><small><?= session()->getFlashdata('msg') ?></small></div>
                <?php endif;?>
                <form action="/payroll/public/index.php/login/auth" method="post">
                  
                    <div class="mb-2">
                        <label for="InputForEmail" class="form-label col-form-label-sm">Username</label>
                        <input type="text" name="username" class="form-control form-control-sm" id="InputForUsername" value="<?= set_value('username') ?>">
                    </div>
                    <div class="mb-2">
                        <label for="InputForPassword" class="form-label col-form-label-sm">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="InputForPassword">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-sm btn-primary d-grid gap-2 col-2">Login</button>
                    <input type="reset" class="btn btn-sm btn-primary d-grid gap-2 col-2" value="Reset">
                    
                    <br><br>
                    <small><small>Belum terdaftar ? <a href="register">Daftar disini</a></small></small>
                </form>
            </div>
             

            </div>
</div>


        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>