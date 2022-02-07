<?php 
$koneksi = mysqli_connect("localhost", "root", "", "db_kopi");

function query($query) {
	global $koneksi;

	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $koneksi;

	// Ambil data dari tiap element dalam form
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);

	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	// query insert data
	$query = "INSERT INTO mahasiswa VALUES
			('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
		";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// Cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo "<script>
				alert('Pilih gambar terlebih dahulu!')
			  </script>";
		return false;	  
	}

	// Cek apakah yang diupload gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];

	// explode berfungsi sebagai pemisah String
	$ekstensiGambar = explode('.', $namaFile); 
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Yang anda upload bukan Gambar!')
			  </script>";
		return false;
	}

	// Cek jika ukurannya terlalu besar
	if ($ukuranFile  > 1000000) {
		echo "<script>
				alert('Ukuran gambar terlalu besar!')
			  </script>";
		return false;
	}

	// Lolos pengecekan, gambar siap diupload
	move_uploaded_file($tmpName, 'img/' . $namaFile);

	return $namaFile;
}

function hapus($id) {
	global $koneksi;

	mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

function ubah($data) {
	global $koneksi;

	// Ambil data dari tiap element dalam form
	$id = $data["id"];
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambar = htmlspecialchars($data['gambar']);

	// query ubah data
	$query = "UPDATE mahasiswa SET
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'

				WHERE id = $id
			";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function cari($keyword) {
	$query = "SELECT * FROM mahasiswa 
				WHERE 
		/*LIKE = menyerupai dengan menambahkan while cart atau % sebelum penulisan Variabel ataupun sesudah penulisan Variabel*/		
			nama LIKE '%$keyword%' OR
			nrp LIKE '%$keyword%' OR
			email LIKE '%$keyword%' OR
			jurusan LIKE '%$keyword%'
		";
	return query($query);	
}

function registrasi($data) {
	global $koneksi;


	// fungsi stripslashes() adalah untuk menghilangkan karakter slash( / atau \ ) agar karakter tersebut tidak masuk ke Database!.

	// fungsi strtolower() adalah untuk memaksa user memasukkan huruf kecil.

	$nama = htmlspecialchars(stripslashes($data["nama"]));
	$email = htmlspecialchars(stripslashes($data["email"]));

	// fungsi mysqli_real_escape_string() adalah untuk memungkinkan si user mamasukkan tanda kutip dan tanda kutipnya akan dimasukkan ke Database dengan aman.

	$password = htmlspecialchars(mysqli_real_escape_string($koneksi ,$data["password"]));

	// Cek username sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT email FROM user WHERE email = '$email'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('Username yang dipilih sudah Terdaftar !')
			  </script>";
		return false;	
	}


	// Cek apakah password yang dimaksukkan sama dengan password2 
	/*if ($password !== $password2) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai !')
			  </script>";
		return false;	  
	}*/

	// Enkripsi password
	// jangan pernah gunakan md5 untuk meng-Enkripsi password karena versi tersebut sudah usang.
	$password = password_hash($password, PASSWORD_DEFAULT);


	// Tambahkan user baru ke Database
	mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$nama','$email', '$password')");
	return mysqli_affected_rows($koneksi);
}