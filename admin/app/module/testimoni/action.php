<?php 
if (isset($_POST["updateVideo"])) {
    if (updateVideo($_POST) > 0) {
        echo "
            <script>
                document.location.href='" . BASE_URL . "testimonials';
            </script>
        ";
    }
}
function updateVideo($data)
{
    global $koneksi;
    $video1 = urldecode($data['video1']);
    $video2 = urldecode($data['video2']);

    $query = "UPDATE video
                SET video1='$video1', video2='$video2'";
                

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
