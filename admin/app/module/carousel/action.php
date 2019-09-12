<?php 
 if (isset($_POST["tambahData"])) {
    if (tambahData($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!')
                document.location.href='" . BASE_URL . "carousel';
            </script>
        ";
    }
}
if (isset($url[1])) {
    if (hapusData($url[1]) > 0) {
        echo "
             <script>
                document.location.href='" . BASE_URL . "carousel';
            </script> ";
    }
}
function hapusData($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM carousel WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}
function tambahData($data)
{
    global $koneksi;
    $gambar = uploadData();

    $query = "INSERT INTO carousel
                VALUES
                ('','$gambar')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function uploadData()
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

    move_uploaded_file($tmpName, '../img/carousel/' . $namaFileBaru);
    return $namaFileBaru;
}