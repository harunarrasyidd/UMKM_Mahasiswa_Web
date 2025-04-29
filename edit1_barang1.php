<?php
session_start(); // Memulai session

$nama = $_SESSION['user'];
$conn = mysqli_connect("localhost", "root", "", "ourumkm");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    // Memeriksa tipe file (misalnya: hanya file gambar JPG atau PNG yang diizinkan)
    if ($_FILES['gambar']['type'] != 'image/jpeg' && $_FILES['gambar']['type'] != 'image/png') {
        echo "Hanya file gambar JPG atau PNG yang diizinkan.";
    } else {
        $timestamp = time();
        $newName = $timestamp . $gambar;

        // Tentukan lokasi penyimpanan berdasarkan jenis barang
        if ($type == 'makanan') {
            $location = '../assets/makanan/' . $newName;
            $tabel = 'data_makanan';
        } elseif ($type == 'pakaian') {
            $location = '../assets/pakaian/' . $newName;
            $tabel = 'data_pakaian';
        } else {
            echo "Jenis barang tidak valid.";
            exit;
        }

        // Query untuk mengupdate data berdasarkan ID
        $queryUpdate = "UPDATE $tabel SET type=?, nama_produk=?, harga=?, gambar=? WHERE id=?";

        // Menggunakan prepared statement untuk mencegah SQL Injection
        $stmt = mysqli_prepare($conn, $queryUpdate);

        // Ganti 'ssssi' menjadi 'ssss' pada mysqli_stmt_bind_param
        mysqli_stmt_bind_param($stmt, 'ssssi', $type, $nama_produk, $harga, $newName, $id);

        // Eksekusi prepared statement
        $resultUpdate = mysqli_stmt_execute($stmt);

        if ($resultUpdate) {
            // Pindahkan file ke lokasi penyimpanan
            move_uploaded_file($tmp, $location);

            echo "<script>alert('Data berhasil diupdate');window.location.replace('data_barang.php');</script>";
        } else {
            echo "Data gagal diupdate: " . mysqli_error($conn);
        }

        // Tutup statement
        mysqli_stmt_close($stmt);
    }
}
?>
