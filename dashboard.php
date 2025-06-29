<?php
include 'config.php';

// Cek apakah user sudah login, jika belum redirect ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

include 'includes/header.php';
?>

<div class="alert alert-success" role="alert">
    Selamat datang, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>! Anda telah berhasil login.
</div>

<h2 class="mt-4">Dashboard Pengguna</h2>
<p>Ini adalah halaman pribadi Anda. Anda bisa menambahkan konten khusus pengguna di sini.</p>

<div class="card mt-4 bg-dark border-secondary">
    <div class="card-header">
        Informasi Akun
    </div>
    <div class="card-body">
        <p><strong>ID Pengguna:</strong> <?php echo $_SESSION['id']; ?></p>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
        <p>...</p>
    </div>
</div>

<?php
include 'includes/footer.php';
?>