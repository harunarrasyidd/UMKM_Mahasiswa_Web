<?php
session_start();
$nama = $_SESSION['user'];

$conn = mysqli_connect("localhost", "root", "", "ourumkm");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Handle delete
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['del'])) {
    $idToDelete = $_GET['id'];

    // Query untuk menghapus pengguna berdasarkan ID
    $queryDelete = "DELETE FROM akun WHERE id='$idToDelete'";
    $resultDelete = mysqli_query($conn, $queryDelete);

    if (!$resultDelete) {
        die("Query error: " . mysqli_error($conn));
    }

    // Redirect kembali ke halaman user.php setelah menghapus pengguna
    header("Location: user.php");
    exit;
}

// Handle tambah
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaBaru = $_POST['nama'];
    $typeBaru = $_POST['type'];
    $emailBaru = $_POST['email'];
    $passwordBaru = $_POST['password'];
    $lvlBaru = $_POST['lvl'];

    // Lakukan validasi dan sanitasi data jika diperlukan

    // Query untuk menambahkan data pengguna baru
    $queryTambah = "INSERT INTO akun (nama, type, email, password, lvl) 
                    VALUES ('$namaBaru', '$typeBaru', '$emailBaru', '$passwordBaru', '$lvlBaru')";
    $resultTambah = mysqli_query($conn, $queryTambah);

    if (!$resultTambah) {
        die("Query error: " . mysqli_error($conn));
    }

    // Redirect kembali ke halaman user.php setelah menambahkan pengguna baru
    header("Location: user.php");
    exit;
}

// Jika tidak ada operasi yang sesuai, redirect ke halaman lain atau lakukan tindakan sesuai kebutuhan
header("Location: indexa.php");
exit;
?>
