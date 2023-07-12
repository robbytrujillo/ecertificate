<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsertifikat";

$no_registrasi = $_POST['no_registrasi'];
$nama = $_POST['nama'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "UPDATE peserta SET nama='$nama' WHERE no_registrasi='$no_registrasi'";
if ($conn->query($sql) === TRUE) {
    echo "Data peserta berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
