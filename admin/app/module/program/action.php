<?php 

if (isset($url[1])) {
    if (hapusData($url[1]) > 0) {
        echo "
             <script>
                document.location.href='" . BASE_URL . "programs';
            </script> ";
    }
}
function hapusData($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM programs WHERE id_program=$id");

    return mysqli_affected_rows($koneksi);
}