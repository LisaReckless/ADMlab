<?php
$token = auth_user($_POST['login'], $_POST['password']);
if ($token) {
    setcookie("X-AUTH", $token);
    header('Location: /index.php');
} else {
    header('Location: /index.php?page=auth/auth');
}
?>