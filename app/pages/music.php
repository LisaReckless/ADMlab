<div class="content">
    <span class="content__name">Музыка</span>
    <div class="page music">
        <?php foreach (get_data_from_table('music') as $row) {
            echo ('<div class="music" onclick=window.location.href="' . $row['url'] . '">' .
                    '<img src="' . $row['picture'] . '">' .
                    '<span>' . $row['name'] . '</span>' . 
                    '<span>' . $row['description'] . '</span>' . 
                    '</div>');
        }
        ?>
    </div>
</div>