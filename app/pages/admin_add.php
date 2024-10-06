<?php
$token = $_COOKIE['X-AUTH'];
if ($token) {
    switch($_POST['table']) {
        case "news":
            add_row_news();
            header('Location: /index.php?page=news');
            break;
        case "books":
            add_row_books();
            header('Location: /index.php?page=books');
            break;
        case "music":
            add_row_music();
            header('Location: /index.php?page=music');
            break;
        case "pictures":
            add_row_pictures();
            header('Location: /index.php?page=pictures');
            break;
    }
} else {
    header('Location: /index.php?page=auth/auth');
}
?>