<h2>Home</h2>

<p>Selamat datang di aplikasi Praktikum 12 PHP OOP.</p>

<?php if (isset($_SESSION['is_login'])): ?>
    <p>Anda login sebagai <b><?= $_SESSION['nama'] ?></b></p>
<?php else: ?>
    <p>Silakan login untuk mengakses menu.</p>
<?php endif; ?>
