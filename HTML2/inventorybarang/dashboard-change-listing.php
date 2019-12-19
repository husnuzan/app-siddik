<?php  
require "../connect/config.php"; 

session_start();

if (!isset($_SESSION["loging"])) {
	header("Location:../index.php");
	exit;
}


$id=$_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM inventory_barang WHERE id=$id");

while ($user_data = mysqli_fetch_assoc($result)) {
		
		$noserial =$user_data['nomorserial'];
		$namaalat =$user_data['namaalat'];
		$tipebarang =$user_data['tipebarang'];
		$tglpembelian = $user_data['tglpembelian'];
		$sampaidigudang =$user_data['sampaidigudang'];
		$tglkeluar =$user_data['tglkeluar'];
		$masapakai =$user_data['masapakai'];
		
		}

?>


<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/main.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
					<a href="index.html" class="dashboard-logo"><img src="../images/logo2.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">



						<li><a class="current" href="#">User Panel</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-add-listing.php">Add Listing</a></li>
								<li><a href="dashboard-add-listing - Copy.html">Add Listing-Ip</a></li>
							</ul>
						</li>

						<li><a href="#">Pages</a>
							<div class="mega-menu mobile-styles one-columns">


									<div class="mega-menu-section">
										<ul>
											<li class="mega-menu-headline">Other</li>
											<li><a href="pages-elements.html"><i class="sl sl-icon-settings"></i> Elements</a></li>
										</ul>
									</div>
									
							</div>
						</li>
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
			</div>
		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li ><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
			</ul>
			
			<ul data-submenu-title="Listings">
				<li class="active"><a href="dashboard-add-listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
				<li><a href="dashboard-add-listing2.html"><i class="sl sl-icon-plus"></i> Add Listing-Ip</a></li>

			</ul>	

			<ul data-submenu-title="Account">
				<li><a href="../logout.php"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Listing</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add Listing</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

					<form action="" method="post">
						<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-6">
								<h5>Nomor Serial </h5>
								<input class="search-field" type="text" value="<?= $noserial ?>" name="nomorserial" />
							</div>
						
							<div class="col-md-6">
								<h5>Nama Alat </i></h5>
								<input class="search-field" type="text" value="<?= $namaalat ?>" name="namaalat" />
							</div>
						</div>

						<div class="row with-forms">
							<div class="col-md-6">
								<h5>Tipe Alat</h5>
								<select class="chosen-select-no-single" name="tipebarang" value="<?= $tipebarang ?>>
									<option label="blank" >Select Category</option>	
									<option value="Eat & Drink">Eat & Drink</option>
									<option value="Shops">Shops</option>
									<option value="Hotels">Hotels</option>
									<option value="Restaurants">Restaurants</option>
									<option value="Fitness">Fitness</option>
									<option value="Events">Events</option>
								</select>
							</div>
							<div class="col-md-6">
								<h5>Tgl Pembelian <i class="fa fa-calendar" data-tip-content="Name of your business"></i></h5>
								<input class="search-field" type="date" value="<?=$tglpembelian ?>" name="tglpembelian" />
							</div>
						</div>
						
						<div class="row with-forms">
							<div class="col-md-6">
								<h5>Tgl Sampai di gudang <i class="fa fa-calendar" data-tip-content="Name of your business"></i></h5>
								<input class="search-field" type="date" value="<?= $sampaidigudang ?>" name="sampaidigudang" />
							</div>
							<div class="col-md-6">
								<h5>Tgl Keluar <i class="fa fa-calendar" data-tip-content="Name of your business" ></i></h5>
								<input class="search-field" type="date" value="<?= $tglkeluar ?>" name="tglkeluar" />
							</div>
						</div>
						<div class="row with-forms">
							<div class="col-md-12">
								<h5>Masa Pakai</h5>
								<input class="search-field" type="number" value="<?= $masapakai ?>" name="masapakai" />
							</div>
						</div>
						</div>

						<!-- Row -->
						

					<button class="button preview" type="submit" name="submit">Input<i class="fa fa-arrow-circle-right" ></i></button>

				</div>
			</div>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
			</div>

		</form>

		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../scripts/mmenu.min.js"></script>
<script type="text/javascript" src="../scripts/chosen.min.js"></script>
<script type="text/javascript" src="../scripts/slick.min.js"></script>
<script type="text/javascript" src="../scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="../scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="../scripts/waypoints.min.js"></script>
<script type="text/javascript" src="../scripts/counterup.min.js"></script>
<script type="text/javascript" src="../scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="../scripts/tooltips.min.js"></script>
<script type="text/javascript" src="../scripts/custom.js"></script>


<!-- Opening hours added via JS (this is only for demo purpose) -->
<script>
$(".opening-day.js-demo-hours .chosen-select").each(function() {
	$(this).append(''+
        '<option></option>'+
        '<option>Closed</option>'+
        '<option>1 AM</option>'+
        '<option>2 AM</option>'+
        '<option>3 AM</option>'+
        '<option>4 AM</option>'+
        '<option>5 AM</option>'+
        '<option>6 AM</option>'+
        '<option>7 AM</option>'+
        '<option>8 AM</option>'+
        '<option>9 AM</option>'+
        '<option>10 AM</option>'+
        '<option>11 AM</option>'+
        '<option>12 AM</option>'+
        '<option>1 PM</option>'+
        '<option>2 PM</option>'+
        '<option>3 PM</option>'+
        '<option>4 PM</option>'+
        '<option>5 PM</option>'+
        '<option>6 PM</option>'+
        '<option>7 PM</option>'+
        '<option>8 PM</option>'+
        '<option>9 PM</option>'+
        '<option>10 PM</option>'+
        '<option>11 PM</option>'+
        '<option>12 PM</option>');
});
</script>

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="../scripts/dropzone.js"></script>


</body>
</html>

<?php 
	if (isset($_POST['submit'])) {
		
		$noserial =$_POST['nomorserial'];
		$namaalat =$_POST['namaalat'];
		$tipebarang =$_POST['tipebarang'];
		$tglpembelian = $_POST['tglpembelian'];
		$sampaidigudang = $_POST['sampaidigudang'];
		$tglkeluar = $_POST['tglkeluar'];
		$masapakai = $_POST['masapakai'];



		//tgl peremajaan
		$date = date_create($tglkeluar);
		date_modify($date, '+'.$masapakai.'months');
		$masaperemajaan=date_format($date, 'Y-m-d');

	$result = mysqli_query($mysqli,"UPDATE inventory_barang SET nomorserial='$noserial',namaalat='$namaalat',tipebarang='$tipebarang',tglpembelian='$tglpembelian',sampaidigudang='$sampaidigudang',tglkeluar='$tglkeluar',masapakai='$masapakai',masaperemajaan='$masaperemajaan' WHERE id=$id");
	
	header("Location:dashboard-read-listing.php");

	}
	
	?>