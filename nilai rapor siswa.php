<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <!-- Ganti 'Nama Lengkap Anda' dengan nama Anda -->
    <title>Rapor Nilai - Nama Lengkap Anda</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px 0; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        .footer-row { font-weight: bold; background-color: #e9ecef; }
    </style>
</head>
<body>

<?php
// 1. Array Multidimensi Mata Pelajaran & Nilai
$rapor = [
    ["mapel" => "Matematika", "nilai" => 85],
    ["mapel" => "Bahasa Indonesia", "nilai" => 90],
    ["mapel" => "Bahasa Inggris", "nilai" => 78],
    ["mapel" => "Produktif PHP", "nilai" => 92]
];

// 2. Fungsi Kustom Menghitung Predikat
function hitungPredikat($nilai) {
    if ($nilai >= 85) {
        return "A (Sangat Baik)";
    } elseif ($nilai >= 75) {
        return "B (Baik)";
    } elseif ($nilai >= 60) {
        return "C (Cukup)";
    } else {
        return "D (Kurang - Remedial)";
    }
}

// 3. Menghitung Rata-rata Nilai
$totalNilai = 0;
$jumlahMapel = count($rapor);

foreach ($rapor as $item) {
    $totalNilai += $item['nilai'];
}

$rataRata = $totalNilai / $jumlahMapel;
?>

<h2>Rekap Rapor Nilai Siswa</h2>
<table>
    <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
        <th>Nilai Angka</th>
        <th>Predikat Huruf</th>
    </tr>
    <?php $no = 1; foreach ($rapor as $item): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $item['mapel']; ?></td>
        <td><?= $item['nilai']; ?></td>
        <td><?= hitungPredikat($item['nilai']); ?></td>
    </tr>
    <?php endforeach; ?>
    <tr class="footer-row">
        <td colspan="2">Rata-Rata Nilai</td>
        <td colspan="2"><?= number_format($rataRata, 2); ?></td>
    </tr>
</table>

</body>
</html>