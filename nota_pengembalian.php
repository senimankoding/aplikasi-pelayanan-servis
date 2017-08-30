<?php
include 'aksi/halau.php';
include 'config/koneksi.php';

//PERINTAH UNTUK MENGEDIT DATA BERDASARKAN ID DATA
if (isset($_GET['no'])) {
	$data = $conn->prepare("SELECT * FROM dataservis WHERE no = ? ");
	$no = $_GET['no'];
	$data->bind_param('i', $no);
	$data->execute();

	$result = $data->get_result();
	$row= $result->fetch_row();
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Nota</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css2/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css2/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<center><h3><em>TANDA PENGEMBALIAN SERVIS</em></h3></center>
	</div>

	<div class="inputan">
		<div class="container">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<img src="img/logo.jpg" alt="">
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<table width="329">
				  <tr>
				    <td width="108" height="50"><B>Nama</B></td>
				    <td width="194">: <input style="border:none" type="text"  name="nmpemilik" value="<?php echo $row ['2']; ?>" readonly></td>
				  </tr>
				  <tr>
				    <td height="50"><B>Alamat</B></td>
				    <td>: <input style="border:none" type="text" name="alamat" value="<?php echo $row ['3']; ?>" readonly></td><br>
				  </tr>
				  <tr>
				    <td height="50"><B>Telp.</B></td>
				    <td>: <input style="border:none" type="text"  name="tlpn" value="<?php echo $row ['4']; ?>" readonly></td>
				  </tr>
				</table>
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<table width="329">
				  <tr>
				    <td width="108" ><B>NOTA</B></td>
				    <td width="194">: <input style="border:none" type="text"  name="no" value="<?php echo $row ['0']; ?>" readonly></td>
				  </tr>
				  <tr>
				    <td height="50"><B>Tgl. Diterima</B></td>
				    <td>: <input style="border:none" type="date" name="tglditerima" value="<?php echo $row ['7']; ?>" readonly></td><br>
				  </tr>
				   <tr>
				    <td height="50"><B>Tgl. Diambil</B></td>
				    <td>: <input style="border:none" type="date" name="tglambil" value="<?php echo $row ['11']; ?>" readonly></td><br>
				  </tr>
				  
				</table>
			</div>
		</div>
	</div>

	<div class="tabel">
		<div class="container">
			<br><table width="100%" border="4">
			  <tr>
			    <th><center>
			      <strong>NAMA BARANG</strong>
			    </center></th>
			    <th><center>
			      <strong>KERUSAKAN</strong>
			    </center></th>
			    <th><center>
			      <strong>KELENGKAPAN</strong>
			    </center></th>
			  </tr>

			  <tr>
			    <td height="255" valign="top"> <input style="border:none" type="text"  name="nmbarang" value="<?php echo $row ['1']; ?>" readonly></td>
			    <td valign="top"> <input style="border:none" type="text"  name="kerusakan" value="<?php echo $row ['5']; ?>" readonly></td>
			    <td valign="top"> <input style="border:none" type="text"  name="kelengkapan" value="<?php echo $row ['6']; ?>" readonly></td>
			  </tr>
			</table>
		</div>
	</div>

	<div class="keterangan">
		<div class="container">
			<table width="329">
				  <tr>
				    <td width="108" ><B>Kodisi Barang</B></td>
				    <td width="194">: <input style="border:none" type="text"  name="kondisibrg" value="<?php echo $row ['10']; ?>" readonly></td>
				  </tr>
				  <tr>
				    <td ><B>Teknisi</B></td>
				    <td>: <input style="border:none" type="text" name="teknisi" value="<?php echo $row ['9']; ?>" readonly></td><br>
				  </tr>
				   <tr>
				    <td ><B>Biaya</B></td>
				    <td>: <input style="border:none" type="text" name="biaya" value="<?php echo $row ['13']; ?>" readonly></td><br>
				  </tr>
				  
				</table>
		</div>
	</div>

	<div class="bawah">
		<div class="container">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<center><table width="120" >
					  <tr>
					    <td width="101" height="35"><h3><strong>PENYERAH</strong></h3></td>
					  </tr>
					  <tr>
					    <td> <input type="text" style="border:none"  name="penyerahanbarang" value="<?php echo $row ['12']; ?>" readonly></td>
					  </tr>
				</table></center>
				
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
				<center><table width="120" >
					  <tr>
					    <td width="101" height="35"><h3><strong>PENERIMA</strong></h3></td>
					  </tr>
					  <tr>
					    <td><input type="text" style="border:none"  name="penerimabarang" value="<?php echo $row ['8']; ?>" readonly></td></td>
					  </tr>
				</table></center>
			</div>
		</div>
	</div>

</body>
</html>
<script src="css2/jquery.js"></script>
<script src="css2/bootstrap.min.js"></script>

<script>window.print();</script>



