<?php 
if (isset($_POST["simpanData"])) {
    if (simpanData($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil disimpan!');
                document.location.href='" . BASE_URL . "sosial_media';
            </script>
        ";
    }
}
function simpanData($data)
{
    global $koneksi;
    $email = $data['email'];
    $gmaps = urldecode($data['gmaps']);
    $whatsapp = urldecode($data['whatsapp']);
    $facebook = urldecode($data['facebook']);
    $instagram = urldecode($data['instagram']);

    $query = "UPDATE sosial_media
                SET email='$email',no_wa='$whatsapp', facebook='$facebook', instagram='$instagram',gmaps='$gmaps'";
                

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
