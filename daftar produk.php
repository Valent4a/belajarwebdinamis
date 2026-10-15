<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Valentino Fausta</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px 0; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #ff4f4f; }
    </style>
</head>
<body>

<?php
$produk = [
    ["nama" => "Laptop Asus", "harga" => 8500000, "kategori" => "Elektronik"],
    ["nama" => "Mouse Wireless", "harga" => 150000, "kategori" => "Aksesoris"],
    ["nama" => "Keyboard Mechanical", "harga" => 450000, "kategori" => "Aksesoris"]
];
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>

<h2>Daftar Produk Toko</h2>
<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
    </tr>
    <?php 
    $no = 1;
    foreach ($produk as $item): 
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $item['nama']; ?></td>
        <td><?= $item['kategori']; ?></td>
        <td><?= formatRupiah($item['harga']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>