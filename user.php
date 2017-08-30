<?php
include 'aksi/halau.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Aplikasi</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css2/font.css">
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<?php include 'navbar.php'; ?>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
				<div class="row-fluid">
						
					<!-- start: Main Menu -->
					<?php include 'sidebarr.php'; ?>
					<!-- end: Main Menu -->
					<!-- start: Content -->
						<div id="content" class="span10">
								
								
								<ul class="breadcrumb">
									<li>
										<i class="icon-home"></i>
										<a href="dashboard.php">Home</a> 
										<i class="icon-angle-right"></i>
									</li>
									<li><a href="user.php">User</a></li>
								</ul>

		<?php
		  	if (isset ($_GET['alert'])){
		  		$alert = $_GET['alert'];
		  		if ($alert == "insert"){
		  			?>
		  			<?php echo '<div class="alert alert-success"><strong>Success!</strong>Data Berhasil disimpan</div>';?>
		  			<?php
		  		} elseif ($alert == "hapus"){
		  			?>
		  			<?php echo '<div class="alert alert-info"><strong>Success!</strong>Data Berhasil dihapus</div>';?>
		  			<?php
		  		} elseif ($alert == "update"){
		  			?>
		  			<?php echo '<div class="alert alert-warning"><strong>Success!</strong>Data Berhasil diupdate</div>';?>
		  			<?php
		  		} elseif ($alert == "gagal"){
		  			?>
		  			<?php echo '<div class="alert alert-danger"><strong>Gagal!</strong>Data Gagal di eksekusi</div>';?>
		  			<?php
		  		}
		  	}
		  	?>


		<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Tambah Data</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

			<div class="box-content">
			  	
			  		
			  	
			  	<form class="form-horizontal" action="aksi/proses.php?kirim" method="post">
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="nama">Nama:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="nama" placeholder="Enter nama" required>
					    </div>
					  </div><br>

					  <div class="form-group">
					    <label class="control-label col-sm-2" for="username">Username:</label>
					    <div class="col-sm-10"> 
					      <input type="text" class="form-control" name="username" placeholder="Enter username" required>
					    </div>
					  </div><br>

					  <div class="form-group">
					    <label class="control-label col-sm-2" for="password">Password:</label>
					    <div class="col-sm-10"> 
					      <input type="password" class="form-control" name="password" placeholder="Enter password" required>
					    </div>
					  </div><br>

					 <div class="form-group">
						<label class="col-sm-3 control-label">&nbsp;</label>
						<div class="col-sm-6">
							<input type="submit" name="kirim" class="btn btn-sm btn-info" value="tambah">
							<a href="" class="btn btn-sm btn-danger"><b>Batal</b></a>
						</div>
					</div>
				</form><br>

				

			  	
				  	<div class="modal fade" id="modal-id">
				  		<div class="modal-dialog">
				  			<div class="modal-content">
				  				<div class="modal-header">
				  					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				  					<h4 class="modal-title">Modal title</h4>
				  				</div>
				  				<div class="modal-body">
				  					
				  				</div>
				  				<div class="modal-footer">
				  					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  					<button type="button" class="btn btn-primary">Save changes</button>
				  				</div>
				  			</div>
				  		</div>
				  	</div>

			    </div>
			  </div>
			  </div>

			  <div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header">
							<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Table Data </h2>
							<div class="box-icon">
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
						<div class="box-content">
							
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
						    <thead>
						      <tr>
						        <th>No</th>
						        <th>Nama</th>
						        <th>Username</th>
						        <th>Opsi</th>
						      </tr>
						    </thead>
						    <tbody>
						    <?php
						    include 'config/koneksi.php';

						    $no = 1;
						    $data = $conn->query("SELECT * FROM user ORDER BY nama ASC");

						    
						    while ($result = $data->fetch_assoc()){
						    	?>
						      <tr>
						        <td><?php echo $no; ?></td>
						        <td><?php echo $result ['nama'] ; ?></td>
						        <td><?php echo $result ['username'] ; ?></td>
			
							    <td class="center">
									
									<a class="btn btn-info" href="edituser.php?id=<?php echo $result ['id'] ; ?>" title="Edit Data">
										<i class="halflings-icon white edit"></i></a>                                           
									
									<a class="btn btn-danger" href="aksi/proses.php?id=<?php echo $result ['id'] ; ?>"onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"title="Hapus Data">
										<i class="halflings-icon white trash"></i></a> 		
									
								</td>
						        
						      </tr>
						      <?php
						      $no++;
						      }
						      $data->close();
						      $conn->close();
						      ?>
						    </tbody>
			 		      </table>
						</div>
					</div><!--/span-->
					
					
							

						<!-- end: Content -->
					</div><!--/#content.span10-->
			</div><!--/fluid-row-->
					
				</div><!--/span-->
			
			</div><!--/row-->

		
		
	
	
	<div class="clearfix"></div>
	
	<?php include 'footer.php';?>
	
	<!-- start: JavaScript-->

	
</body>
</html>

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->