<?php
if(!isset($_SESSION['status'])){
  header("Location: ".BASE_URL."login");
  exit;
  }
include_once "app/module/program/actionEdit.php";
$view_programs = query("SELECT * FROM program WHERE id_program=$id")[0];
$no = 1;
?>
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Edit Programs</div>
  <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-8">
          <input type="file" class="mb-3 browser-default"   name="gambar" value="<?= $view_programs['foto'] ?>" required>
          <div class="form-group">
            <div class="form-label-group mb-3">
              <input type="text" class="form-control" id="judul" name="judul" value="<?= $view_programs['judul'] ?>">
              <label for="judul">Nama Program</label>
            </div>
          </div>
          <textarea name="deskripsi" id="editor" ><?= $view_programs['deskripsi'] ?></textarea>
          <button name="updateData" class="btn btn-primary mt-3">Simpan</button>
        </div>
        <div class="col-md-4 text-center">
          <img src="<?= BASE_URL .'../img/programs/'.$view_programs['foto'] ?>" style="max-width: 250px" class="mb-3">
        </div>
      </div>
    </form>
  </div>
</div>