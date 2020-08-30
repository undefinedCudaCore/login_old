<?php
require __DIR__ . '/bootstrap.php';

if (isset($_SESSION['login']) || isset($_SESSION['login']) != 1) {
    header('Location: http://localhost/HomeWork/login/login.php');
    die();
}
if (!empty($_POST)) {
    $data[] = ['name' => $_POST['user'], 'pass' => md5($_POST['password'])];
    file_put_contents(__DIR__ .'/data.json', json_encode($data));
    $_SESSION['note'] = 'Valio, pridetas $_POST['user'].';
    header('Location: http://localhost/HomeWork/login/add-user.php');
    die();
}
?>

<?php 
if (isset($_SESSION['note'])) {
    echo $_SESSION['note'];
    unset($_SESSION['note']);
}

?>
<form action="http://localhost/HomeWork/login/add-user.php" method="post">

<input type="text" name="user" placeholder="username">New User Name<br>
<input type="text" name="password" placeholder="password">New User Password<br>

<button type="submit">Add</button>

</form>