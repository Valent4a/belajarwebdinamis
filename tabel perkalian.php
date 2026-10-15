<?php
$angka = 7;
$nama_lengkap = "Nama Anda Lengkap";
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
            margin: 40px;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 400px;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Tabel Perkalian <?php echo $angka; ?></h2>
        
        <table>
            <thead>
                <tr>
                    <th>Perkalian</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    $hasil = $angka * $i;
                    echo "<tr>";
                    echo "<td>{$angka} x {$i}</td>";
                    echo "<td><strong>{$hasil}</strong></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>