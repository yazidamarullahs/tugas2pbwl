<h4 class="mt-2">Data Golongan</h4>
<hr>
<a class="btn btn-success" href="<?= BASE_PATH ?>/golongan/add"><i class="oi oi-plus"></i> Tambah</a>

<div class="table-responsive mt-3">
<table class="table table-striped table-hover table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>Kode Golongan</th>
         <th>Nama Golongan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $no = 0;
   foreach($data as $r){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $r['gol_kode'] ?></td>
         <td><?= $r['gol_nama'] ?></td>
         
         <td>
            <a class="btn btn-sm btn-info" href="<?= BASE_PATH ?>/golongan/edit/<?= $r['gol_id'] ?>"> <i class="oi oi-pencil"></i> Edit </a>
            <a class="btn btn-sm btn-danger" href="<?= BASE_PATH ?>/golongan/delete/<?= $r['gol_id'] ?>"> <i class="oi oi-trash"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>