<?php 
include '../config/koneksi.php';

if (isset($_POST['update'])){ 
				$nmbarang          = $_POST ['nmbarang'];
				$nmpemilik         = $_POST ['nmpemilik'];
				$alamat            = $_POST ['alamat'];
				$tlpn              = $_POST ['tlpn'];
				$kerusakan         = $_POST ['kerusakan'];
				$kelengkapan       = $_POST ['kelengkapan'];
				$penerimabarang    = $_POST ['penerimabarang'];
				$teknisi           = $_POST ['teknisi'];
				$kondisibrg        = $_POST ['kondisibrg'];
				
				
				$biaya             = $_POST ['biaya'];
				$no = $_POST['no'];

				$data = $conn->prepare("UPDATE dataservis SET nmbarang = ?, nmpemilik = ?, alamat = ?, tlpn = ?, kerusakan = ?, kelengkapan = ?, penerimabarang = ?, teknisi = ?, kondisibrg = ?, biaya = ? WHERE no = ?");
				$data->bind_param('ssssssssssi', $nmbarang, $nmpemilik, $alamat, $tlpn, $kerusakan, $kelengkapan, $penerimabarang, $teknisi, $kondisibrg, $biaya, $no);

				if ($data->execute()){
				header("location:../dataservis.php?alert=update");
			} else {
				header ("location:../dataservis.php?alert=gagal");
			}
			
			}

if (isset($_POST['update3'])){ 
				$nmbarang          = $_POST ['nmbarang'];
				$nmpemilik         = $_POST ['nmpemilik'];
				$alamat            = $_POST ['alamat'];
				$tlpn              = $_POST ['tlpn'];
				$kerusakan         = $_POST ['kerusakan'];
				$kelengkapan       = $_POST ['kelengkapan'];
				$penerimabarang    = $_POST ['penerimabarang'];
				$teknisi           = $_POST ['teknisi'];
				$kondisibrg        = $_POST ['kondisibrg'];
				
				$penyerahanbarang  = $_POST ['penyerahanbarang'];
				$biaya             = $_POST ['biaya'];
				$no = $_POST['no'];

				$data = $conn->prepare("UPDATE dataservis SET nmbarang = ?, nmpemilik = ?, alamat = ?, tlpn = ?, kerusakan = ?, kelengkapan = ?, penerimabarang = ?, teknisi = ?, kondisibrg = ?,  penyerahanbarang = ?, biaya = ? WHERE no = ?");
				$data->bind_param('sssssssssssi', $nmbarang, $nmpemilik, $alamat, $tlpn, $kerusakan, $kelengkapan, $penerimabarang, $teknisi, $kondisibrg,  $penyerahanbarang, $biaya, $no);

				if ($data->execute()){
				header("location:../transaksi.php?alert=update");
			} else {
				header ("location:../transaksi.php?alert=gagal");
			}
			
			}
?>