<?php 
if (isset($_POST["updateWhyIEDUC"])) {
    if (updateWhyIEDUC($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "whyieduc';
            </script>
        ";
    }
}
function updateWhyIEDUC($data)
{
    global $koneksi;
    $deskripsi = addslashes( $data["deskripsi"]);

   
    $query = "UPDATE why_ieduc
                SET  deskripsi='$deskripsi'";
        
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}