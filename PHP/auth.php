<?php
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost','root','root','ugrasuservices');
$result = $mysql->query("SELECT * FROM `users1` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if(empty($user)) {
    echo "Пользователь не найден";
    exit();
}

setcookie('userid', $user['id'], time() + 3600, "/");
setcookie('userpriv', $user['privilege'], time() + 3600, "/");

header('Location: http://localhost/UGRASUServices/Pages');
$mysql -> close();
?>