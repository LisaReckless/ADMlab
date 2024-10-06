<div class="content">
        <span class="content__name">Admin Panel</span>
        <div class="page admin">
            <form action="./index.php?page=admin_add" method="POST">
                <span>Добавить новость</span>
                <input name="table" value="news" type="hidden">
                <input name="name" placeholder="Название записи">
                <input name="added" placeholder="Время добавления">
                <input name="picture" placeholder="URL картинки"> 
                <input name="description" placeholder="Описание">
                <button type="submit">Добавить</button>
            </form>
            <form action="./index.php?page=admin_add" method="POST">
                <span>Добавить книгу</span>
                <input name="table" value="books" type="hidden">
                <input name="name" placeholder="Название записи">
                <input name="picture" placeholder="URL картинки">
                <input name="url" placeholder="Ссылка"> 
                <input name="description" placeholder="Описание">
                <button type="submit">Добавить</button>
            </form>
            <form action="./index.php?page=admin_add" method="POST">
                <span>Добавить музыку</span>
                <input name="table" value="music" type="hidden">
                <input name="name" placeholder="Название записи">
                <input name="url" placeholder="Ссылка">
                <input name="picture" placeholder="URL картинки"> 
                <input name="description" placeholder="Описание">
                <button type="submit">Добавить</button>
            </form>
            <form action="./index.php?page=admin_add" method="POST">
                <span>Добавить картину</span>
                <input name="table" value="pictures" type="hidden">
                <input name="url" placeholder="URL картинки"> 
                <button type="submit">Добавить</button>
            </form>
        </div>

    </div>