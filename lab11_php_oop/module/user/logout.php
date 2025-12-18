<?php
session_start();
session_destroy();
header("Location: /projects/lab11_php_oop/user/login");
exit;
