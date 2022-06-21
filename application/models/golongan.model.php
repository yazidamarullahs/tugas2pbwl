<?php
class Golongan extends Model{
   public function __construct(){
      parent::__construct();
      $this->_table = 'tb_golongan';
   }
}