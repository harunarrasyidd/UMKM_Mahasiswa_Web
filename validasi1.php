<?php
session_start();
$nama = $_SESSION['user'];

$conn = mysqli_connect("localhost", "root", "", "ourumkm");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && isset($_GET['action'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    // Lakukan validasi aksi (setuju atau tolak)
    if ($action == 'setuju') {
        // Lakukan aksi setuju, misalnya mengubah status menjadi 'Disetujui'
        $queryUpdate = "UPDATE laporan SET status='Disetujui' WHERE id='$id'";
        $resultUpdate = mysqli_query($conn, $queryUpdate);

        if (!$resultUpdate) {
            die("Query error: " . mysqli_error($conn));
        }

        // Dapatkan data laporan berdasarkan ID
        $queryGetData = "SELECT * FROM laporan WHERE id='$id'";
        $resultGetData = mysqli_query($conn, $queryGetData);
        $data = mysqli_fetch_assoc($resultGetData);

        // Redirect ke tambah_barang.php dengan mengirimkan data laporan
        header("Location: tambah_barang.php?id=".$data['id']."&type=".$data['type']."&nama_produk=".$data['nama_produk']."&harga=".$data['harga']);
        exit;
    } elseif ($action == 'tolak') {
        // Lakukan aksi tolak, misalnya mengubah status menjadi 'Ditolak'
        $queryUpdate = "UPDATE laporan SET status='Ditolak' WHERE id='$id'";
        $resultUpdate = mysqli_query($conn, $queryUpdate);

        if (!$resultUpdate) {
            die("Query error: " . mysqli_error($conn));
        }

        // Redirect kembali ke halaman validasi setelah melakukan aksi
        header("Location: validasi.php");
        exit;
    }
} else {
    // Jika tidak ada parameter yang diberikan, redirect ke halaman lain atau lakukan tindakan sesuai kebutuhan
    header("Location: indexa.php");
    exit;
}
?>
