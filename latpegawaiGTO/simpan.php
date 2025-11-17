<?php
include 'koneksi.php';

$nama  = $_POST['nama'];
$nip   = $_POST['nip'];
$jabatan = $_POST['jabatan'];

$cek = mysqli_query($konek, "SELECT * FROM pegawai WHERE nip='$nip'");

if ($cek->num_rows > 0) {
    // Jika data sudah ada
		echo "<script>
			alert('Data Sudah Ada Yang Sama!');
			window.location.href = 'edit.php';
		</script>";
} else {

	$simpan=mysqli_query($konek, "INSERT INTO pegawai (nama, nip, jabatan)
						  VALUES ('$nama', '$nip', '$jabatan')");
						  
	if ($simpan) {
		echo "<script>
			alert('Data berhasil disimpan!');
			window.location.href = 'edit.php';
		</script>";
	} else {
		echo "<script>
			alert('Gagal menyimpan data: " . mysqli_error($konek) . "');
			window.history.back();
		</script>";
	}
}	  
?>