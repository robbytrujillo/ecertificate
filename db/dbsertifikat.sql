-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2023 pada 11.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsertifikat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `no_registrasi` int(4) UNSIGNED ZEROFILL NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`no_registrasi`, `nama`) VALUES
(0001, 'Raida Andini Rawandi Binti Rosdan'),
(0002, 'Harist Qashtari (Mashel Alesha)'),
(0003, 'Chairul Umam (Bu Sari)'),
(0004, 'Kel Anton Setiadi (Yasfin)'),
(0005, 'Kenzie Erdhika Ridjana'),
(0006, 'Ahmad Munif W Sekeluarga'),
(0007, 'Deswin Dzulka (Abu M Dzaky Abdillah)'),
(0008, 'Tommy  Wibisono dan Keluarga'),
(0009, 'Keluarga dr. Andika Perdani (Abu Rasyad Ibrahim Perdani)'),
(0010, 'Vinie Firstyo Terranova (Abu Fatih Rosyid)'),
(0011, 'Bapak Guntur (Abu Rania)'),
(0012, 'Riko Purwanto'),
(0013, 'Mohammad Elvin Septriadi'),
(0014, 'Sri Damayanti dan Keluarga (Ummu Evandra)'),
(0015, 'Yogi (Abu Bilqis)'),
(0016, 'Fajar Ariyanto (Alghifandy aryasatya)'),
(0017, 'Keluarga Mahmud Barkah (Umar Faiz Ardani)'),
(0018, 'Satrakayana Akhtar'),
(0019, 'Rudi Amran (Yahya Amri Abdillah)'),
(0020, 'Muhammad Khalil Harras'),
(0021, 'Keluarga Waiz Al Qarni (Wildan)'),
(0022, 'Ajiz Isnawan (Zahra Izzatunnisa)'),
(0023, 'Niko Hardiananto'),
(0024, 'Audra Ligafinza (Aisyah Azkhadina)'),
(0025, 'Burhan Festanto'),
(0026, 'Septa Cahyadiputra (Nufail)'),
(0027, 'Alfian Husin (Zafran)'),
(0028, 'Ilham Rachmat (Usaid Al Farros)'),
(0029, 'M Ammar Athaillah'),
(0030, 'Giarno (Abu Wafik)'),
(0031, 'Sihab Latopo'),
(0032, 'Alyka Raisya Delfitria'),
(0033, 'Resmayatna Prawira'),
(0034, 'Fajar Agus Riyadi (Adzkia Zafira Riyadi)'),
(0035, 'Colina Amikara'),
(0036, 'Bpk Gatot Sulandoko (Abu Muhammad Habib Muhyiddin)'),
(0037, 'Muhammad Hammam Abdillah'),
(0038, 'Keluarga Ust Alvauzi'),
(0039, 'Mohamad Arief Firmansyah'),
(0040, 'Khafidhi (Abu Tsaqif)'),
(0041, 'Dany Ramdani (Aufa Zafarani)'),
(0042, 'Fajar Agus Riyadi (Adzkia Zafira Riyadi)'),
(0043, 'Taufik Darmawan'),
(0044, 'Ariyanto Winedar'),
(0045, 'Rama Nugraha (Abu Umar Rahman)'),
(0046, 'Bobot Adi Prakoso dan Keluarga'),
(0047, 'Iskandar Zulkarnain'),
(0048, 'Amitab Dwi Sulistyanto'),
(0049, 'Kel Bagus Zukhri Fadholi'),
(0050, 'Eko Arief Budianto (Muhammad Dzaky)'),
(0051, 'Raden Addien Suherman (Abu R Cherry Khairunnisa)'),
(0052, 'Muhamad Azfar Narendra'),
(0053, 'Azka Azzami Fathan bin Achmad Zakky Rahman'),
(0054, 'Aditia Tajudin'),
(0055, 'Rizkirin Djumain'),
(0056, 'Rahmadina Djumain'),
(0057, 'Makmun Amin (Abu Keisha Maimunah)'),
(0058, 'Rusdiana (Abu Hasanul)'),
(0059, 'Muhammad Zikra Abdillah '),
(0060, 'Achmad Yulizar Yani (Abu Dzaki Azhari)'),
(0061, 'Prianto Ardi Utomo'),
(0062, 'Saarah Feriza Zaki dan Keluarga'),
(0063, 'Muhamad luthfi Iskandar (Suami Ibu Reni)'),
(0064, 'BSI'),
(0065, 'Azka Azzami Fathan bin Achmad Zakky Rahman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`no_registrasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `no_registrasi` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
