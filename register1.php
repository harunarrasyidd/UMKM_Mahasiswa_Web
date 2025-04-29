<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ourumkm");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $type = $_POST['type'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $lvl = $_POST['lvl'];

    $sql = "SELECT * FROM akun WHERE nama='$nama'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Name already registered";
    } else {
        $sql = "INSERT INTO akun (nama, type, email ,password, lvl) 
                VALUES ('$nama', '$type', '$email' ,'$password', '$lvl')";

        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
