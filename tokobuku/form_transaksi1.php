<?php
require "koneksi.php";

$id_transaksi = $_GET["id_transaksi"] ?? 0 ;

if ($id_transaksi > 0) {
    $sql = "SELECT * FROM tb_transaksi  WHERE id_transaksi = '$id_transaksi'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)):
        $id_transaksi = $row['id_transaksi'];
        $id_pelanggan = $row['id_pelanggan'];
        $id_buku = $row['id_buku'];
        $jumlah = $row['jumlah'];
        $harga_saat_ini = $row['harga_saat_ini'];
        $total_pembayaran = $row['total pembayaran'];
    endwhile;
    $form_action = 'edit_transaksi.php';
    $title = "Edit Data transaksi";
}
else {
    $id_transaksi = '';
    $id_pelanggan = '';
    $id_buku = '';
    $jumlah = '';
    $harga_saat_ini = '';
    $total_pembayaran = '';
    $form_action = 'insert_transaksi.php';
    $title = "Tambah Data transaksi";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi</title>
</head>
<body>
    <nav>
        <ul>
        <li><a href="welcome.php">Beranda</a></li>
        <li><a href="data_buku.php">Data Buku</a></li>
        <li><a href="data_pelanggan.php">Data Pelanggan</a></li>
        <li><a href="data_transaksi.php">Data Transaksi</a></li>
    </ul>
    </nav>

    <h2 style="margin-bottom:30px"><?=$title ?></h2>
    <form action="<?=$form_action ?>" method="post">
    <input type="hidden" name="id_transaksi" value="<?=$id_transaksi ?>">
    <label for="id_pelanggan">Id Pelanggan</label>
    <input type="text" name="id_pelanggan" value="<?=$id_pelanggan ?>">
    <label for="id_buku">Id Buku</label>
    <input type="text" name="id_buku" value="<?=$id_buku ?>">
    <label for="jumlah">Jumlah</label>
    <input type="text" name="jumlah" value="<?=$jumlah ?>">
    <label for="harga_saat_ini">Harga Saat Ini</label>
    <input type="text" name="harga_saat_ini" value="<?=$harga_saat_ini ?>">
    <label for="total_pembayaran">total_pembayaran</label>
    <input type="text" name="total_pembayaran" value="<?=$total_pembayaran ?>">
    <input type="submit" value="simpan"/>

    </form>

</body>
</html>