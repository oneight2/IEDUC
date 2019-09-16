<?php 
$id=$url[1];
if (isset($_POST["updateData"])) {
    if (updateData($_POST) > 0) {
        echo "
            <script>
                alert('Datatelah disimpan');
                document.location.href='" . BASE_URL . "programs';
            </script>
        ";
    }
}
function updateData($data)
{
    global $koneksi;
    global $id;
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = addslashes($data["deskripsi"]);
   	if (isset($_FILES)) {
   			$gambar = uploadFoto();
   			$query = "UPDATE program
                SET judul='$judul', deskripsi='$deskripsi', foto='$gambar' WHERE id_program=$id";
   	}elseif(!isset($_FILES)){
   			$query = "UPDATE program
                SET judul='$judul', deskripsi='$deskripsi'  WHERE id_program=$id";
            
   	} 
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function uploadFoto()
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

    move_uploaded_file($tmpName, '../img/programs/' . $namaFileBaru);
    return $namaFileBaru;
}