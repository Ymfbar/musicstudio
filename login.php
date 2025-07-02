<?php
include 'config.php';

// Redirect jika sudah login
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: dashboard.php");
    exit;
}

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hindari SQL Injection dengan prepared statements
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // Verifikasi password dengan password_verify()
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Username atau password salah.";
        }
    } else {
        $error = "Username atau password salah.";
    }
    $stmt->close();
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
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-dark">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center form-label">
                Belum punya akun? <a href="register.php">Daftar sekarang</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>