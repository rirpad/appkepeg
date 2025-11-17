<?php
include 'koneksi.php';

$username  = $_POST['username'];
$password   = $_POST['password'];

$cek = mysqli_query($konek, "SELECT * FROM user WHERE username='$username' AND password='$password'");

if ($cek->num_rows > 0) {
    // Jika data sudah ada
		echo "<script>
			alert('Data Sudah Ada Yang Sama!');
			window.location.href = 'tbl_user.php';
		</script>";
} else {

	$simpan=mysqli_query($konek, "INSERT INTO user (username, password)
						  VALUES ('$username', '$password')");
						  
	if ($simpan) {
		echo "<script>
			alert('Data berhasil disimpan!');
			window.location.href = 'tbl_user.php';
		</script>";
	} else {
		echo "<script>
			alert('Gagal menyimpan data: " . mysqli_error($konek) . "');
			window.history.back();
		</script>";
	}
}	  
?>