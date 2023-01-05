<?php

include 'koneksi.php';

$npm              = $_POST['NPM'];
$nama_mahasiswa   = $_POST['Nama'];
$id_matakuliah    = $_POST['Mata_Kuliah'];

$query = "INSERT INTO presensi (npm, nama_mahasiswa, id_matakuliah)  VALUES ('$npm','$nama_mahasiswa','$id_matakuliah')";

$result = mysqli_query($conn, $query);

if($result) {
    header('location: index.php');
}
else{
    echo "data gagal ditambahkan";
}

?>