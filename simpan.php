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

// Mengambil data dari form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_identitas = $_POST['nomor_identitas'];
$kamar = $_POST['kamar'];
$jumlah_malam = $_POST['jumlah_malam'];
$total_harga = $_POST['total_harga'];

// Variabel untuk diskon
$discount = 0; 

if ($jumlah_malam > 3) {
    $discount = 10; 
}

// Menyiapkan query SQL untuk insert data
$sql = "INSERT INTO pemesanan (nama, jenis_kelamin, nomor_identitas, tipe_kamar, durasi, discount, total_harga)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing query: " . $conn->error);
}

$stmt->bind_param("ssssiii", $nama, $jenis_kelamin, $nomor_identitas, $kamar, $jumlah_malam, $discount, $total_harga);

// Menjalankan query
if ($stmt->execute()) {
    $id_pemesanan = $conn->insert_id;
    header("Location: tampil_pemesanan.php?id=" . $id_pemesanan);
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
