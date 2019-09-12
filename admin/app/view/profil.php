<?php 
if(!isset($_SESSION['status'])){
  header("Location: ".BASE_URL."login");
  exit;
  }
  include_once "app/module/profil/list.php";
  include_once "app/module/profil/action.php";
 ?>
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
  Pengelolaan Profil</div>
  <div class="card-body">
  	<form action=""method="post">
  	<textarea name="deskripsi" id="editor"><?= $profil['deskripsi'] ?></textarea>
  	<button class="btn btn-primary" type="submit" name="updateProfil">Simpan</button>
  	</form>
  </div>
</div>