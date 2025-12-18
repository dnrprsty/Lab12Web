<?php
if (isset($_SESSION['is_login'])) {
    header("Location: /projects/lab11_php_oop/artikel/index");
    exit;
}

$message = "";

if ($_POST) {
    $db = new Database();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='{$username}' LIMIT 1";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();

    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];

        header("Location: /projects/lab11_php_oop/artikel/index");
        exit;
    } else {
        $message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/projects/lab11_php_oop/assets/css/style.css">
</head>
<body style="background:#f6f8fb">

<div class="form" style="max-width:380px;margin:100px auto">
    <h3 style="text-align:center;margin-bottom:20px">Login</h3>

    <?php if ($message): ?>
        <p style="color:red"><?= $message ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="row">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="row">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button class="btn btn-primary" style="width:100%">Login</button>
    </form>
</div>

</body>
</html>
