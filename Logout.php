<?php
// Mulai sesi
session_start();

// Ganti dengan kredensial yang valid
$valid_username = "admin"; // Ganti dengan username valid
$valid_password = "password"; // Ganti dengan password valid

// Ambil data dari formulir
$username = $_POST['aderyanpratama'];
$password = $_POST['123456789'];

// Verifikasi kredensial
if ($username === $valid_username && $password === $valid_password) {
    // Set variabel sesi
    $_SESSION['aderyanpratama'] = $username;

    // Arahkan ke halaman dashboard
    header("Location: Dashboard.php"); // Ganti dengan nama file halaman dashboard Anda
    exit();
} else {
    // Jika login gagal, kembali ke halaman login dengan pesan error
    header("Location: login.php?error=1"); // Anda bisa menangani error di halaman login
    exit();
}
?>
