<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kamar Hotel</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .jenis-kelamin {
            display: flex;
            gap: 20px;
        }

        .breakfast {
            display: flex;
            gap: 20px; 
        }

        .button-group {
            display: flex;
            gap: 10px; 
        }

        .button-group button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #d4a373;
            color: white;
            border-radius: 5px;
        }

        .button-group button:hover {
            background-color: #ca8a49;
        }

        .cancel-btn {
            background-color: #d86b6b;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            color: white;
            border-radius: 5px;
        }

        .cancel-btn:hover {
            background-color: #cd3c3c;
        }
    </style>
    <script>
        // Fungsi untuk menghitung total bayar dan menampilkan harga otomatis
        function hitungTotal() {
            var kamar = document.getElementById('kamar').value;
            var jumlahMalam = parseInt(document.getElementById('jumlah-malam').value);
            var breakfast = document.getElementById('breakfast').checked;
            var nomorIdentitas = document.getElementById('nomor-identitas').value;

            if (nomorIdentitas.length !== 16) {
                alert("Nomor identitas harus 16 digit");
                return;
            }

            var hargaPerMalam;
            if (kamar === 'standar') {
                hargaPerMalam = 500000;
            } else if (kamar === 'deluxe') {
                hargaPerMalam = 750000;
            } else if (kamar === 'executive') {
                hargaPerMalam = 1000000;
            }

            document.getElementById('harga-per-malam').value = hargaPerMalam;

            var totalHarga = hargaPerMalam * jumlahMalam;
            if (breakfast) {
                totalHarga += 80000 * jumlahMalam; 
            }

            if (jumlahMalam > 3) {
                totalHarga *= 0.9; 
            }

            document.getElementById('total-harga').value = totalHarga;
        }

        function updateHarga() {
            var kamar = document.getElementById('kamar').value;
            var hargaPerMalam;

            if (kamar === 'standar') {
                hargaPerMalam = 500000;
            } else if (kamar === 'deluxe') {
                hargaPerMalam = 750000;
            } else if (kamar === 'executive') {
                hargaPerMalam = 1000000;
            } else {
                hargaPerMalam = 0;
            }

            document.getElementById('harga-per-malam').value = hargaPerMalam ? hargaPerMalam : '';
        }

        function simpan() {
            var totalHarga = document.getElementById('total-harga').value;

            if (totalHarga === "") {
            alert("Total harga tidak boleh kosong");
            return false;  
        }
        return true;  
        }

        function setMinDate() {
            var today = new Date(); 
            var dd = String(today.getDate()).padStart(2, '0'); 
            var mm = String(today.getMonth() + 1).padStart(2, '0');
            var yyyy = today.getFullYear(); 

            var todayFormatted = yyyy + '-' + mm + '-' + dd;

            document.getElementById("tanggal-pesan").setAttribute("min", todayFormatted);
        }

        window.onload = setMinDate;

    </script>
</head>
<body>
    <!-- Form Pemesanan --> 
        <div class="box">
        <h2>Pesan Kamar</h2>
        <form action="simpan.php" method="POST" onsubmit="return simpan()">
            <label for="nama">Nama Pemesan</label>
            <input type="text" id="nama" name="nama" required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <div class="jenis-kelamin">
                <label>
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="pria" required> Pria
                </label>
                <label>
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="wanita" required> Wanita
                </label>
            </div>

            <label for="nomor-identitas">Nomor Identitas (16 Digit)</label>
            <input type="text" id="nomor-identitas" name="nomor_identitas" maxlength="16" required>

            <label for="kamar">Pilih Tipe Kamar</label>
            <select id="kamar" name="kamar" onchange="updateHarga()" required>
                <option value="">Pilih Tipe Kamar</option>
                <option value="standar">Kamar Standar</option>
                <option value="deluxe">Kamar Deluxe</option>
                <option value="executive">Kamar Executive</option>
            </select>

            <label for="harga-per-malam">Harga (Rp)</label>
            <input type="text" id="harga-per-malam" name="harga_per_malam" readonly>

            <label for="tanggal-pesan">Tanggal Pesan</label>
            <input type="date" id="tanggal-pesan" name="tanggal_pesan" required>

            <label for="jumlah-malam">Durasi Menginap</label>
            <input type="number" id="jumlah-malam" name="jumlah_malam" min="1" required>
     
            <div class="breakfast">
            <label for="breakfast">Termasuk Breakfast</label>
            <input type="checkbox" id="breakfast" name="breakfast">
            </div>
            
            <label for="total-harga">Total Bayar (Rp)</label>
            <input type="text" id="total-harga" name="total_harga" readonly>

            <!-- Tombol aksi -->
            <div class="button-group">
                <button type="button" onclick="hitungTotal()">Hitung Total Bayar</button>
                <button type="submit" onclick="simpan()">Simpan</button>              
            </div>

            <a href="menu.php">
                    <button type="button" class="cancel-btn" onclick="window.location.href='index.html'">Cancel</button>
            </a>
        </form>
        </div>
        

</body>
</html>
