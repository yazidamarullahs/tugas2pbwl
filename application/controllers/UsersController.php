<?php
use \application\controllers\MainController;
class UsersController extends MainController{
   function __construct(){
      parent::__construct();
      $this->model('users');
   }

   public function index(){
      $data = $this->users->select()->orderBy('user_id', 'ASC')->get();
      $this->template('users/index', $data);
   }
   
   public function add(){
      $this->template('users/add');
   }     

   public function edit($id){
      $data = $this->users->select()->where(['user_id','=', $id])->get();
      $this->template('users/edit', $data);
   }
   
   public function insert(){
      $users = $this->users->data([
         'user_email' => $_POST['user_email'],
         'user_password' => $_POST['user_password'],
         'user_nama' => $_POST['user_nama'],
         'user_alamat' => $_POST['user_alamat'],
         'user_hp' => $_POST['user_hp'],
         'user_pos' => $_POST['user_pos'],
         'user_role' => $_POST['user_role'],
         'user_aktif' => $_POST['user_aktif']

      ]);  
      $users->insert();
      $this->redirect('users/index');
   }

   public function update(){
      $users = $this->users->find($_POST['id']);
      $users->data([
         'user_email' => $_POST['user_email'],
         'user_password' => $_POST['user_password'],
         'user_nama' => $_POST['user_nama'],
         'user_alamat' => $_POST['user_alamat'],
         'user_hp' => $_POST['user_hp'],
         'user_pos' => $_POST['user_pos'],
         'user_role' => $_POST['user_role'],
         'user_aktif' => $_POST['user_aktif']
      ]);  
      $users->update();
      $this->redirect('users/index');
   }
    
   public function delete($id){
      $this->users->find($id)->delete();      
      $this->redirect('users/index');
   }
}