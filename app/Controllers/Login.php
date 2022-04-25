<?php namespace App\Controllers;
 
 use CodeIgniter\Controller;
 use App\Models\UserModel;
  
 class Login extends Controller
 {
     public function index()
     {
         helper(['form']);
         echo view('login');
     } 
  
     public function auth()
     {
         $session = session();
         $model = new UserModel();
         $username = $this->request->getVar('username');
         $password = $this->request->getVar('password');
         $data = $model->where('user_name', $username)->first();
         if($data){
             $pass = $data['user_password'];
             $verify_pass = password_verify($password, $pass);
             if($verify_pass){
                 $ses_data = [
                     'user_id'       => $data['user_id'],
                     'user_name'     => $data['user_name'],
                     'user_email'    => $data['user_email'],
                     'status'        => $data['status'],
                     'logged_in'     => TRUE
                 ];
                 $session->set($ses_data);
                //  echo "Welcome back, ".$session->get('status');
                 return redirect()->to('/public/index.php/Dashboard');
             }else{
                 $session->setFlashdata('msg', 'Password Salah, Silakan ulangi lagi.');
                 return redirect()->to('/public/index.php/login');
             }
         }else{
             $session->setFlashdata('msg', 'Username tidak ditemukan');
             return redirect()->to('/public/index.php/login');
         }
     }
  
     public function logout()
     {
         $session = session();
         $session->destroy();
         return redirect()->to('/public/index.php/login');
     }
 } 