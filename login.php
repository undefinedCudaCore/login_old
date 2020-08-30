<?php

require __DIR__ . '/bootstrap.php';

if (!empty($_POST)) {
    
    foreach ($data as $user) {
        if ($user['name'] === $_POST['user'] &&
        md5($user['pass']) === $_POST['password']) {
            $_SESSION['login'] = 1;
            header('Location: http://localhost/HomeWork/login/locked.php');
            die();
        }
    }

}

if (isset($_GET['loguot'])) {
    sleep(5);
    session_destroy();
    header('Location: http://localhost/HomeWork/login/login.php');
    die();
}

?>




<form action="http://localhost/HomeWork/login/login.php" method="post">

<input type="text" name="user" placeholder="username"> User Name<br>
<input type="password" name="password" placeholder="password"> User Password<br>

<button type="submit">Jungtis</button>

</form>