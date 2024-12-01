<?php
// Menghubungkan ke database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotel_db';

$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id_pemesanan = $_GET['id'];

    $sql = "SELECT * FROM pemesanan WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing query: " . $conn->error);
    }

    $stmt->bind_param("i", $id_pemesanan);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit();
    }

    $stmt->close();
} else {
    // Jika ID tidak ada di URL
    echo "ID tidak ditemukan!";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #d4a373;;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #d4a373;;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            display: block;
            width: 200px;
            margin: 30px auto;
            padding: 10px;
            background-color: #d86b6b;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #cd3c3c;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Detail Pemesanan</h2>

        <?php if (isset($row)): ?>
            <table>
                <tr>
                    <th>Nama</th>
                    <td><?php echo ($row['nama']); ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo ($row['jenis_kelamin']); ?></td>
                </tr>
                <tr>
                    <th>Nomor Identitas</th>
                    <td><?php echo ($row['nomor_identitas']); ?></td>
                </tr>
                <tr>
                    <th>Tipe Kamar</th>
                    <td><?php echo ($row['tipe_kamar']); ?></td>
                </tr>
                <tr>
                    <th>Durasi Penginapan</th>
                    <td><?php echo ($row['durasi']); ?></td>
                </tr>
                <tr>
                    <th>Diskon</th>
                    <td><?php echo ($row['discount']); ?>%</td>
                </tr>
                <tr>
                    <th>Total Harga</th>
                    <td>Rp <?php echo number_format($row['total_harga'], 0, ',', '.'); ?></td>
                </tr>
            </table>
        <?php else: ?>
            <p>Data pemesanan tidak ditemukan.</p>
        <?php endif; ?>

        <a href="menu.php" class="btn">Kembali ke Menu</a>
    </div>

</body>
</html>
