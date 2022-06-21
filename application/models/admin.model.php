<?php
class Admin extends Model{
   public function __construct(){
      parent::__construct();
      $this->_table = 'tb_admin';
   }
}