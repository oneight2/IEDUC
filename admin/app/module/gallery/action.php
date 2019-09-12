<?php 
 if (isset($_POST["tambahData"])) {
    if (tambahData($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!')
                document.location.href='" . BASE_URL . "gallery';
            </script>
        ";
    }
}
if (isset($url[1])) {
    if (hapusData($url[1]) > 0) {
        echo "
             <script>
                document.location.href='" . BASE_URL . "gallery';
            </script> ";
    }
}
function hapusData($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM gallery WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}
function tambahData($data)
{
    global $koneksi;
    
    $jumlah = count($_FILES['gambar']['name']);
        if ($jumlah > 0) {
            for ($i=0; $i < $jumlah; $i++) { 
                $file_name = $_FILES['gambar']['name'][$i];
                $tmp_name = $_FILES['gambar']['tmp_name'][$i];
                $tahun = htmlspecialchars($data['tahun']); 
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
                move_uploaded_file($tmp_name, "../img/gallery/".$namaFileBaru);
                mysqli_query($koneksi,"INSERT INTO gallery VALUES('','$namaFileBaru','$tahun')");
            }
         
        }

    return mysqli_affected_rows($koneksi);
}

function uploadData()
{

}