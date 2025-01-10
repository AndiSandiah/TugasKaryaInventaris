<?php
session_start();

if (!isset($_SESSION['inventaris'])) {
    $_SESSION['inventory'] = [];
}

$id = $_GET['id'];
$row = $_SESSION['inventaris'][$id];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Inventory</title>
    <link rel="stylesheet" href="edit.css">
</head>

<body class="bgcolor">
    <div class="Background">    
        <img src="Asset/Tabel_1.png" alt="Tabel 1">

    </div>

    <div class="judul">
    <img src="Asset/edit.png">
    </div>

    <div class="edit">
    <form action="update.php" method="POST">
        
        <input type="hidden" name="id" value="<?= $id; ?>"><br>
        
        <img src="Asset/NamaBarang_2.png" alt="tambah Button">
        <input type="text" name="namaBarang" value="<?= $row['namaBarang']; ?>" required><br>
        
        <img src="Asset/Jumlah_2.png" alt="tambah Button">
        <input type="number" name="jumlah" value="<?= $row['jumlah']; ?>" required><br>
        
        <img src="Asset/Barangbaik_1.png" alt="tambah Button">
        <input type="number" name="kondisiBaik" value="<?= $row['kondisiBaik']; ?>" required><br>
        
        <img src="Asset/Barangburuk_2.png" alt="tambah Button">
        <input type="number" name="kondisiBuruk" value="<?= $row['kondisiBuruk']; ?>" required><br>
        <button type="submit">Update</button>
        <a href="index.php">Kembali</a>
    </form>
    </div>
</body>
</html>