<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=PATH . '/public/css/styles.css'?>">
    <?=$this->getMeta();?>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="header-row">
                <div class="header-contact">
                    <span>Телефон: (499) 340-94-71</span> <br>
                    <span>Email: info@future-group.ru</span>
                </div>
                <div class="header-logo">
                    <img src="../../../public/img/header/logo.png" alt="Логотип шапки">
                </div>
            </div>
            <h2 class="head-title">Комментарии</h2>
        </div>
    </div>
</header>

<?=$content;?>

<footer class="footer">
    <div class="container">
        <div class="footer-contents">
            <div class="footer-logo">
                <img src="../../../public/img/footer/footer-log.png" alt="Логотип подвала">
            </div>
            <div class="footer-contacts">
                <span>Телефон: (499) 340-94-71</span> <br>
                <span>Email: info@future-group.ru</span>
                <address>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</address>
                <span class="bottom">© 2010 - 2014 Future. Все права защищены</span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>