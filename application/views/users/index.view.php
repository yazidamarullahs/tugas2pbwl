<h4 class="mt-2">Data User</h4>
<hr>
<a class="btn btn-success" href="<?= BASE_PATH ?>/users/add"><i class="oi oi-plus"></i> Tambah</a>

<div class="table-responsive mt-3">
<table class="table table-striped table-hover table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>Email</th>
         <th>Password</th>
         <th>Nama</th>
         <th>Alamat</th>
         <th>No. HP</th>
         <th>Kode Pos</th>
         <th>Role</th>
         <th>Aktif</th>
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
         <td><?= $r['user_email'] ?></td>
         <td><?= $r['user_password'] ?></td>
         <td><?= $r['user_nama'] ?></td>
         <td><?= $r['user_alamat'] ?></td>
         <td><?= $r['user_hp'] ?></td>
         <td><?= $r['user_pos'] ?></td>
         <td><?= $r['user_role'] ?></td>
         <td><?= $r['user_aktif'] ?></td>
         
         <td>
            <a class="btn btn-sm btn-info" href="<?= BASE_PATH ?>/users/edit/<?= $r['user_id'] ?>"> <i class="oi oi-pencil"></i> Edit </a>
            <a class="btn btn-sm btn-danger" href="<?= BASE_PATH ?>/users/delete/<?= $r['user_id'] ?>"> <i class="oi oi-trash"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>