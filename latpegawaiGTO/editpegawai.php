<?php
include "header.php";
require_once "koneksi.php";

$id = $_GET['id'];;
 
$sql = mysqli_query($konek, "SELECT * FROM pegawai WHERE id = '$id'");
$data = mysqli_fetch_assoc($sql);

if (!$data) {
	echo "<script>alert('Data tidak ditemukan'); window.location.href='edit.php';</script>";
	exit;
}
?>
<br>
<script>
document.body.style.background = "#CCE8F2";
</script>
<center>
<h1 class="mt-5">Latihan Aplikasi Pegawai</h1>

<h2 class="text-primary">Form Edit</h2>
</center>

<div class="container d-flex justify-content-center align-items-center vh-20">
    <form method="post" action="update.php">
	<input type="hidden" name="id" value="<?= htmlspecialchars($data['id']); ?>">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label text-front">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($data['nama']); ?>" required autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nip" class="col-sm-2 col-form-label text-front">NIP</label>
            <div class="col-sm-10">
                <input type="number" name="nip" class="form-control" value="<?= htmlspecialchars($data['nip']); ?>" required>
            </div>
        </div>
       <div class="row mb-3">
            <label for="jabatan" class="col-sm-2 col-form-label text-front">Jabatan&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <div class="col-sm-10">
                <input type="text" name="jabatan" class="form-control" value="<?= htmlspecialchars($data['jabatan']); ?>" required>
            </div>
        </div>		
        <div class="text-center">
            <button type="submit" class="btn btn-success fw-bold">✒️ Update</button>
			<a href="edit.php" class="btn btn-info text-light fw-bold">↩️ Batal</a>
        </div>
    </form>
</div>

<?php
include "footer.php";
?>