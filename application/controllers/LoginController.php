<?php
class LoginController extends Controller{
//Method untuk menampilkan halaman login   
   public function index(){
      $this->view('login');
   }

//Method untuk mengecek username dan password yang dikirim dari halaman login
   public function check(){ 
	  $this->model('admin');
	  
      $username = $this->validate($_POST['username']);
      $password = $this->validate($_POST['password']);
      
      $data = $this->admin->select()->where([
		    ['username','=',"'$username'"],
		    ['password','=',"'$password'"]		
	     ])->limit(1)->get();
      
      $jml = $this->admin->count();
            echo json_encode($data);
      if($jml>0){
         $_SESSION['username'] = $data[0]['username'];
         $_SESSION['password'] = $data[0]['password'];
         
         $this->redirect('dashboard');
      }else{
         $view = $this->view('login');
         $view->bind('msg', 'Username atau Password salah!');
      }
   }

//Method untuk logout
   public function logout(){
      session_start();
      session_destroy();
      $this->redirect('login');
   }
}