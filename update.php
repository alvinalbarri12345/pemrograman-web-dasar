<?php
// Memproses update data
include 'config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $sks_teori = $_POST['sks_teori'];
    $sks_praktikum = $_POST['sks_praktikum'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa SET nama='$nama', semester='$semester', sks_teori='$sks_teori', sks_praktikum='$sks_praktikum', jurusan='$jurusan' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate data. <a href='index.php'>Kembali</a>";
    }
}
?>
