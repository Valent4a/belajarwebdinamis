<?php
$nama_lengkap = "Valentino Fausta Huarang Agung";
$kelas = "XI RPL";
$nomor_absen = 5;
$nilai_angka = 80;
$hobi = ["Scroll Tiktok", "Koding", "Bermain Musik"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nama_lengkap; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            line-height: 1.6;
        }
        .container {
            max-width: 500px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }
        .lulus {
            color: green;
            font-weight: bold;
        }
        .remedial {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Biodata & Penilaian Dinamis</h2>
        <p><strong>Nama Lengkap:</strong> <?php echo $nama_lengkap; ?></p>
        <p><strong>Kelas:</strong> <?php echo $kelas; ?></p>
        <p><strong>Nomor Absen:</strong> <?php echo $nomor_absen; ?></p>
        <p><strong>Nilai Angka:</strong> <?php echo $nilai_angka; ?></p>
        <p><strong>Status:</strong> 
            <?php 
            if ($nilai_angka >= 75) {
                echo '<span class="lulus">Lulus</span>';
            } else {
                echo '<span class="remedial">Remedial</span>';
            }
            ?>
        </p>

        <hr>

        <h3>Daftar Hobi</h3>
        <ul>
            <?php 
            for ($i = 0; $i < count($hobi); $i++) {
                echo "<li>" . $hobi[$i] . "</li>";
            }
            ?>
        </ul>
    </div>

</body>
</html>