<?php
require_once "koneksi.php";
$id = $_GET['id'];

$hapus=mysqli_query($konek, "DELETE FROM pegawai WHERE id='$id'");

if ($hapus) {
    echo "<script>
        alert('Data berhasil dihapus!');
        window.location.href = 'edit.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal menghapus data: " . mysqli_error($konek) . "');
        window.history.back();
    </script>";
}	  
?>
