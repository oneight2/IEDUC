<?php 
 if (isset($_POST["tambahClient"])) {
    if (tambahClient($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "clients';
            </script>
        ";
    }
}
if (isset($url[1])) {
    if (hapusClient($url[1]) > 0) {
        echo "
             <script>
                document.location.href='" . BASE_URL . "clients';
            </script> ";
    }
}
function hapusClient($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM clients WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}
function tambahClient($data)
{
    global $koneksi;
    $gambar = uploadClients();

    $query = "INSERT INTO clients
                VALUES
                ('','$gambar')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function uploadClients()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu !!!');
            </script>";
        return false;
    }

    //validasi apakah yang di upload adalah gambar
    $extensiGambarValid = ['jpg', 'jpeg', 'png'];
    $extensiGambar = explode('.', $namaFile);
    $extensiGambar = strtolower(end($extensiGambar));

    if (!in_array($extensiGambar, $extensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar');
            </script>";
        return false;
    }

    if ($ukuranFile > 10000000) {
        echo "<script>
                alert('gambar yang anda masukan terlalu besar');
            </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensiGambar;

    move_uploaded_file($tmpName, '../img/clients/' . $namaFileBaru);
    return $namaFileBaru;
}