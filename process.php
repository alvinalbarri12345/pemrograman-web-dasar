<?php
// Memproses form input
include 'config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $sks_teori = $_POST['sks_teori'];
    $sks_praktikum = $_POST['sks_praktikum'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (nama, semester, sks_teori, sks_praktikum, jurusan) VALUES ('$nama', '$semester', '$sks_teori', '$sks_praktikum', '$jurusan')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data. <a href='index.php'>Kembali</a>";
    }
}
?>
