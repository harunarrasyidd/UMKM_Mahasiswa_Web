<?php
session_start(); // Memulai session

$nama = $_SESSION['user'];
$conn = mysqli_connect("localhost", "root", "", "ourumkm");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil jenis barang dan nama file gambar sebelum menghapus
    $querySelect = "SELECT type, gambar FROM data_makanan WHERE id=?";
    $stmtSelect = mysqli_prepare($conn, $querySelect);
    mysqli_stmt_bind_param($stmtSelect, 'i', $id);
    mysqli_stmt_execute($stmtSelect);
    mysqli_stmt_bind_result($stmtSelect, $type, $gambar);
    mysqli_stmt_fetch($stmtSelect);
    mysqli_stmt_close($stmtSelect);

    // Tentukan lokasi gambar berdasarkan jenis barang
    if ($type == 'makanan') {
        $location = '../assets/makanan/' . $gambar;
    } elseif ($type == 'pakaian') {
        $location = '../assets/pakaian/' . $gambar;
    } else {
        echo "Jenis barang tidak valid.";
        exit;
    }

    // Hapus data dari database
    $queryDelete = "DELETE FROM data_makanan WHERE id=?";
    $stmtDelete = mysqli_prepare($conn, $queryDelete);
    mysqli_stmt_bind_param($stmtDelete, 'i', $id);
    $resultDelete = mysqli_stmt_execute($stmtDelete);
    mysqli_stmt_close($stmtDelete);

    if ($resultDelete) {
        // Hapus file gambar
        if (file_exists($location)) {
            unlink($location);
        }

        echo "<script>alert('Data berhasil dihapus');window.location.replace('data_barang.php');</script>";
    } else {
        echo "Data gagal dihapus: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak valid.";
}
?>
