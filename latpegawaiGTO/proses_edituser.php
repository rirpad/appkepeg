<?php
include 'koneksi.php';
$id    = $_POST['id'];
$username  = $_POST['username'];
$password   = $_POST['password'];

$cek = mysqli_query($konek, "SELECT * FROM user WHERE username='$username' AND password='$password'");

if ($cek->num_rows > 0) {
   // Jika data sudah ada
		echo "<script>
			alert('Tidak Jadi Disimpan, Tidak Ada Perubahan Data!');
			window.location.href = 'tbl_user.php';
		</script>";
} else {

	$update=mysqli_query($konek, "UPDATE user SET username='$username', password='$password'  WHERE id='$id'");

	if ($update) {
		echo "<script>
			alert('Data berhasil diupdate!');
			window.location.href = 'tbl_user.php';
		</script>";
	} else {
		echo "<script>
			alert('Gagal mengupdate data: " . mysqli_error($konek) . "');
			window.history.back();
		</script>";
	}
}	
?>
