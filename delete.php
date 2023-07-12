<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsertifikat";

$no_registrasi = $_POST['no_registrasi'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "DELETE FROM peserta WHERE no_registrasi = $no_registrasi";
if ($conn->query($sql) === TRUE) {
    echo "Peserta berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
