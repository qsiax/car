<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Эх, прокачу!</title>
</head>
<body>
<section class="home">
    <header class="header">
        <div class="header__container _container">
            <div class="header__body">
                <a href="index.php" class="header__logo">Эх, прокачу!</a>
                <div class="header__buttons">
                        <a href="login.php" class="header__button">Войти</a>
                        <a href="index.php" class="header__button">Регистрация</a>
                </div>
            </div>
        </div>
    </header>
        <div class="home__container _container">
            <div class="home__body">
                <div class="home__wrapper">
                    <form class="home__form" action="auth.php" method="POST">
                        <div class="home__form-title">Вход в личный кабинет</div>
                        <input type="email" placeholder="Почта" name="email">
                        <input type="password" placeholder="Пароль" name="password">
                        <button type="submit">Войти</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>