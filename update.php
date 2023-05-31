<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            margin: 20px auto;
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Data</h2>
        <form method="POST">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>

            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim" required>

            <label for="prodi">Program Studi</label>
            <input type="text" name="prodi" id="prodi" required>

            <label for="ukm">UKM</label>
            <input type="text" name="ukm" id="ukm" required>

            <button type="submit" name="submit">Update</button>
        </form>
    </div>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $ukm = $_POST['ukm'];

    // Update data in database
    $query = "UPDATE t_uas SET nama = '$nama', nim = '$nim', prodi = '$prodi', ukm = '$ukm' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    // Check if query successful
    if ($result) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
</body>
</html>
