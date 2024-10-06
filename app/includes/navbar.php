<div class="sidebar">
    <div class="menu">
        <a href="./index.php"><img src="./static/icons/home.svg"><span>Главная</span></a>
        <a href="./index.php?page=books"><img src="./static/icons/book.svg"><span>Книги</span></a>
        <a href="./index.php?page=music"><img src="./static/icons/music.svg"><span>Музыка</span></a>
        <a href="./index.php?page=pictures"><img src="./static/icons/picture.svg"><span>Картины</span></a>
        <?php if (isset($_COOKIE["X-AUTH"])) { ?>
            <a href="./index.php?page=admin"><img src="./static/icons/admin.svg"><span>Admin Panel</span></a>
        <?php } ?>
    </div>
    <div class="menu">
    <?php if (isset($_COOKIE["X-AUTH"])) { ?>
        <a href="./index.php?page=auth/logout"><img src="./static/icons/profile.svg"><span>Выход</span></a>
    <?php } else { ?>
        <a href="./index.php?page=auth/auth"><img src="./static/icons/profile.svg"><span>Вход</span></a>
    <?php } ?>
    </div>
</div>