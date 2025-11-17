<?php
session_start();
include "koneksi.php";

// Jika tombol login diklik
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // QUERY CEK USER
    $sql  = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
    $cek  = mysqli_query($konek, $sql);

    // Jika data ditemukan
    if (mysqli_num_rows($cek) === 1) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $user;
        header("Location: dashboard.php");
        exit;
    } else {
        session_start();
		$error = "Username atau Password Salah!";
		$_SESSION['login_error'] = $error;
		header("Location: login.php");
		exit;
    }
}
?>