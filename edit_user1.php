<?php
session_start();
$nama = $_SESSION['user'];

$conn = mysqli_connect("localhost", "root", "", "ourumkm");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $type = $_POST['type'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $lvl = $_POST['lvl']; // Sesuaikan dengan nama variabel yang sesuai

    // Lakukan validasi dan sanitasi data jika diperlukan

    // Query untuk melakukan update data pengguna
    $queryUpdate = "UPDATE akun SET nama='$nama', type='$type', email='$email', password='$password', lvl='$lvl' WHERE id='$id'";
    $resultUpdate = mysqli_query($conn, $queryUpdate);

    if (!$resultUpdate) {
        die("Query error: " . mysqli_error($conn));
    }

    // Redirect kembali ke halaman user.php setelah melakukan update
    header("Location: user.php");
    exit;
} else {
    // Jika form tidak diakses melalui metode POST, redirect ke halaman lain atau lakukan tindakan sesuai kebutuhan
    header("Location: halaman_lain.php");
    exit;
}
?>
