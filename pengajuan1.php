<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $toko = $_POST['toko'];
    $type = $_POST['type'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $conn = mysqli_connect("localhost", "root", "", "ourumkm");

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $insertQuery = "INSERT INTO laporan (nama, toko, type, nama_produk, harga, status) 
                    VALUES ('$nama', '$toko', '$type', '$nama_produk', '$harga', '$status')";

    if (mysqli_query($conn, $insertQuery)) {
        // Data berhasil ditambahkan, alihkan ke laporan.php
        header("Location: laporan.php");
        exit();
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
