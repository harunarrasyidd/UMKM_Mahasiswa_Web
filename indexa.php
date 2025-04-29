<?php
session_start(); // Memulai session
if(!isset($_SESSION['user'])){
    $msg = "Anda tidak berhak akses";
    header("Location: ../index.php?msg=$msg");
} else if (isset($_SESSION['level']) && $_SESSION['level']==2) {
    $msg = "Anda tidak berhak akses";
    header("Location: ../index.php?msg=$msg");
}
$nama = $_SESSION['user'];

$conn = mysqli_connect("localhost","root","", "ourumkm");
$query = "SELECT * FROM akun WHERE nama='$nama'";
$result = mysqli_query($conn, $query);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}

// Mengambil data dari hasil query dan menyimpannya dalam variabel $data
$data = mysqli_fetch_assoc($result);

// Mengambil data makanan
$queryMakanan = "SELECT * FROM data_makanan";
$resultMakanan = mysqli_query($conn, $queryMakanan);

// Mengambil data pakaian
$queryPakaian = "SELECT * FROM data_pakaian";
$resultPakaian = mysqli_query($conn, $queryPakaian);
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
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
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
									<li class= aria-hidden="true"></i></a>
										<ul class="lt="#">
												</div>
												<div class="inner-link">
													<a href="#"></a>
													<a href="#"></a>
													<a href="#"></a>
													<a href="#"></a>
												</div>
											</li>
											<li class=" alt="#">
												</div>
												<div class=</a>
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="alt="#">
												</div>
												<div class=
											</li>
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
													<li class="active"><a href="indexa.php">OurUMKM</a></li>
													<li><a href="validasi.php">Validasi</a></li>
													<li><a href="data_barang.php">Barang</a></li>
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
	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="../assets/aneka makanan.jpg" alt="#">
						<div class="content">
							
							<h3>Aneka Makanan<br> </h3>
							
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="../assets/makanan-ringan.jpg" alt="#">
						<div class="content">
							
							<h3>Aneka Makanan Ringan <br> </h3>
							
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="../assets/kerudung.jpg" alt="#">
						<div class="content">
						
							<h3>Aneka Pakaian <br> <span></span> </h3>
						
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Barang OurUMKM</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Makanan</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Pakaian</a></li>

								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
										<?php while ($rowMakanan = mysqli_fetch_assoc($resultMakanan)) : ?>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href=" ">
                                                        <img class="default-img"
                                                            src="../assets/makanan/<?php echo $rowMakanan['gambar']; ?>"
                                                            alt="#">
                                                        <img class="hover-img"
                                                            src="../assets/makanan/<?php echo $rowMakanan['gambar']; ?>"
                                                            alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                                title="Quick View" href="#"><i
                                                                    class="ti-eye"></i><span>Quick Shop</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Tambah ke Keranjang</a>
															<a href="edit_barang.php?id=<?php echo $rowMakanan['id']; ?>" title="Edit"><i class="ti-pencil"></i></a>
                                        					<a href="delete_barang.php?id=<?php echo $rowMakanan['id']; ?>" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus?')"><i class="ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#"><?php echo $rowMakanan['nama_produk']; ?></a></h3>
                                                    <div class="product-price">
                                                        <span>Rp. <?php echo $rowMakanan['harga']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="women" role="tabpanel">
									<div class="tab-single">
										<div class="row">
										<?php while ($rowPakaian = mysqli_fetch_assoc($resultPakaian)) : ?>
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <a href=" ">
                                                        <img class="default-img"
                                                            src="../assets/pakaian/<?php echo $rowPakaian['gambar']; ?>"
                                                            alt="#">
                                                        <img class="hover-img"
                                                            src="../assets/pakaian/<?php echo $rowPakaian['gambar']; ?>"
                                                            alt="#">
                                                    </a>
                                                    <div class="button-head">
                                                        <div class="product-action">
                                                            <a data-toggle="modal" data-target="#exampleModal"
                                                                title="Quick View" href="#"><i
                                                                    class="ti-eye"></i><span>Quick Shop</span></a>
                                                        </div>
                                                        <div class="product-action-2">
                                                            <a title="Add to cart" href="#">Tambah ke Keranjang</a>
															<a href="edit1_barang.php?id=<?php echo $rowPakaian['id']; ?>" title="Edit"><i class="ti-pencil"></i></a>
                                        					<a href="delete1_barang.php?id=<?php echo $rowPakaian['id']; ?>" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus?')"><i class="ti-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#"><?php echo $rowPakaian['nama_produk']; ?></a></h3>
                                                    <div class="product-price">
                                                        <span>Rp. <?php echo $rowPakaian['harga']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
											
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								
								
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="essential" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
	</span>
                                </div>
                            </div>
                        </div>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>OurUMKM</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u1.jpg" alt="#">
									
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4 class="title"><a href="#">SNACK WS</a></h4>
									<h4 class="title"><a href="#">-berbagai macam makanan ringan-</a></h4>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u2.jpg" alt="#">
									</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Makanan WS</a></h5>
									<h5 class="title"><a href="#">-berbagai macam makanan-</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u3.jpg" alt="#">
									</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">BAJU WS</a></h5>
									<h5 class="title"><a href="#">-aneka pakaian-</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="e">
								<h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u4.jpg" alt="#">
									</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">MUSLIM WS</a></h5>
									<h5 class="title"><a href="#">-aneka pakaian pria-</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u5.jpg" alt="#">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">KERUDUNG WS</a></h5>
									<h5 class="title"><a href="#">-aneka kerudung-</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u6.jpg" alt="#">
									</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">MOOSLEM WS</a></h5>
									<h5 class="title"><a href="#">-aneka pakaian muslim-</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class=>
								<h1></h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u7.jpg" alt="#">
									</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">JAJAN WS</a></h5>
									<h5 class="title"><a href="#">-aneka jajanan-</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u8.jpg" alt="#">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">NASI WS</a></h5>
									<h5 class="title"><a href="#">-aneka masakan-</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="../assets/u9.jpg" alt="#">
									</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">GORENGAN WS</a></h5>
									<h5 class="title"><a href="#">-aneka gorengan-</a></h5>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->
	
	<!-- Start Cowndown Area -->

							></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
	<!-- Start Shop Blog  -->
	</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->
	
	
	
	
	
	
	
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
							<p class="call">Ada Pertanyaan? Hubungi Kami<span><a href="tel:123456789">+123456789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Informasi</h4>
							<ul>
								<li><a href="">@OurUMKM</a></li>

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
								<p>Copyright © OurUMKM 2023 <a href="https://walisongo.ac.id/" target="_blank">. UIN WALISONGO .</a>  -  Kelompok 5.</p>
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
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>