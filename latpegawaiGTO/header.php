<?php
// Aktifkan semua jenis laporan error
error_reporting(E_ALL);
// Tampilkan error ke layar browser
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Cek session
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Latihan Pegawai</title>
<link rel="icon" type="image/png" href="images/bki-192.png" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

<nav class="navbar navbar-expand-lg bg-info p-3 navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="dashboard.php">DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold" aria-current="page" href="formpegawai.php">FORM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fw-bold" href="edit.php">EDIT/HAPUS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TABEL-TABEL
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tbl_user.php">Tabel User</a></li>
            <li><a class="dropdown-item" href="#">Tabel Kepala</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Tabel Satpel</a></li>
          </ul>
        </li>
		 <li class="nav-item">
          <a class="nav-link active fw-bold" href="pdf.php">NASKAH PDF</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active fw-bold" href="logout.php">KELUAR</a>
        </li>     
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-primary fw-bold text-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<br>