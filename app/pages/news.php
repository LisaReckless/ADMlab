<div class="content">
    <span class="content__name">Главные Новости</span>
    <div class="page news">
        <?php
        foreach (get_data_from_table('news') as $row) {
            echo ('<div class="news">' . 
                    '<span>' . $row['name'] . '</span>' .
                    '<span>' . $row['added'] . '</span>' .
                    '<div class="news__container">' .
                    '<img src="' . $row['picture'] . '">' .
                    '<span>' . $row['description'] . '</span>' . 
                    '</div>' . 
                    '</div>');
        }
        ?>
    </div>
</div>