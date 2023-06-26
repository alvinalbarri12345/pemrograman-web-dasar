<!DOCTYPE html>
<html>
<head>
    <title>CRUD Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Data Mahasiswa</h2>

    <!-- Form input -->
    <form action="process.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester" required>

        <label for="sks_teori">SKS Teori:</label>
        <input type="number" id="sks_teori" name="sks_teori" required>

        <label for="sks_praktikum">SKS Praktikum:</label>
        <input type="number" id="sks_praktikum" name="sks_praktikum" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required>

        <button type="submit" name="submit">Tambah Data</button>
    </form>

    <?php
    // Menampilkan data dari database
    include 'config.php';
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    ?>

    <!-- Tabel data -->
    <table>
        <tr>
            <th>Nama</th>
            <th>Semester</th>
            <th>SKS Teori</th>
            <th>SKS Praktikum</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['semester']; ?></td>
            <td><?php echo $data['sks_teori']; ?></td>
            <td><?php echo $data['sks_praktikum']; ?></td>
            <td><?php echo $data['jurusan']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $data['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
