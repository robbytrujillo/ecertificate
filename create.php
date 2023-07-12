<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsertifikat";

$nama = $_POST['nama'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "INSERT INTO peserta (nama) VALUES ('$nama')";
if ($conn->query($sql) === TRUE) {
    echo "Peserta berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
