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

function tambah_pesan($data) {
	global $koneksi;

	// Ambil data dari tiap element dalam form
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$subject = htmlspecialchars($data['subject']);
	$pesan = htmlspecialchars($data['pesan']);
	/*$gambar = htmlspecialchars($data['gambar']);*/

	// query insert data
	$query = "INSERT INTO pesan VALUES
			('', '$nama', '$email', '$subject', '$pesan')
		";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function tambah_pesan_meja($data) {
	global $koneksi;

	// Ambil data dari tiap element dalam form
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$no_hp = htmlspecialchars($data['no_hp']);
	$date = htmlspecialchars($data['date']);
	$jam = htmlspecialchars($data['jam']);
	$jumlah_orang = htmlspecialchars($data['jumlah_orang']);
	$pesan = htmlspecialchars($data['pesan']);

	// query insert data
	$query = "INSERT INTO pesan_meja VALUES
			('', '$nama', '$email', '$no_hp', '$date', '$jam', '$jumlah_orang', '$pesan')
		";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function hapus($id) {
	global $koneksi;

	mysqli_query($koneksi, "DELETE FROM pesan WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

function hapus_pesan_meja($id) {
	global $koneksi;

	mysqli_query($koneksi, "DELETE FROM pesan_meja WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}
?>