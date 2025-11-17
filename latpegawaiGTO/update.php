<?php
include 'koneksi.php';
$id    = $_POST['id'];
$nama = $_POST['nama'];
$nip  = $_POST['nip'];
$jabatan   = $_POST['jabatan'];

$cek = mysqli_query($konek, "SELECT * FROM pegawai WHERE nama='$nama' and nip='$nip' and jabatan='$jabatan'");

if ($cek->num_rows > 0) {
    // Jika data sudah ada
		echo "<script>
			alert('Tidak Jadi Disimpan, Tidak Ada Perubahan Data!');
			window.location.href = 'edit.php';
		</script>";
} else {

	$update=mysqli_query($konek, "UPDATE pegawai SET nama='$nama', nip='$nip', jabatan='$jabatan'  WHERE id='$id'");

	if ($update) {
		echo "<script>
			alert('Data berhasil diupdate!');
			window.location.href = 'edit.php';
		</script>";
	} else {
		echo "<script>
			alert('Gagal mengupdate data: " . mysqli_error($konek) . "');
			window.history.back();
		</script>";
	}
}	
?>
