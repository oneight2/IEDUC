<?php 
	include_once "../../function/function.php";
	$id = $_GET['id'];
	$detail = query("SELECT * FROM register WHERE id= $id")[0];

	
 ?>
 <div class="modal-body ajax">
 	<div class="row">
 		<div class="col-5">
 			<p><b>Name</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['nama'] ?>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-5">
 			<p><b>Gender</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['gender'] ?>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-5">
 			<p><b>Birth date</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['tgl_lahir'] ?>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-5">
 			<p><b>Email</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['email'] ?>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-5">
 			<p><b>Whatsapp</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['nomor_handphone'] ?>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-5">
 			<p><b>Program</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['program'] ?>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-5">
 			<p><b>Type Program</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['tipe'] ?>
 		</div>
 	</div>
 	
 	<div class="row">
 		<div class="col-5">
 			<p><b>Address</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['alamat'] ?>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-5">
 			<p><b>Register date</b></p>
 		</div>
 		<div class="col-7">
 		<?=  $detail['tgl_daftar'] ?>
 		</div>
 	</div>

 </div>