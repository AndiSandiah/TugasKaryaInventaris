<?php
session_start();

if (isset($_SESSION['inventaris'])) {
    $id = $_GET['id'];
    if (array_key_exists($id, $_SESSION['inventaris'])) {
        unset($_SESSION['inventaris'][$id]);
        header("Location: index.php?message=Data berhasil dihapus");
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "Tidak ada data untuk dihapus.";
}
?>