<?php
class Users extends Model{
   public function __construct(){
      parent::__construct();
      $this->_table = 'tb_pelanggan';
   }
}