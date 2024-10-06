<?php include ('includes/header.php'); ?>
<?php include ('includes/navbar.php'); ?>
<?php include ('includes/dbhelper.php'); ?>
<?php
    if (isset($_GET['page'])) {
        include('pages/' . $_GET["page"]. '.php');
    } else {
        include ('pages/news.php');
    }
?>
<?php  ?>
<?php include ('includes/footer.php'); ?>

