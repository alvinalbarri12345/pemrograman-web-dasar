<?php
// Menghapus data
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = '$id'");

    if ($query) {
        header("Location: index.php");
    } else {
        echo "Gagal menghapus data. <a href='index.php'>Kembali</a>";
    }
}
?>
