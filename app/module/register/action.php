<?php

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {

        echo "
            <script>
            	alert('Success');
                document.location.href='" . BASE_URL . "beranda';
            </script>
        ";
    }else {
        echo "
            <script>
                document.location.href='" . BASE_URL . "artikel/1/error';
            </script>
        ";
    }
}

function register($data)
{
    global $koneksi;
    $name = addslashes(htmlspecialchars($data["name"]));
    $birthDate = $data["birthDate"];
    $gender = $data["gender"];
    $email = htmlspecialchars($data["email"]);
    $number = $data["number"];
    $programs = $data["programs"];
    $tipe = $data['tipe']
    $address = addslashes($data["address"]);
    $tgl_daftar= date('Y-m-d');

    //query insert data
    $query = "INSERT INTO register
                VALUES
                ('','$name','$birthDate','$gender','$email','$number','$programs','$tipe','$address','$tgl_daftar')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}