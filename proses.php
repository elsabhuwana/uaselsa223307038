<?php
// Include database connection
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $ukm = $_POST['ukm'];

    // Insert data into database
    $query = "INSERT INTO t_uas (nama, nim, prodi, ukm) VALUES ('$nama', '$nim', '$prodi', '$ukm')";
    $result = mysqli_query($conn, $query);

    // Check if query successful
    if ($result) {
        // Redirect back to dashboard.php
        header("Location: dashboard.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
