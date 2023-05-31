<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <style>
       body {
            width: 100%;
            height: 100vh;
            background: linear-gradient(to bottom, #DB7093, #FFDAB9); 
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #FFB6C1;
        } 

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #DB7093;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Data</h2>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Get data from database
            $query = "SELECT * FROM t_uas WHERE id = '$id'";
            $result = mysqli_query($conn, $query);

            // Check if query successful
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $nama = $row['nama'];
                $nim = $row['nim'];
                $prodi = $row['prodi'];
                $ukm = $row['ukm'];

                // Display the form with pre-filled data
                ?>
                <form method="POST" action="update.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label>Nama:</label>
                    <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
                    <label>NIM:</label>
                    <input type="text" name="nim" value="<?php echo $nim; ?>"><br>
                    <label>Prodi:</label>
                    <input type="text" name="prodi" value="<?php echo $prodi; ?>"><br>
                    <label>UKM:</label>
                    <input type="text" name="ukm" value="<?php echo $ukm; ?>"><br>
                    <input type="submit" name="submit" value="Update">
                </form>
                <?php
            } else {
                echo "Data not found.";
            }
        }
        ?>
    </div>

<?php
mysqli_close($conn);
?>
</body>
</html>
