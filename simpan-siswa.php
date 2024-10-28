<?php
include('koneksi.php');
$database->Add($_POST['nisn'], $_POST['nama_lengkap'], $_POST['alamat']);

?>
