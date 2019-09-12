<?php 
if (isset($_POST["updateProfil"])) {
    if (editProfil($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "profil';
            </script>
        ";
    }
}
function editProfil($data)
{
    global $koneksi;
    $deskripsi = addslashes( $data["deskripsi"]);

   
    $query = "UPDATE profil
                SET  deskripsi='$deskripsi'";
        
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}