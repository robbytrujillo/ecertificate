<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbsertifikat";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM peserta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["no_registrasi"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td><button class='btn btn-info' onclick='openUpdateForm(" . $row["no_registrasi"] . ", \"" . $row["nama"] . "\")'>Edit</button>  "; 
        echo "<button class='btn btn-danger' onclick='hapusPeserta(" . $row["no_registrasi"] . ")'>Hapus</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada peserta</td></tr>";
}

$conn->close();
?>
