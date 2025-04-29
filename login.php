<?php
session_start();
$nama = $_POST['nama'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost", "root", "", "ourumkm");

$query = "SELECT * FROM akun WHERE nama='$nama' AND password='$password'";
$login = mysqli_query($conn, $query);
$isLogin = mysqli_num_rows($login);

if ($isLogin > 0) {
    $data = mysqli_fetch_assoc($login);
    $_SESSION['user'] = $nama;

    if ($data['lvl'] == 1) {
        $_SESSION['level'] = $data['lvl'];
        header("Location: admin/indexa.php");
    } else {
        if ($data['type'] == 'pembeli') {
            header("Location: pembeli/indexb.php");
        } else if ($data['type'] == 'penjual') {
            header("Location: penjual/indexs.php");
        } else {
            $msg = "<p class='alert alert-danger'>Tipe pengguna tidak valid.</p>";
            header("Location: index.php?msg=" . urlencode($msg));
            exit;
        }
    }
} else {
    $msg = "<p class='alert alert-danger'>Nama / password salah.</p>";
    header("Location: index.php?msg=" . urlencode($msg));
    exit;
}
?>
