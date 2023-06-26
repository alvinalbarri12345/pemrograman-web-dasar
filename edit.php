<?php
// Mengedit data
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$id'");
    $data = mysqli_fetch_assoc($query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Edit Data</h2>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>

        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester" value="<?php echo $data['semester']; ?>" required>

        <label for="sks_teori">SKS Teori:</label>
        <input type="number" id="sks_teori" name="sks_teori" value="<?php echo $data['sks_teori']; ?>" required>

        <label for="sks_praktikum">SKS Praktikum:</label>
        <input type="number" id="sks_praktikum" name="sks_praktikum" value="<?php echo $data['sks_praktikum']; ?>" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" value="<?php echo $data['jurusan']; ?>" required>

        <button type="submit" name="submit">Update Data</button>
    </form>
</body>
</html>
