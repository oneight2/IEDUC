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
    <a href="app/module/register/exportRegister.php" class="btn btn-md btn-success mb-4" target="_blank">EXPORT EXCEL</a>
    <div class="table-responsive">
      <!-- <a href="<?= BASE_URL.'exportRegister' ?>" target="_blank" class="btn btn-success" >Excel</a> -->
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <!-- <th>Email</th> -->
            <th>No.Hp/Wa</th>
            <th>Program</th>
            <th>Tanggal Daftar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Gender</th>
          <!-- <th>Email</th> -->
          <th>No.Hp/Wa</th>
          <th>Program</th>
          <th>Tanggal Daftar</th>
          <th>Action</th>
        </tr>
        </tfoot>
        <tbody>
          <?php foreach ($register as $row): ?>
          
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['gender'] ?></td>
            <!-- <td><?= $row['email']  ?></td> -->
            <td><?= $row['nomor_handphone'] ?></td>
            <td><?= $row['program'] ?></td>
            <td><?= $row['tgl_daftar'] ?></td>
            <td class="text-center">
              <button class="btn btn-sm btn-primary ModalRegister" value="<?= $row['id'] ?>" data-target="#ModalRegister"  data-toggle="modal" >
              <i class="fa fa-eye"></i>
              </button>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

  <div class="modal fade" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ajax">
        <?= $id ?>
      </div>
      
    </div>
  </div>
</div>
