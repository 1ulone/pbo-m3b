<?php

include('koneksi.php');
$database->Update($_POST['nisn'],$_POST['nama_lengkap'],$_POST['alamat'],$_POST['id_siswa']);

?>
