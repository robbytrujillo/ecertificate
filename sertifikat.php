<?php
require_once __DIR__ . '/vendor/autoload.php';

require_once('tcpdf/tcpdf.php');

// Mendapatkan nama untuk sertifikat
$nama = isset($_POST['namacetak']) ? $_POST['namacetak'] : 'your name will shown automatic';

// Membaca dimensi gambar template
$templatePath = 'template/sertifikat-kurban2.jpg';
$templateSize = getimagesize($templatePath);
$templateWidth = $templateSize[0];
$templateHeight = $templateSize[1];

// Membuat objek TCPDF dengan orientasi halaman lanskap dan ukuran sesuai gambar template
$pdf = new TCPDF('L', 'mm', [$templateWidth, $templateHeight], true, 'UTF-8');

// Menambahkan halaman sertifikat
$pdf->AddPage();

// Menambahkan template sertifikat berupa gambar
$templatePath = 'template/sertifikat-kurban2.jpg';
$pdf->Image($templatePath, 0, 0, $templateWidth, $templateHeight, '', '', '', false, 300, '', false, false, 0);


// Mengatur font dan ukuran teks
$pdf->SetFont('helvetica', 'B', 250); // Ubah ukuran font menjadi 250 (sesuaikan sesuai kebutuhan)

// Mengukur lebar teks
$textWidth = $pdf->GetStringWidth($nama);

// Menghitung posisi X agar teks berada di tengah
$centerX = ($templateWidth - $textWidth) / 200;

// Menghitung posisi Y agar teks berada di tengah secara vertikal
$textHeight = 30; // Asumsikan tinggi teks adalah 20 (sesuaikan sesuai kebutuhan)
$centerY = ($templateHeight - $textHeight) / 2;

// Menambahkan teks nama pada sertifikat
$pdf->SetXY($centerX, $centerY); // Menyesuaikan koordinat posisi teks
$pdf->Cell(0, $textHeight, $nama, 0, 0, 'C');

$pdf->Output('certificate-kurban.pdf', 'I');

?> 



