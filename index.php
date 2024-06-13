<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Эх, прокачу!</title>
</head>
<body>
    <section class="home" id="home">
        <header class="header">
            <div class="header__container _container">
                <div class="header__body">
                    <a href="index.php" class="header__logo">Эх, прокачу!</a>
                    <?php if($_COOKIE['auth'] == ''): ?>
                    <div class="header__buttons">
                        <a href="login.php" class="header__button">Войти</a>
                        <a href="index.php" class="header__button">Регистрация</a>
                    </div>
                    <?php else: ?>
                        <a href="logout.php" class="header__logout"><?=$_COOKIE['auth']?></a>
                    <?php endif; ?>
                </div>
            </div>
        </header>
            <div class="home__container _container">
                <div class="home__body">
                    <div class="home__wrapper">
                        <?php if($_COOKIE['auth'] == ''): ?>
                        <form class="home__form" action="register.php" method="POST">
                            <div class="home__form-title">Регистрация</div>
                            <input type="text" placeholder="ФИО" name="full_name">
                            <input type="text" placeholder="Телефон" name="phone">
                            <input type="email" placeholder="Почта" name="email">
                            <input type="text" placeholder="Водительское удостоверение" name="driver_f">
                            <input type="password" placeholder="Пароль" name="password">
                            <button type="submit">Зарегистрироваться</button>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
    </section>

    <section class="about">
        <div class="about__container _container">
            <div class="about__body">
                <div class="about__wrapper">
                    <div class="about__text">
                        <span>Добро пожаловать в Эх, прокачу!</span><br><br>

                        Мы рады приветствовать вас на нашем сайте, где вы можете быстро и легко забронировать автомобиль для любого случая. Наша миссия — предоставить вам надежный и удобный сервис, чтобы каждое ваше путешествие было комфортным и безопасным.
                    </div>
                </div>
                <div class="about__img">
                    <img src="img/3.jfif" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="banner__container _container">
            <div class="banner__body">
                <div class="banner__text">Оставьте заявку, и мы свяжемся с вами в ближайшее время, чтобы обсудить все детали бронирования и ответить на ваши вопросы. Мы ценим ваше время и готовы помочь вам в любое удобное для вас время.</div>
                <a href="#home" class="banner__button">Оставить заявку</a>
            </div>
        </div>
    </section>

    <section class="images">
        <div class="images__container _container">
            <div class="images__body">
                <div class="images__wrapper">
                    <div class="images__img">
                        <img src="img/1.jpg" alt="">
                    </div>
                    <div class="images__img">
                        <img src="img/7.png" alt="">
                    </div>
                    <div class="images__img">
                        <img src="img/2.jpg" alt="">
                    </div>
                </div>
                <div class="images__wrapper">
                    <div class="images__text">
                    Мы стремимся сделать процесс аренды автомобиля максимально простым и удобным для вас. <br>Вот как это работает: <br>
                    1. Выбор автомобиля <br>
                    2. Бронирование онлайн <br>
                    3. Получение автомобиля <br>
                    4. Поддержка клиентов
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer__container _container">
            <div class="footer__body">
                <div class="footer__copyright">Эх, прокачу! © 2024г</div>
            </div>
        </div>
    </footer>
</body>
</html>