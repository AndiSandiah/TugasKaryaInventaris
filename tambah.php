<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tes.css">
</head>

<body class="bgcolor">
    <div class="Background">    
        <img src="Asset/Tabel_1.png" alt="Tabel 1">

    </div>

    <div class="judul">
    <img src="Asset/barang.png">
    </div>
    <form action="simpan.php" method="POST">
    <div class="input"> 

            <img src="Asset/NamaBarang_2.png" alt="tambah Button">
            <input type="text" name="namaBarang" require><br>

            <img src="Asset/Jumlah_2.png" alt="tambah Button">
            <input type="number" name="jumlah" require><br>

            <img src="Asset/Barangbaik_1.png" alt="tambah Button">
            <input type="number" name="kondisiBaik" require><br>

            <img src="Asset/Barangburuk_2.png" alt="tambah Button">
            <input type="number" name="kondisiBuruk" require><br>
                           
    </div>
    <div class="tombol">
    <button type="submit"><img src="Asset/simpan.png"></button>
</div>
    <div class="tombol2">
    <button type="reset"><img src="Asset/reset.png"></button>       
</div>
</form>
</body>

</html>