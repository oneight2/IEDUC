<?php 
  include_once "app/module/register/list.php";
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Register.xls");
  $no = 1;

 ?>
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