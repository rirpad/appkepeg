<?php include "header.php"; ?>
<?php include "koneksi.php"; ?> 
<script>
document.body.style.background = "#CCE8F2";
</script> 
    <div class="container mt-5">
       
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="text-primary fw-bold mb-0">📖 TABEL EDIT/HAPUS</h4>
            <a href="formpegawai.php" class="btn btn-info rounded-pill shadow-sm px-3 fw-bold text-light">
              ➕ Tambah Data
            </a>
          </div>

          <div class="table-responsive">
            
			<table class="table table-hover align-middle text-center rounded-3" style="overflow:hidden;">

              <thead>
			  
                <tr>
                  <th class="bg-info text-light">No</th>
				  <th class="bg-info text-light">Aksi</th>
                  <th class="bg-info text-light">Nama</th>
                  <th class="bg-info text-light">NIP</th>
                  <th class="bg-info text-light">Jabatan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = mysqli_query($konek, "SELECT * FROM pegawai ORDER BY id DESC");
                $no = 1;
                while ($d = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                  <td class="text-end fw-semibold"><?= $no++; ?></td>
                  <td class="text-center">
                    <a href="editpegawai.php?id=<?= htmlspecialchars($d['id']); ?>" class="btn btn-warning btn-sm rounded-pill px-3 me-1">
                      ✒️ Edit
                    </a>
                    <a href="hapuspegawai.php?id=<?= htmlspecialchars($d['id']); ?>" class="btn btn-danger btn-sm rounded-pill px-3"
                      onclick="return confirm('Yakin ingin menghapus data ini?');">
                      🗑 Hapus
                    </a>
                  </td>
                  <td class="text-start"><?= htmlspecialchars($d['nama']); ?></td>
                  <td class="text-center"><?= htmlspecialchars($d['nip']); ?></td>
                  <td class="text-start"><?= htmlspecialchars($d['jabatan']); ?></td>
                </tr>
                <?php ;} ?>
              </tbody>
            </table>
          </div>
         
    </div> 
  
<?php include "footer.php"; ?>