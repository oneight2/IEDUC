<?php 
if(!isset($_SESSION['status'])){
  header("Location: ".BASE_URL."login");
  exit;
  }
	include_once 'app/module/testimoni/list.php';
	include_once 'app/module/testimoni/action.php';
 ?>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Pengelolaan Video Testimoni</div>
  <div class="card-body">
  	<form action=""method="post">
  		<div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Masukan iframe Link video" required="required" name="video1" value="<?= urlencode($testimoni['video1']) ?>">
              <label for="inputEmail">Masukan Iframe Link Video 1</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Masukan iframe Link video" required="required" name="video2" value="<?= urlencode($testimoni['video2']) ?>">
              <label for="inputEmail">Masukan Iframe Link Video 2</label>
            </div>
          </div>
          <button class="btn btn-primary" name="updateVideo">Simpan</button>
  	</form>
  </div>
</div>