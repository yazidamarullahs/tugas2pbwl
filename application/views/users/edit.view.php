<?php
  $data = $data[0];
?>
<h4 class="mt-2">Edit User</h4>
<hr>
<form method="post" action="<?= BASE_PATH ?>/users/update" enctype="multipart/form-data">

   <input type="hidden" name="id" value="<?= $data['user_id'] ?>">

   <div class="form-group row">
      <label for="user_email" class="col-sm-2 col-form-label">Email</label>   
      <div class="col-sm-4">
      	<input class="form-control" type="text" id="user_email" name="user_email" value="<?= $data['user_email'] ?>">
     </div> 
   </div>

   <div class="form-group row">
      <label for="user_password" class="col-sm-2 col-form-label">Password</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="user_password" name="user_password" value="<?= $data['user_password'] ?>">
     </div> 
   </div>

   <div class="form-group row">
      <label for="user_nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="user_nama" name="user_nama" value="<?= $data['user_nama'] ?>">
     </div> 
   </div>

   <div class="form-group row">
      <label for="user_alamat" class="col-sm-2 col-form-label">Alamat</label>   
      <div class="col-sm-8">
        <textarea class="form-control" id="user_alamat" name="user_alamat" value="<?= $data['user_alamat'] ?>"></textarea>
     </div>
   </div>
   
   <div class="form-group row">
      <label for="user_hp" class="col-sm-2 col-form-label">No. HP</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="user_hp" name="user_hp" value="<?= $data['user_hp'] ?>">
     </div> 
   </div>

   <div class="form-group row">
      <label for="user_pos" class="col-sm-2 col-form-label">Kode Pos</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="user_pos" name="user_pos" value="<?= $data['user_pos'] ?>">
     </div> 
   </div>

   <div class="form-group row">
      <label for="user_role" class="col-sm-2 col-form-label">Role</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="user_role" name="user_role" value="<?= $data['user_pos'] ?>">
     </div> 
   </div>

   <div class="form-group row">
      <label for="user_aktif" class="col-sm-2 col-form-label">Aktif</label>   
      <div class="col-sm-4">   
       <input class="form-control" type="text" id="user_aktif" name="user_aktif" value="<?= $data['user_aktif'] ?>">
     </div> 
   </div>


   <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
   <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
   
</form>