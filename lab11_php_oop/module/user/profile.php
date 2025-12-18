<?php
if (!isset($_SESSION['is_login'])) {
    header("Location: /projects/lab11_php_oop/user/login");
    exit;
}

$db = new Database();
$message = "";

if ($_POST) {
    $new_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $username = $_SESSION['username'];

    $db->query("UPDATE users SET password='$new_pass' WHERE username='$username'");
    $message = "Password berhasil diubah";
}
?>

<h2>Profil User</h2>

<div class="form" style="max-width:420px">
    <p><b>Nama:</b> <?= $_SESSION['nama'] ?></p>
    <p><b>Username:</b> <?= $_SESSION['username'] ?></p>

    <hr>

    <h4>Ubah Password</h4>

    <?php if ($message): ?>
        <p style="color:green"><?= $message ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="row">
            <label>Password Baru</label>
            <input type="password" name="password" required>
        </div>

        <button class="btn btn-primary">Update Password</button>
    </form>
</div>
