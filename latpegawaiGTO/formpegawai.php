<?php
include "header.php";
?>
<br>
<script>
document.body.style.background = "#CCE8F2";
</script>
<center>
<h1 class="mt-5">Latihan Aplikasi Pegawai</h1>

<br>

<h2 class="text-primary">Form Inputan</h2>
</center>
<div class="container d-flex justify-content-center align-items-center vh-20">

    <form method="post" action="simpan.php">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label text-front">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" placeholder="Input Nama" required autofocus>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nip" class="col-sm-2 col-form-label text-front">NIP</label>
            <div class="col-sm-10">
                <input type="number" name="nip" class="form-control" placeholder="Input NIP" required>
            </div>
        </div>
       <div class="row mb-3">
            <label for="jabatan" class="col-sm-2 col-form-label text-front">Jabatan&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <div class="col-sm-10">
                <input type="text" name="jabatan" class="form-control" placeholder="Input Jabatan"required>
            </div>
        </div>		
        <div class="text-center">
            <button type="submit" class="btn btn-success text-light fw-bold">💾 Simpan</button>
			<a href="edit.php" class="btn btn-info text-light fw-bold">↩️ Batal</a>
        </div>
    </form>
</div>
<?php
include "footer.php";
?>
