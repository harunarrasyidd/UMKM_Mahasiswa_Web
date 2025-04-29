<?php
session_start(); // Memulai session

$nama = $_SESSION['user'];
$conn = mysqli_connect("localhost", "root", "", "ourumkm");

if (isset($_POST['submit'])) {
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

        $query = "INSERT INTO $tabel(type, nama_produk, harga, gambar) VALUES ('$type', '$nama_produk', '$harga', '$newName')";

        // Melakukan koneksi langsung ke database
        $conn = mysqli_connect("localhost", "root", "", "ourumkm");

        if (mysqli_query($conn, $query)) {
            // Pindahkan file ke lokasi penyimpanan
            move_uploaded_file($tmp, $location);

            echo "<script>alert('Data berhasil ditambahkan');window.location.replace('data_barang.php');</script>";
        } else {
            echo "Data gagal ditambah: " . mysqli_error($conn);
        }

        // Menutup koneksi
        mysqli_close($conn);
    }
} else {
    echo "Form tidak dikirim dengan benar. ";
    echo "Type: " . $_POST['type'] . ", Nama Produk: " . $_POST['nama_produk'] . ", Harga: " . $_POST['harga'] . ", Gambar: " . $_FILES['gambar']['name'];
}
?>
