<?php 
 if (isset($url[2])) {
     $foto=$url[2];
 }
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
    global $koneksi,$foto;
    $target ="../img/clients/$foto";
    unlink($target);
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
                move_uploaded_file($tmp_name, "../img/clients/".$namaFileBaru);
                mysqli_query($koneksi,"INSERT INTO clients VALUES('','$namaFileBaru')");
            }
         
        }

    return mysqli_affected_rows($koneksi);
}