<?php 
if(!isset($_SESSION['status'])){
  header("Location: ".BASE_URL."login");
  exit;
  }
  include_once "app/module/register/list.php";
  $no = 1;

 ?>
<!-- DataTables Example -->

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Rekap Data Register</div>
  <div class="card-body">
    <div class="table-responsive">
      <!-- <a href="<?= BASE_URL.'exportRegister' ?>" target="_blank" class="btn btn-success" >Excel</a> -->x
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Email</th>
            <th>No.Hp/Wa</th>
            <th>Program</th>
            <th>Tanggal Daftar</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Email</th>
            <th>No.Hp/Wa</th>
            <th>Program</th>
            <th>Tanggal Daftar</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach ($register as $row): ?>
            
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['email']  ?></td>
            <td><?= $row['nomor_handphone'] ?></td>
            <td><?= $row['program'] ?></td>
            <td><?= $row['tgl_daftar'] ?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>