<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran UKM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Pendaftaran UKM</h1>
        
        <!-- Form input data -->
        <form action="proses.php" method="POST">
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <input type="text" id="prodi" name="prodi" required>
            </div>
            <div class="form-group">
                <label for="ukm">UKM:</label>
                <select id="ukm" name="ukm" required>
                    <option value="">- Pilih UKM -</option>
                    <option value="PALS">PALS</option>
                    <option value="Cakra Manggala">Cakra Manggala</option>
                    <option value="Badminton">Badminton</option>
                    <option value="Niknema">Niknema</option>
                    <option value="Basket">Basket</option>
                    <option value="Volly">Volly</option>
                    <option value="Kewirausahaan">Kewirausahaan</option>
                    <option value="G-Plasma">G-Plasma</option>
                    <option value="Musican">Musican</option>
                </select>
            </div>
            <button type="submit" name="submit">Simpan</button>
        </form>

        <!-- Data UKM -->
        <h2>Data UKM</h2>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>UKM</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
