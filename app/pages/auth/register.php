<div class="content">
    <span class="content__name">Авторизация | Регистрация</span>
    <div class="page auth">
        <form>
            <input type="text" placeholder="Логин" name="login">
            <input type="password" placeholder="Пароль" name="password">
            <button type="submit">Зарегистрироваться</button>
            <button type="submit" onclick="event.preventDefault(), window.location.href='./index.php?page=auth/auth'">Уже зарегистрированы?</button>
        </form>
    </div>
</div>