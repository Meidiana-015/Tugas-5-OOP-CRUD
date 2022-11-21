<?php
include 'connection.php';

$Id = $_POST['Id'];
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$gender = $_POST['Gender'];
$alamat = $_POST['Alamat'];
$prodi = $_POST['Prodi'];
$foto = "img1.jpg";
$email = $_POST['Email'];

$query = "UPDATE mahasiswa SET NIM = '$nim', Nama = '$nama', Gender = '$gender', Alamat = '$alamat', Prodi = '$prodi', Email = '$email' WHERE Id = '$Id' ";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}
