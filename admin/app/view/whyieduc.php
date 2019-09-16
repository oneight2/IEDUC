<?php 
if(!isset($_SESSION['status'])){
  header("Location: ".BASE_URL."login");
  exit;
  }
  include_once "app/module/whyieduc/list.php";
  include_once "app/module/whyieduc/action.php";
 ?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Pengelolaan Section WHY IEDUC</div>
  <div class="card-body">
  	<form action=""method="post">
  	<textarea name="deskripsi" id="editor"><?= $why['deskripsi'] ?></textarea>
  	<button class="btn btn-primary" type="submit" name="updateWhyIEDUC">Simpan</button>
  	</form>
  </div>
</div>