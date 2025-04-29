<?php
session_start();
$nama = $_SESSION['user'];

$conn = mysqli_connect("localhost", "root", "", "ourumkm");

// Query untuk tabel laporan
$query1 = "SELECT * FROM laporan";
$result1 = mysqli_query($conn, $query1);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (!$result1) {
    die("Query error: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>OurUMKM</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/ourumkm_logo.png">
    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        .table-container {
            max-height: 560px; /* Sesuaikan tinggi maksimal sesuai kebutuhan */
            overflow-y: auto; /* Menambahkan scrolling vertikal jika kontennya lebih tinggi dari tinggi maksimal */
        }
    </style>


</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> @OurUMKM</li>
                                <li><i class="ti-email"></i> support@ourumkm.com</li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-8 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> UIN WALISONGO</li>
                                <li><i class="ti-alarm-clock"></i> <a href="#">24/7</a></li>
                          
                                <li><i class="ti-power-off"></i><a href="../logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="indexa.php"><img src="../assets/ourumkm_logo.png" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
                                    <option selected="selected">Semua</option>
                                    <option>Makanan</option>
                                    <option>Pakaian</option>
                                   
                                </select>
                                <form>
                                    <input name="search" placeholder="Search Products Here....." type="search">
                                    <button class="btnn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <div class="sinlge-bar">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="all-category">

                                <ul class=">
											<li>/a></li>
										</ul>
									</li>
									<li class= aria-hidden=" true"></i></a>
                                    <ul class="lt=" #">
                            </div>
                            <div class="inner-link">
                                <a href="#"></a>
                                <a href="#"></a>
                                <a href="#"></a>
                                <a href="#"></a>
                            </div>
                            </li>
                            <li class=" alt=" #">
                        </div>
                        <div class=</a>
                        </div>
                        </li>
                        <li class="single-menu">
                            <a href="#" class="alt=" #">
                    </div>
                    <div class=</li>
                        </ul>
                        </li>
                        </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="menu-area">
                        <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">
                                <div class="nav-inner">
                                    <ul class="nav main-menu menu navbar-nav">
                                        <li class=""><a href="indexa.php">OurUMKM</a></li>
                                        <li class="active"><a href="validasi.php">Validasi</a></li>
                                        <li class=""><a href="data_barang.php">Barang</a></li>
                                        <li><a href="user.php">Data User</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!--/ End Main Menu -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

    <!-- Slider Area -->
    <section class="hero-slider">
        <!-- Single Slider -->
        </a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!--/ End Single Slider -->
    </section>
    <!--/ End Slider Area -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="indexs.php">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="validasi.php">Validasi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12 table-container">
                        <div class="form-main">
                            <div class="title">
                                <h4>Validasi</h4>
                                <h3>Formulir Pengajuan Produk UMKM</h3>
                            </div>
                            <form class="form" method="post" action="#">
                                <div class="row">
                                    <table class="table mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Toko</th>
                                                <th>type</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Status</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($data = mysqli_fetch_assoc($result1)) { ?>
                                            <tr>
                                                <td class="text-bold-500"><?= $data['nama'] ?></td>
                                                <td class="text-bold-500"><?= $data['toko'] ?></td>
                                                <td class="text-bold-500"><?= $data['type'] ?></td>
                                                <td class="text-bold-500"><?= $data['nama_produk'] ?></td>
                                                <td class="text-bold-500"><?= $data['harga'] ?></td>
                                                <td class="text-bold-500" style="color:
                            <?php if ($data['status'] == 'Menunggu') { echo 'yellow'; }
                            elseif ($data['status'] == 'Disetujui') { echo 'green'; }
                            elseif ($data['status'] == 'Ditolak') { echo 'red'; } ?>
                        "><?= $data['status'] ?>
                                                </td>
                                                <?php if ($data['status'] !== 'Disetujui' && $data['status'] !== 'Ditolak') { ?>
                                                <td class="text-bold-500">
                                                    <a href="validasi1.php?id=<?= $data['id'] ?>&action=setuju"
                                                        class="btn btn-sm btn-Success">Setuju</a>
                                                </td>
                                                <td class="text-bold-500">
                                                    <a href="validasi1.php?id=<?= $data['id'] ?>&action=tolak"
                                                        class="btn btn-sm btn-Danger">Tolak</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-head">
                            <div class="single-info">
                                <i class="fa fa-phone"></i>
                                <h4 class="title">Hubungi Sekarang:</h4>
                                <ul>
                                    <li>+123456789</li>
                                    <li>+0202020202</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-envelope-open"></i>
                                <h4 class="title">Email:</h4>
                                <ul>
                                    <li><a href="mailto:info@yourwebsite.com">ourumkm@gmail.com</a></li>
                                    <li><a href="mailto:info@yourwebsite.com">ourumkm_ws@yahoo.com</a></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa fa-location-arrow"></i>
                                <h4 class="title">Alamat :</h4>
                                <ul>
                                    <li>UIN WALISONGO, SEMARANG. INDONESIA</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact -->

   

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="indexa.php"><img src="../assets/ourumkm_logo.png" alt="#"></a>
                            </div>
                            <p class="text">OurUMKM, platform khusus Usaha Mikro di Area UIN WALISONGO</p>
                            <p class="call">Ada Pertanyaan? Hubungi Kami<span><a
                                        href="tel:123456789">+123456789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Informasi</h4>
                            <ul>
                                <li><a href="">@OurUmkm</a></li>

                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>OurUMKM</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>UIN WALISONGO</li>
                                    <li>TEKNOLOGI INFORMASI</li>
                                    <li>info@ourumkm.com</li>
                                    <li>+123456789</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © OurUMKM 2023 <a href="https://walisongo.ac.id/" target="_blank">. UIN
                                        WALISONGO .</a> - Kelompok 5.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="images/payments.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                        
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- /End Footer Area -->



    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/magnific-popup.js"></script>
    <!-- Fancybox JS -->
    <script src="js/facnybox.min.js"></script>
    <!-- Waypoints JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- Jquery Counterup JS -->
    <script src="js/jquery-counterup.min.js"></script>
    <!-- Countdown JS -->
    <script src="js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="js/nicesellect.js"></script>
    <!-- Ytplayer JS -->
    <script src="js/ytplayer.min.js"></script>
    <!-- Flex Slider JS -->
    <script src="js/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
    <script src="js/gmap.min.js"></script>
    <script src="js/map-script.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>