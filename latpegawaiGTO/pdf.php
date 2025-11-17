
<?php 
// Folder khusus tempat file PDF disimpan
$baseDir = __DIR__ . '/naskah/';

// Cek apakah user memilih file
$filename = isset($_GET['file']) ? basename($_GET['file']) : null;

// =============================
// MODE 1 → TAMPILKAN DAFTAR PDF
// =============================

if (!$filename) {
include "header.php";
?>

<br>

<?php
echo '

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-4 text-center">
<h3 class="mb-4">📖 Daftar File PDF</h3>
';

    // Ambil seluruh file PDF dari folder
    $files = glob($baseDir . "*.pdf");

    if (!$files) {
        echo "Tidak ada file PDF di folder naskah.";
        exit;
    }

    echo "<ul>";
    foreach ($files as $file) {
        // Ambil nama file saja
        $name = basename($file);

        // Link aman menuju pdf.php?file=nama.pdf
        echo '<center>
				<div class="card mb-2 shadow-sm col-md-6 col-lg-5">
					<div class="card-body d-flex justify-content-between align-items-center">
						<div>
							<i class="bi bi-file-earmark-pdf text-danger"></i> 
							<strong>' . htmlspecialchars($name) . '</strong>
						</div>
						<a class="btn btn-success btn-sm" href="pdf.php?file=' . urlencode($name) . '" target="_blank">
							Buka PDF
						</a>
					</div>
				</div>
				</center>
			';

    }
    echo "</ul>";
echo '</div>';

include "footer.php";	
exit;
}

// =============================
// MODE 2 → TAMPILKAN FILE PDF
// =============================

// Hanya izinkan ekstensi .pdf
if (pathinfo($filename, PATHINFO_EXTENSION) !== 'pdf') {
    die("Akses ditolak. Hanya file PDF yang diperbolehkan.");
}

// Lokasi file penuh
$filePath = $baseDir . $filename;

// Cek apakah file ada
if (!file_exists($filePath)) {
    die("File tidak ditemukan.");
}

// Header aman untuk menampilkan PDF
header("Content-Type: application/pdf");
header("Content-Disposition: inline; filename=\"" . $filename . "\"");
header("Content-Length: " . filesize($filePath));

// Tampilkan file PDF
readfile($filePath);
exit;
?>
 
