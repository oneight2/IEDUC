<?php 
  include_once "../../function/function.php";
  $register = query("SELECT * FROM register");
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=Data_Register_".date('d-m-Y').".xls");
  header("Pragma: no-cache");
  header("Expires:0");
  $no = 1;

 ?>
 <table class="table " border="1"  width="100%" cellspacing="0" style="text-align: center">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Email</th>
            <th>No.Hp/Wa</th>
            <th>Program</th>
            <th>Tipe Program</th>
            <th>Tanggal Daftar</th>
            <th>Alamat</th>
          </tr>
        </thead>
        
        <tbody>
          <?php foreach ($register as $row): ?>
            
          <tr style="text-align: center; vertical-align: middle;">
            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['email']  ?></td>
            <td><?= $row['nomor_handphone'] ?></td>
            <td><?= $row['program'] ?></td>
            <td><?= $row['tipe'] ?></td>
            <td><?= $row['tgl_daftar'] ?></td>
            <td><?= $row['alamat'] ?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>