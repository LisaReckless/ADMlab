<div class="content">
        <span class="content__name">Книги</span>
        <div class="page books">
        <?php foreach (get_data_from_table('books') as $row) {
            echo ('<div class="book" onclick=window.location.href="' . $row['url'] . '">' .
                    '<img src="' . $row['picture'] . '">' .
                    '<span>' . $row['name'] . '</span>' . 
                    '<span>' . $row['description'] . '</span>' . 
                    '</div>');
        }
        ?>
        </div>
    </div>