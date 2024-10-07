<?php

$db_host = "sql7.freemysqlhosting.net";
$db_user = "sql7735983";
$db_pass = "WYWXUjqF3p";
$db_db = "site";

function get_data_from_table($sel_from){
    global $db_host, $db_user, $db_pass, $db_db;

    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_db);
    $sql = 'SELECT * FROM ' . $sel_from;
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $rows;
}

function auth_user($name, $password){
    global $db_host, $db_user, $db_pass, $db_db;

    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_db);
    $sql = 'SELECT token FROM users WHERE name="'.$name.'" and password="'.$password.'"';
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if ($rows) {
        return $rows[0]['token'];
    }
    return null;
}

function add_row_news(){
    global $db_host, $db_user, $db_pass, $db_db;

    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_db);
    $sql = 'INSERT INTO '.$_POST['table'].' (name, added, picture, description) VALUES ("'.$_POST['name'].'", "'.$_POST['added'].'", "'.$_POST['picture'].'", "'.$_POST['description'].'");';
    $result = mysqli_query($link, $sql);
}

function add_row_books(){
    global $db_host, $db_user, $db_pass, $db_db;

    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_db);
    $sql = 'INSERT INTO '.$_POST['table'].' (name, url, picture, description) VALUES ("'.$_POST['name'].'", "'.$_POST['url'].'", "'.$_POST['picture'].'", "'.$_POST['description'].'");';
    $result = mysqli_query($link, $sql);
}

function add_row_music(){
    global $db_host, $db_user, $db_pass, $db_db;

    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_db);
    $sql = 'INSERT INTO '.$_POST['table'].' (name, url, picture, description) VALUES ("'.$_POST['name'].'", "'.$_POST['url'].'", "'.$_POST['picture'].'", "'.$_POST['description'].'");';
    $result = mysqli_query($link, $sql);
}

function add_row_pictures(){
    global $db_host, $db_user, $db_pass, $db_db;

    $link = mysqli_connect($db_host, $db_user, $db_pass, $db_db);
    $sql = 'INSERT INTO '.$_POST['table'].' (url) VALUES ("'.$_POST['url'].'");';
    $result = mysqli_query($link, $sql);
}
?>