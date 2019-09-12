<?php
if(!isset($_SESSION['status'])){
  header("Location: ".BASE_URL."login");
  exit;
  }
include_once "app/module/sosmed/list.php";
include_once "app/module/sosmed/action.php";
$no = 1;
?>
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Pengelolaan Sosial Media</div>
  <div class="card-body">
    <form action="" method="post">
      <div class="form-group">
        <div class="form-label-group mb-3">
          <input type="email" id="inputEmail" class="form-control" placeholder="Email"   name="email" value="<?= $sosmed['email'] ?>">
          <label for="inputEmail">Email</label>
        </div>
        <div class="form-label-group mb-3">
          <input type="number" id="whatsapp" class="form-control" placeholder="whatsapp"   name="whatsapp" value="<?= $sosmed['no_wa'] ?>">
          <label for="whatsapp">whatsapp</label>
        </div>
        <div class="form-label-group mb-3">
          <input type="text" id="facebook" class="form-control" placeholder="facebook"   name="facebook" value="<?= urlencode($sosmed['facebook']) ?>">
          <label for="facebook">Facebook</label>
        </div>
        <div class="form-label-group mb-3">
          <input type="text" id="instagram" class="form-control" placeholder="instagram"   name="instagram" value="<?= urlencode($sosmed['instagram']) ?>">
          <label for="instagram">Instagram</label>
        </div>
        <div class="form-label-group mb-3">
          <input type="text" id="gmaps" class="form-control" placeholder="gmaps"   name="gmaps" value="<?= urlencode($sosmed['gmaps']) ?>">
          <label for="gmaps">Gmaps</label>
        </div>
      </div>
      <div class="text-right">
        <button class="btn btn-primary" name="simpanData">Simpan</button>
      </div>
    </form>
  </div>
</div>