<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// namespace App\Controllers;

// class dashboard extends BaseController {
	
// 	public function index(){
// 		$session = session();
//         echo "Welcome back, ".$session->get('username');		
// 		// return view('cms/beranda');
//         // return view('welcome_message');
// 	}
	
// }

namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends Controller
{
	
    public function index()
    {
        $session = session();
        // echo "Welcome back, ".$session->get('user_name');

		return view('cms/beranda');
    }
}