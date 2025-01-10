<?php
session_start();

if (!isset($_SESSION['inventaris'])){
    $_SESSION['inventaris'] = [];
}

$namaBarang     = $_POST['namaBarang'];
$jumlah         = $_POST['jumlah'];
$kondisiBaik    = $_POST['kondisiBaik'];
$kondisiBuruk   = $_POST['kondisiBuruk'];
if ($kondisiBaik + $kondisiBuruk != $jumlah) {
    $_SESSION['error'] = 'Jumlah kondisi barang tidak sesuai';
    header('Location: index.php');
    exit;
}
if ($jumlah < 0 || $kondisiBaik < 0 || $kondisiBuruk < 0) {
    $_SESSION['error'] = 'Tidak bisa input bilangan negatif';
    header('Location: index.php');
    exit;
}


$id = count($_SESSION['inventaris']);
$_SESSION['inventaris'][$id] = [
    'namaBarang' => $namaBarang,
    'jumlah' => $jumlah,
    'kondisiBaik' => $kondisiBaik,
    'kondisiBuruk' => $kondisiBuruk
];

header("Location:index.php");
?>
