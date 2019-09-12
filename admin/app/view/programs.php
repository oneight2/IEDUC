<?php
if(!isset($_SESSION['status'])){
  header("Location: ".BASE_URL."login");
  exit;
  }
include_once "app/module/program/list.php";
include_once "app/module/program/action.php";
$no = 1;
?>
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Pengelolaan Programs</div>
  <div class="card-body">
    <form action="" method="post">
      <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Program</th>
            <th>Detail</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
        <th>No</th>
            <th>Nama Program</th>
            <th>Detail</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tfoot>
        <tbody>
          <?php foreach ($programs as $row): ?>
            
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['judul'] ?></td>
            <td style="max-width: 250px;"><?= $row['deskripsi'] ?></td>
            <td><img src="<?= BASE_URL.'../img/programs/'.$row['foto']?>" style="max-width: 100px" alt=""></td>
            <td>
              <a href="<?= BASE_URL.'editPrograms/'.$row['id_program'] ?>" class="btn btn-success" >Edit</a>
              <a href="<?= BASE_URL.'programs/'.$row['id_program'] ?>" class="btn btn-danger" onclick="confirm('Yakin hapus?')">Hapus</a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
  </div>
</div>