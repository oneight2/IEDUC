<?php
if(!isset($_SESSION['status'])){
  header("Location: ".BASE_URL."login");
  exit;
  }
include_once "app/module/carousel/list.php";
include_once "app/module/carousel/action.php";
$no = 1;
?>
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Pengelolaan Carousel</div>
  <div class="card-body">
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahData">Tambah Carousel</button>
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
        </tfoot>
        <tbody>
          <?php foreach ($carousel as $row): ?>
          
          <tr>
            <td><?= $no++ ?></td>
            <td><img src="<?= BASE_URL.'../img/carousel/'.$row['gambar'] ?>" alt="" style="max-width: 100px;"></td>
            <td>
              <a href="<?= BASE_URL.'carousel/'.$row['id'].'/'.$row['gambar'] ?>" class="btn btn-danger" onclick="confirm('Yakin hapus?')"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Carousel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action=""method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <input type="file" class="" id="" name="gambar[]" required multiple>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="tambahData">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>