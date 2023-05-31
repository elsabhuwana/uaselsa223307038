<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete data from database
    $query = "DELETE FROM t_uas WHERE id = '$id'";
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
