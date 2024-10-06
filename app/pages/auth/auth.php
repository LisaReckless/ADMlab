<div class="content">
        <span class="content__name">Авторизация | Вход</span>
        <div class="page auth">
            <form method="POST" action="./index.php?page=auth/dologin" >
                <input type="text" placeholder="Логин" name="login">
                <input type="password" placeholder="Пароль" name="password">
                <button type="submit">Войти</button>
                <button type="submit" onclick="event.preventDefault(), window.location.href='./index.php?page=auth/register'">Нет аккаунта?</button>
            </form>
        </div>
    </div>