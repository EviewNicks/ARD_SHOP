<!--Mengoneksikan database project_1 -->
<?php
$connection = mysqli_connect('localhost', 'root', '', 'project_1');

if (mysqli_connect_errno()) {
    echo " Koneksi database mysqli gagal!! : ". mysqli_connect_error();
}
?>