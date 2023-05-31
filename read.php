<?php
// Include database connection
include 'koneksi.php';

// Fetch data from database
$query = "SELECT * FROM t_uas";
$result = mysqli_query($conn, $query);

// Check if query successful
if ($result) {
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $nama = $row['nama'];
            $nim = $row['nim'];
            $prodi = $row['prodi'];
            $ukm = $row['ukm'];

            echo "<tr>";
            echo "<td>" . $counter . "</td>";
            echo "<td>" . $nama . "</td>";
            echo "<td>" . $nim . "</td>";
            echo "<td>" . $prodi . "</td>";
            echo "<td>" . $ukm . "</td>";
            echo "<td><a href='edit.php?id=".$row['id']."' >Edit</a> |<a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
            echo "</tr>";

            $counter++;
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
