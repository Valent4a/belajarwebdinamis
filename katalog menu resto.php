<?php
$nama_lengkap = "Nama Anda Lengkap";
$menu_makanan = [
    ["nama" => "Nasi Goreng Spesial", "harga" => 25000],
    ["nama" => "Mie Ayam Bakso", "harga" => 18000],
    ["nama" => "Ayam Bakar", "harga" => 30000],
    ["nama" => "Es Teh Manis", "harga" => 5000],
    ["nama" => "Soto Ayam", "harga" => 20000]
];
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
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        /* 2. Style kerangka tabel HTML */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #28a745;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .status-mewah {
            color: #d9534f;
            font-weight: bold;
        }
        .status-terjangkau {
            color: #28a745;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Katalog Menu Restoran</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Kategori Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($menu_makanan as $menu) {
                    if ($menu['harga'] >= 25000) {
                        $status = "<span class='status-mewah'>Menu Spesial / Premium</span>";
                    } else {
                        $status = "<span class='status-terjangkau'>Terjangkau</span>";
                    }

                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $menu['nama'] . "</td>";
                    echo "<td>Rp " . number_format($menu['harga'], 0, ',', '.') . "</td>";
                    echo "<td>" . $status . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>