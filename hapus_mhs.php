<?php
include 'connection.php';

$Id = $_GET['Id'];
$query = "DELETE FROM mahasiswa WHERE Id = '$Id';";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}
