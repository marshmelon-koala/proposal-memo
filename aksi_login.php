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
	 
		// cek jika user login sebagai superior marcom
		if(($data['nama_lengkap'] == "Chandra Riadi") || ($data['level'] == "Marcom Manager")){
	 
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
			$_SESSION['level'] = $data['level'];
			// alihkan ke halaman dashboard superior
			header("location:index_superior.php");
	 
		// cek jika user login sebagai peer atau branch manager
		}else if(($data['level'] == "Peer") || ($data['level'] == "Branch Manager") || ($data['level'] == "Head of Regional")){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
			$_SESSION['region'] = $data['region'];
			$_SESSION['level'] = $data['level'];

			// alihkan ke halaman dashboard peer
			header("location:main.php");
	 
		// cek jika user login sebagai muhammad zabih
		}else if($data['nama_lengkap'] == "Muhammad Zabih"){
			//buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
			$_SESSION['level'] = $data['level'];
			//alihkan ke halaman dashboard superior1
			header("location:index_superior1.php");
		// cek jika user login sebagai andre ligianto	
		}else if($data['nama_lengkap'] == "Andre Ligianto"){
			//buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
			$_SESSION['level'] = $data['level'];
			//alihkan ke halaman dashboard superior2
			header("location:index_superior2.php");
		}
		else{
	 
			// alihkan ke halaman login kembali
			header("location:index.php?pesan=gagal");
		}	
	}else{
		header("location:index.php?pesan=gagal");
	}
 
?>