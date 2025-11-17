<?php
include "header.php";
include "koneksi.php";
?>

<?php
$id = $_GET['id'];
$sqlEdit = mysqli_query($konek, "SELECT * FROM user WHERE id='$id'");
$e = mysqli_fetch_assoc($sqlEdit);
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-4 col-lg-4">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-4">
          <h3 class="text-center mb-4 text-primary fw-bold">Edit Pengguna</h3>

          <form method="post" action="proses_edituser.php">
            <input type="hidden" name="id" value="<?php echo $e['id']; ?>" />

            <div class="mb-3">
              <label for="username" class="form-label fw-semibold">Username</label>
              <input 
                type="text" 
                class="form-control" 
                id="username" 
                name="username" 
                value="<?php echo $e['username']; ?>" 
                required
              >
            </div>

            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Password</label>
              <input 
                type="password" 
                class="form-control" 
                id="password" 
                name="password" 
                value="<?php echo $e['password']; ?>" 
                required
              >
            </div>

            <div class="d-flex justify-content-between mt-4">
              <button type="submit" class="btn btn-success px-4 rounded-pill shadow-sm">✒️ Update</button>
              <a href="tbl_user.php" class="btn btn-secondary px-4 rounded-pill shadow-sm">↩️ Batal</a>
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
