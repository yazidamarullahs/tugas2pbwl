<?php
  $data = $data[0];
?>
<h4 class="mt-2">Edit Golongan</h4>
<hr>
<form method="post" action="<?= BASE_PATH ?>/golongan/update" enctype="multipart/form-data">

   <input type="hidden" name="id" value="<?= $data['gol_id'] ?>">

   <div class="form-group row">
      <label for="gol_kode" class="col-sm-2 col-form-label">Kode Golongan</label>   
      <div class="col-sm-4">
      	<input class="form-control" type="text" id="gol_kode" name="gol_kode" value="<?= $data['gol_kode'] ?>">
     </div> 
   </div>

   <div class="form-group row">
      <label for="gol_nama" class="col-sm-2 col-form-label">Nama Golongan</label>   
      <div class="col-sm-4">
        <input class="form-control" type="text" id="gol_nama" name="gol_nama" value="<?= $data['gol_nama'] ?>">
     </div> 
   </div>


   <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
   <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
   
</form>