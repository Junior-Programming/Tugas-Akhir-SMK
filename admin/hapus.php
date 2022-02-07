<?php 
require '../functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "
		<script>
			alert('Pesan Berhasil dihapus!');
			document.location.href = 'tables-general.php'
		</script>
	";
} else {
	echo "
		<script>
			alert('pesan Gagal Dihapus!');
			document.location.href = 'tables-general.php'
		</script>
	";
}

if (hapus_pesan_meja($id)) {
	
	echo "
		<script>
			alert('Pesan Berhasil dihapus!');
			document.location.href = 'tables-data.php'
		</script>
	";
} else {
	echo "
		<script>
			alert('pesan Gagal Dihapus!');
			document.location.href = 'tables-data.php'
		</script>
	";
}
?>