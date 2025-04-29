<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['user']) && isset($_POST['namaProduk'])) {
        // Ambil data dari parameter POST
        $nama_produk = $_POST['namaProduk'];

        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "ourumkm");

        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Ambil ID pengguna berdasarkan nama pengguna
        $nama_pengguna = $_SESSION['user'];
        $queryUser = "SELECT id FROM akun WHERE nama='$nama_pengguna'";
        $resultUser = mysqli_query($conn, $queryUser);

        if (!$resultUser) {
            die("Query error: " . mysqli_error($conn));
        }

        $userData = mysqli_fetch_assoc($resultUser);
        $user_id = $userData['id'];

        // Hapus produk dari tabel keranjang_user
        $queryHapus = "DELETE FROM keranjang_user WHERE user_id=? AND nama_produk=?";
        $stmtHapus = mysqli_prepare($conn, $queryHapus);
        mysqli_stmt_bind_param($stmtHapus, "is", $user_id, $nama_produk);
        mysqli_stmt_execute($stmtHapus);

        if (mysqli_stmt_affected_rows($stmtHapus) > 0) {
            echo 'success';
        } else {
            echo 'error';
        }

        // Tutup koneksi
        mysqli_close($conn);
    } else {
        echo 'error';
    }
} else {
    header("Location: cart.php"); // Redirect to the homepage or any other page
    exit();
}
?>
