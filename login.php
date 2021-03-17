<?php 
	// mengaktifkan session pada php
	session_start();
	 
	// menghubungkan php dengan koneksi database
	include 'config/koneksi.php';
	 
	// menangkap data yang dikirim dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	 
	// menyeleksi data user dengan username dan password yang sesuai
	$login = mysqli_query($connect, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'");
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);
	 
	// cek apakah username dan password di temukan pada database
	if($cek > 0){
		$data = mysqli_fetch_assoc($login);
		// cek jika user login sebagai superior
		if($data['nama_lengkap'] == "Munandar Wijaya"){
			// buat session login dan username
			$_SESSION['username'] 		= $username;
			$_SESSION['nama_lengkap'] 	= "Munandar Wijaya";
			$_SESSION['level'] 			= "Superior";
			// alihkan ke halaman dashboard superior
			header("location:index_superior.php");
	 
		// cek jika user login sebagai peer
		}
		if($data['level'] == "Superior"){
			// buat session login dan username
			$_SESSION['username'] 		= $username;
			$_SESSION['nama_lengkap'] 	= "Chandra Riadi";
			$_SESSION['level'] 			= "Superior";
			// alihkan ke halaman dashboard superior
			header("location:index_superior.php");
	 
		// cek jika user login sebagai peer
		}
		if($data['nama_lengkap'] == "Muhammad Zabih"){
			// buat session login dan username
			$_SESSION['username'] 		= $username;
			$_SESSION['nama_lengkap'] 	= "Muhammad Zabih";
			$_SESSION['level'] 			= "Superior";
			// alihkan ke halaman dashboard superior
			header("location:index_superior1.php");
	 
		// cek jika user login sebagai peer
		}
		if($data['nama_lengkap'] == "Andre Ligianto"){
			// buat session login dan username
			$_SESSION['username'] 		= $username;
			$_SESSION['nama_lengkap'] 	= "Andre Ligianto";
			$_SESSION['level'] 			= "Superior";
			// alihkan ke halaman dashboard superior
			header("location:index_superior2.php");
	 
		// cek jika user login sebagai peer
		} else if($data['level']=="Peer"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "Peer";
			// alihkan ke halaman dashboard peer
			header("location:main.php");
	 
		// cek jika user login sebagai hor
		} else if($data['level']=="Head of Region"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "Head of Region";
			// alihkan ke halaman dashboard peer
			header("location:halaman_superior.php");
	 
		// cek jika user login sebagai pengurus
		}
		else{
	 
			// alihkan ke halaman login kembali
			header("location:index.php?pesan=gagal");
		}	
	}else{
		header("location:index.php?pesan=gagal");
	}
 
?>