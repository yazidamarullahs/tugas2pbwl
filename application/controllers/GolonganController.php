<?php
use \application\controllers\MainController;
class GolonganController extends MainController{
   function __construct(){
      parent::__construct();
      $this->model('golongan');
   }

   public function index(){
      $data = $this->golongan->select()->orderBy('gol_id', 'ASC')->get();
      $this->template('golongan/index', $data);
   }
   
   public function add(){
      $this->template('golongan/add');
   }     

   public function edit($id){
      $data = $this->golongan->select()->where(['gol_id','=', $id])->get();
      $this->template('golongan/edit', $data);
   }
   
   public function insert(){
      $golongan = $this->golongan->data([
         'gol_id' => $_POST['gol_id'],
         'gol_kode' => $_POST['gol_kode'],
         'gol_nama' => $_POST['gol_nama']
      ]);  
      $golongan->insert();
      $this->redirect('golongan/index');
   }

   public function update(){
      $golongan = $this->golongan->find($_POST['id']);
      $golongan->data([
         'gol_kode' => $_POST['gol_kode'],
         'gol_nama' => $_POST['gol_nama']
      ]);  
      $golongan->update();
      $this->redirect('golongan/index');
   }
    
   public function delete($id){
      $this->golongan->find($id)->delete();      
      $this->redirect('golongan/index');
   }
}