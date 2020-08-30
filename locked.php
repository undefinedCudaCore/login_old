<?php
require __DIR__ . '/bootstrap.php';

if (isset($_SESSION['login']) || isset($_SESSION['login']) != 1) {
    header('Location: http://localhost/HomeWork/login/login.php');
    die();
}
?>
<a href="http://localhost/HomeWork/login/login.php?logout">Logout</a><br>

<?php
echo 'slaptas<br>';