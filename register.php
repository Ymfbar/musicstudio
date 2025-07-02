<?php
include 'config.php';

// Redirect jika sudah login
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: dashboard.php");
    exit;
}

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $error = "Semua kolom harus diisi.";
    } elseif ($password !== $confirm_password) {
        $error = "Konfirmasi password tidak cocok.";
    } elseif (strlen($password) < 6) {
        $error = "Password minimal 6 karakter.";
    } else {
        // Hashing password untuk keamanan
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Cek apakah username sudah ada menggunakan prepared statements
        $stmt_check_username = $conn->prepare("SELECT id FROM users WHERE username = ?");
        $stmt_check_username->bind_param("s", $username);
        $stmt_check_username->execute();
        $result_check_username = $stmt_check_username->get_result();

        if ($result_check_username->num_rows > 0) {
            $error = "Username sudah terdaftar. Silakan pilih username lain.";
        } else {
            // Masukkan data pengguna baru ke database menggunakan prepared statements
            $stmt_insert = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt_insert->bind_param("ss", $username, $hashed_password);

            if ($stmt_insert->execute()) {
                $success = "Registrasi berhasil! Silakan <a href='login.php'>login di sini</a>.";
            } else {
                $error = "Error: " . $stmt_insert->error;
            }
            $stmt_insert->close();
        }
        $stmt_check_username->close();
    }
}

include 'includes/header.php';
?>

<div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-lg">
            <div class="card-header bg-dark text-white text-center">
                <h3>Music Studio</h3>
            </div>
            <div class="card-body">
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($success)): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $success; ?>
                    </div>
                <?php endif; ?>
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Daftar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center form-label">
                Sudah punya akun? <a href="login.php">Login di sini</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>