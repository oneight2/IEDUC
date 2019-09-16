<?php 
if (isset($url[2])) {
     $foto=$url[2];
 }
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
    global $koneksi,$foto;
    $target ="../img/carousel/$foto";
    unlink($target);
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
    global $koneksi;
    
    $jumlah = count($_FILES['gambar']['name']);
        if ($jumlah > 0) {
            for ($i=0; $i < $jumlah; $i++) { 
                $file_name = $_FILES['gambar']['name'][$i];
                $tmp_name = $_FILES['gambar']['tmp_name'][$i];
               
                //validasi apakah yang di upload adalah gambar
                $extensiGambarValid = ['jpg', 'jpeg', 'png'];
                $extensiGambar = explode('.', $file_name);
                $extensiGambar = strtolower(end($extensiGambar));

                 if (!in_array($extensiGambar, $extensiGambarValid)) {
                        echo "<script>
                                alert('yang anda upload bukan gambar');
                            </script>";
                        return false;
                    }

                $namaFileBaru = uniqid();
                $namaFileBaru .= '.';
                $namaFileBaru .= $extensiGambar;                         
                move_uploaded_file($tmp_name, "../img/carousel/".$namaFileBaru);
                mysqli_query($koneksi,"INSERT INTO carousel VALUES('','$namaFileBaru')");
            }
         
        }

    return mysqli_affected_rows($koneksi);
}