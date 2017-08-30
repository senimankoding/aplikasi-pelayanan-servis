<?php

include '../config/koneksi.php';
date_default_timezone_set('Asia/Jakarta');

			
		// JIKA TOMBOL KIRIM DI KLIK DATA AKAN DISIMPAN KE DATABASE
		if (isset ($_POST['kirim'])){
			$data = $conn->prepare("INSERT INTO user (nama, username, password) VALUES (?,?,?)");
			$nama = $_POST ['nama'];
			$username = $_POST ['username'];
			$password = md5($_POST['password']);

			$data->bind_param('sss', $nama, $username, $password);

			if ($data->execute()){
				header("location:../user.php?alert=insert");
			} else {
				header ("location:../user.php?alert=gagal");
			}
		}
		
		//JIKA TOMBOL UPDATE DI KLIK MAKA PERINTAH DI BAWAH AKAN DIEKSEKUSI
		if (isset($_POST['update'])){ 
				$nama = $_POST['nama'];
				$username = $_POST['username'];
				$password = md5($_POST['password']) ;
				$id = $_POST['id'];

				$data = $conn->prepare("UPDATE user SET nama = ?, username = ?, password = ? WHERE id = ?");
				$data->bind_param('sssi', $nama, $username, $password, $id);

				if ($data->execute()){
				header("location:../user.php?alert=update");
			} else {
				header ("location:../user.php?alert=gagal");
			}
			
			}


		//PROSES UNTUK MENGHAPUS DATA
		if (isset($_GET['id'])){
			$id = $_GET['id'];
			$data = $conn->prepare("DELETE FROM user WHERE id = ?");
			$data->bind_param('i', $id);

			if ($data->execute()){
				header("location:../user.php?alert=hapus");
			} else {
				header ("location:../user.php?alert=gagal");
			}

		}



		// JIKA TOMBOL KIRIM DI KLIK DATA AKAN DISIMPAN KE TABLE DATASERVIS
		if (isset ($_POST['kirim2'])){
			$data = $conn->prepare("INSERT INTO dataservis (nmbarang, nmpemilik, alamat, tlpn, kerusakan, kelengkapan, tglditerima, penerimabarang) VALUES (?,?,?,?,?,?,?,?)");
			$nmbarang       = $_POST ['nmbarang'];
			$nmpemilik      = $_POST ['nmpemilik'];
			$alamat         = $_POST ['alamat'];
			$tlpn           = $_POST ['tlpn'];
			$kerusakan      = $_POST ['kerusakan'];
			$kelengkapan    = $_POST ['kelengkapan'];
			$tglditerima    = date("Y-m-d ");
			$penerimabarang = $_POST ['penerimabarang'];
			
			$data->bind_param('ssssssss', $nmbarang, $nmpemilik, $alamat, $tlpn, $kerusakan, $kelengkapan, $tglditerima, $penerimabarang );

			if ($data->execute()){
				header("location:../transaksi.php?alert=insert");
			} else {
				header ("location:../transaksi.php?alert=gagal");
			}
		}


		//JIKA TOMBOL UPDATE DI KLIK MAKA PERINTAH DI BAWAH AKAN DIEKSEKUSI
		if (isset($_POST['update2'])){ 
				$nmbarang          = $_POST ['nmbarang'];
				$nmpemilik         = $_POST ['nmpemilik'];
				$alamat            = $_POST ['alamat'];
				$tlpn              = $_POST ['tlpn'];
				$kerusakan         = $_POST ['kerusakan'];
				$kelengkapan       = $_POST ['kelengkapan'];
				$penerimabarang    = $_POST ['penerimabarang'];
				$teknisi           = $_POST ['teknisi'];
				$kondisibrg        = $_POST ['kondisibrg'];
				$tglambil          = date("Y-m-d ");
				$penyerahanbarang  = $_POST ['penyerahanbarang'];
				$biaya             = $_POST ['biaya'];
				$no = $_POST['no'];

				$data = $conn->prepare("UPDATE dataservis SET nmbarang = ?, nmpemilik = ?, alamat = ?, tlpn = ?, kerusakan = ?, kelengkapan = ?, penerimabarang = ?, teknisi = ?, kondisibrg = ?, tglambil = ?, penyerahanbarang = ?, biaya = ? WHERE no = ?");
				$data->bind_param('ssssssssssssi', $nmbarang, $nmpemilik, $alamat, $tlpn, $kerusakan, $kelengkapan, $penerimabarang, $teknisi, $kondisibrg, $tglambil, $penyerahanbarang, $biaya, $no);

				if ($data->execute()){
				header("location:../pengembalian.php?alert=update");
			} else {
				header ("location:../pengembalian.php?alert=gagal");
			}
			
			}

			

			//PROSES UNTUK MENGHAPUS DATASERVIS
		if (isset($_GET['no'])){
			$no = $_GET['no'];
			$data = $conn->prepare("DELETE FROM dataservis WHERE no = ?");
			$data->bind_param('i', $no);

			if ($data->execute()){
				header("location:../dataservis.php?alert=hapus");
			} else {
				header ("location:../dataservis.php?alert=gagal");
			}

		}
	

?>