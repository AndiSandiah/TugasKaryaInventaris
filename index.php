<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="beranda.css">
    <title>Document</title>
</head>
<body class="bgcolor">
    <div class="Background">
        <img src="Asset/Tabel_2.png" alt="Tabel 1">
    </div>
    <div class="tambah">
        <a href="tambah.php">
            <img src="Asset/tambah.png" alt="tambah Button">
        </a>
    </div>
    <div class="judul">
        <img src="Asset/inventaris.png" alt="tambah Button">
    </div>

    <div class="tabel">
  
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo "<p style='color: red;'>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']); }

        if (isset($_SESSION['message'])) {
            echo "<p style='color: green;'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']); 
        }
        ?>

        <h1></h1>
        <table border="1" cellpadding="10">
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Jumlah</td>
                <td>Kondisi BAIK</td>
                <td>Kondisi BURUK</td>
                <td>AKSI</td>
            </tr>
            <tbody>
                <?php
       
                if (!isset($_SESSION['inventaris'])) {
                    $_SESSION['inventaris'] = [];
                }
                $no = 1;
                foreach ($_SESSION['inventaris'] as $id => $row) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['namaBarang']; ?></td>
                    <td><?php echo $row['jumlah']; ?></td>
                    <td><?php echo $row['kondisiBaik']; ?></td>
                    <td><?php echo $row['kondisiBuruk']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $id; ?>" onclick="return confirm('Yakin ingin mengedit data')">Edit</a>
                        <a href="hapus.php?id=<?php echo $id; ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
