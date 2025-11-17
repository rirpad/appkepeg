<?php
include "header.php";
include "koneksi.php";
?>
 
<center>
<div class="container my-5">
  <div class="card shadow-lg border-0 rounded-4">
    <div class="card-body p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-primary fw-bold mb-0">📖 DAFTAR PENGGUNA</h3>
        <a href="tambah_user.php" class="btn btn-info rounded-pill shadow-sm px-3 fw-bold text-light">
         ➕ Tambah Pengguna
        </a>
      </div>
  
      <div class="table-responsive">
	  
        <table class="table table-hover align-middle text-center rounded-3" style="overflow:hidden;">
          <thead>
            <tr class="text-center">
              <th style="width: 5%;" class="bg-info text-light">No</th>
              <th style="width: 18%;" class="bg-info text-light">Aksi</th>
              <th class="bg-info text-light">Username</th>
              <th class="bg-info text-light">Password</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = mysqli_query($konek, "SELECT * FROM user ORDER BY id ASC");
            $no = 1;
            while ($d = mysqli_fetch_assoc($sql)) {
            ?>    
                <tr>
                  <td class='text-center fw-semibold'><?=$no;?></td>
                  <td class='text-center'>
                    <a href="edit_user.php?id=<?=$d['id'];?>" class="btn btn-warning btn-sm rounded-pill px-3">
                     ✒️ Edit
                    </a>
                    <a href="hapus_user.php?id=<?=$d['id'];?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-danger btn-sm rounded-pill px-3 ms-2">
                     🗑 Hapus
                    </a>
                  </td>
                  <td><?=$d['username'];?></td>
                  <td><?=$d['password'];?></td>
                  
                </tr>
			<?php	
                $no++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</center>
<?php
include "footer.php";
?>

