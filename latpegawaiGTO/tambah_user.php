<?php
include "header.php";
?>

<!-- Tambah Admin -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4 col-lg-4">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <h3 class="text-center mb-4 text-primary">Tambah Pengguna</h3>
          
          <form method="post" action="proses_tmbuser.php">
            <div class="mb-3">
              <label for="username" class="form-label fw-semibold">Username</label>
              <input type="text" class="form-control" id="username" name="username" required autofocus>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

			<div class="d-flex justify-content-between mt-4">
              <button type="submit" class="btn btn-success px-4 rounded-pill shadow-sm">Simpan</button>
              <a href="tbl_user.php" class="btn btn-secondary px-4 rounded-pill shadow-sm">Batal</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>
