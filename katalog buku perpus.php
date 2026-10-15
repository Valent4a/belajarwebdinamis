<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Buku - Valentino Fausta</title>
    <style>
        table { border-collapse: collapse; width: 65%; margin: 20px 0; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<?php
$katalogBuku = [
    ["judul" => "Pemrograman Web PHP", "penulis" => "Budi Raharjo", "tahun" => 2022, "stok" => 5],
    ["judul" => "Algoritma & Struktur Data", "penulis" => "Rinaldi Munir", "tahun" => 2020, "stok" => 0],
    ["judul" => "Belajar Laravel 10", "penulis" => "Eko Kurniawan", "tahun" => 2023, "stok" => 3],
    ["judul" => "Basis Data Relasional", "penulis" => "Abdul Kadir", "tahun" => 2021, "stok" => 0]
];

function cekStatusStok($jumlahStok) {
    if ($jumlahStok > 0) {
        return '<span style="color: green; font-weight: bold;">Tersedia (Stok: ' . $jumlahStok . ')</span>';
    } else {
        return '<span style="color: red; font-weight: bold;">Habis Dipinjam</span>';
    }
}
?>

<h2>Katalog Buku Perpustakaan</h2>
<table>
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
        <th>Status Ketersediaan</th>
    </tr>
    <?php $no = 1; foreach ($katalogBuku as $buku): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $buku['judul']; ?></td>
        <td><?= $buku['penulis']; ?></td>
        <td><?= $buku['tahun']; ?></td>
        <td><?= cekStatusStok($buku['stok']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>