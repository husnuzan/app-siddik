<?php 

include '../connect/config.php';

session_start();

if (!isset($_SESSION["loging"])) {
	header("Location:../index.php");
	exit;
}

$result = mysqli_query($mysqli, "SELECT * FROM inventory_barang ORDER BY id DESC");

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


<!-- //datatables --> 
	
	<!-- online 3-->
	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css
	">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.material.min.css"> -->
	
	<!-- batas -->

	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> 
	
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
	
	
	<!-- offline
	<script src="js/jquery-3.1.0.js"></script>
	<script src="js/jquery.dataTables.min.js"></script> -->


<!-- end datatables -->




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

						<li><a href="#">User Panel</a>
							<ul>
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-add-listing.html">Add Listing</a></li>
								<li><a href="dashboard-add-listing - Copy.html">Add Listing-Ip</a></li>
							</ul>
						</li>

						<li ><a class="current" href="#">Table</a>
							<div class="mega-menu mobile-styles one-columns">

									<div class="mega-menu-section">
										<ul>
											<!-- <li class="mega-menu-headline">Other</li> -->
											<li><a href="pages-elements.html"><i class="sl sl-icon-settings"></i> Inventory Barang</a></li>
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
				<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>

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
					<h2>Inventory Barang</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li>Inventory Barang</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

	<div class="row">
		
		<div class="col-sm-12">


	<table id="tabel-data" class="basic-table" width="100%" cellspacing="0">
    <thead>
		<tr>
			<th>no</th>
			<th>Nomor Serial</th>
			<th>Nama Alat</th>
			<th>Tipe Barang</th>
			<th>Tgl Pembelian</th>
			<th>Sampai di Gudang</th>
			<th>Tgl Keluar</th>
			<th>Masa Pakai</th>
			<th>Tgl Peremajaan</th>
			<th>Action</th>
		</tr>
    </thead>
    
    <tbody">

	<?php
		$a=1;

		while ($user_data = mysqli_fetch_array($result)) : ?> 

		 	<tr>
			 	<td><?= $a++ ?></td>
			 	<td><?= $user_data['nomorserial'] ?></td>
			 	<td><?= $user_data['namaalat'] ?></td>
			 	<td><?= $user_data['tipebarang'] ?></td>
			 	<td><?= $user_data['tglpembelian'] ?></td>
			 	<td><?= $user_data['sampaidigudang'] ?></td>
			 	<td><?= $user_data['tglkeluar'] ?></td>
			 	<td><?= $user_data['masapakai'] ?></td>
			 	<td><?= $user_data['masaperemajaan'] ?></td>
			 	

			 	<td >
			 		<a href="dashboard-change-listing.php?id= <?php echo $user_data['id']; ?>" style="margin-left: 15px;"><i class="sl sl-icon-note"></i></a> 
			 		<a href="dashboard-delete-listing.php?id= <?php echo $user_data['id']; ?>" style="margin-left: 5px;"><i class="sl sl-icon-trash"></i></a> 
			 	</td>
		 	</tr>
		  
		<?php endwhile; ?>
    
    </tbody>
</table>
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

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>


<!-- <script type="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
<script type="https://cdn.datatables.net/1.10.20/js/dataTables.material.min.js"></script>
 -->


<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

<!-- <script >
$(document).ready(function() {
    $('#table-data').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    } );
} );
</script> -->

</body>
</html>