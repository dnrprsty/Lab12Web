<div class="menu">
    <a href="/projects/lab11_php_oop/home/index">Home</a>

    <?php if (isset($_SESSION['is_login'])): ?>
        <a href="/projects/lab11_php_oop/artikel/index">Artikel</a>
        <a href="/projects/lab11_php_oop/user/profile">Profil</a>
        <a href="/projects/lab11_php_oop/user/logout">Logout (<?= $_SESSION['nama'] ?>)</a>
    <?php else: ?>
        <a href="/projects/lab11_php_oop/user/login">Login</a>
    <?php endif; ?>
</div>
