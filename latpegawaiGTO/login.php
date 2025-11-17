<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Pegawai</title>
	<link rel="icon" type="image/png" href="images/bki-192.png"/>
    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #CCE8F2;
        }
        .login-card {
            border-radius: 25px;
            padding: 40px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-md-4">
        <div class="card shadow login-card">
		
			<div class="text-center">
				<img width="70" src="images/bki-192.png" alt="Logo">
			</div>	
			
				<h6 class="text-center"><b>BALAI KARANTINA HEWAN IKAN DAN TUMBUHAN GORONTALO</b></h6>
				<h6 class="text-center"><b><font color="blue">LATIHAN MEMBUAT APLIKASI KEPEGAWAIAN</font></b></h6>
				
            <h3 class="text-center">Login</h3> 
			
				<?php
				// Kiriman dari proses_login.php
				session_start();
				if (isset($_SESSION['login_error'])) {
					echo "<div class='alert alert-danger text-center fw-bold'>
							".$_SESSION['login_error']."
						  </div>";
					unset($_SESSION['login_error']);
				}
				?>		
				
            <form method="POST" action="proses_login.php">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" required class="form-control" placeholder="Masukkan username">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" required class="form-control" placeholder="Masukkan password">
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-2">Login</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
