<!DOCTYPE html>
<?php
define('URL', 'http://localhost/Shop/');
define('IMG_DIR', 'libs/images/');
?>
<head>
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link href="<?php echo URL; ?>/libs/bootstrap/css/style.css" rel="stylesheet">
<link href="<?php echo URL; ?>/libs/bootstrap/css/media-queries.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<title>NOTEBOOKERS</title>
</head>
<body>
<div class="wrapper">
<header>
    <img class="logo" src="<?php echo IMG_DIR; ?>header.png" alt="header.png">
    <div class="name">
        <h1 class="up">notebookers</h1>
        <t class="up">интернет-магазин ноутбуков</t>
    </div>
    <div class= "number">
        <img class="phone" src="<?php echo IMG_DIR; ?>phone.png" alt="phone">
        <h1>+7(999) 999-99-99</h1>
        <t>Ждем вашего звонка с 10:00 до 23:00</t>
    </div>
    <menu>
    <div class="menu_1">
        <nav id="primary_nav_wrap">
        <ul>
            <li><a href="#">Apple</a></li>
            <li><a href="#">Игровые</a></li>
            <li><a href="#">Ультрабуки</a></li>
            <li><a href="#">Универсальные</a></li>
        </ul>
        </nav>
    </div>
    <div class="menu_2">
        <nav id="primary_nav_wrap">
        <ul>
            <li><a href="#">Доставка и оплата</a>
            <ul>
                <li class="dir"><a href="#">Lorem</a></li>
                <li class="dir"><a href="#">Ipsum</a>
                <li class="dir"><a href="#">Et cetera terra terra</a>
                <ul>
                    <li><a href="#">Lorem</a></li>
                    <li><a href="#">Ipsum</a></li>
                    <li><a href="#">Et cetera terra terra</a></li>
                </ul>
                </li>
            </ul>
            </li>
            <li><a href="#">Гарантия</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
        </nav>
    </div>

    </menu>
    </header>
<article>
<div class="preview">
    <div class="img_pre">
    <img class=pre src="<?php echo IMG_DIR; ?>notebook.png" alt="notebook.png">
    </div>
    <div class="img_pre_left">
    <img class=bor src="<?php echo IMG_DIR; ?>notebook2.png" alt="notebook.png">
    </div>
    <div class="img_pre_right">
    <img class=bor src="<?php echo IMG_DIR; ?>notebook3.png" alt="notebook.png">
    </div>
</div>
    <div class="heading">
    <h2>Apple MacBook 12</h2>
    <div class="buy_but">
    <h3>95 549 руб. <strike>98 450 руб.</strike></h3>
    </div>
    <div class="but">
    <button class = buy type="button" name="button">Купить</button>
    </div>

    <div class="text">
    <b class="in">Доступные цвета</b><br>
    <img class=color src="<?php echo IMG_DIR; ?>notebook_color.png" alt="notebook4.png"><br>
    <b>Характериситки:<br></b>
    <p class ="t">Производитель процессора  - Intel<br>
    Производитель чипсета видео – Intel<br>
    Тип процессора - Intel Core M<br>
    Тип процессора - Intel Core M<br>
    Предустановленная ОС - OS X El Capitan<br>
    Поверхность экрана – Глянцевая <br></p>
    </div>
    <div class="description">
    <b>Описание модели:<br></b>
    <p class ="t">Apple MacBook 12 - легкий, сверхкомпактный ноутбук с
        дисплеем Retina диагональю 12", мощным и очень энергоэффективным
        процессором Intel Core M, скоростным SSD-накопителем, реагирующим на
        силу нажатия трекпадом Force Touch и USB-C. Ёмкий аккумулятор позволяет
        работать до 10 часов без подзарядки. Трекпад нового MacBook открывает
        перед вами совершенно новые возможности. Конструкция трекпада Force
        Touch обеспечивает высокую чувствительность и стабильный отклик вне
        зависимости от того, в какой точке его поверхности вы нажимаете.
        Практически всё, что вам может понадобиться от ноутбука, теперь можно
        делать по беспроводной связи благодаря программному обеспечению Apple,
        которое задействует все возможности современных стандартов Wi-Fi и
        Bluetooth. </p>
    </div>
    </div>
</article>
<section>
    <div class="full_description1">
        <b>Полные технические характерики:</b><br>
        <div class="dot">
        <span class="dot_prop">Диагональ экрана:</span><span class="dot_value">12"</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Разрешение экрана:</span><span class="dot_value">2304x1440</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Модель процессора:</span><span class="dot_value">Intel Core m3 (1.1 ГГц)</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Количество ядер:</span><span class="dot_value">2</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Количество потоков:</span><span class="dot_value">4</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Объём оперативной памяти:</span><span class="dot_value">8192 МБ</span>
        </div>
    </div>

    <div class="full_description2">
        <b>Полные технические характерики:</b><br>
        <div class="dot">
        <span class="dot_prop">Чипсет видео:</span><span class="dot_value">:Intel HD Graphics 515</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Объём жесткого диска:</span><span class="dot_value">SSD 256 ГБ</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Тип аккумулятора:</span><span class="dot_value">Литий-полимерный</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Время работы от аккумулятора:</span><span class="dot_value">До 10 часов</span>
        </div>
        <div class="dot">
        <span class="dot_prop">Вес:</span><span class="dot_value">0.92 кг</span>
        </div>
    </div>

</section>
<section>
        <div class="full_description1">
        <b>Приимущества:</b><br>
        <ul>
            <li>Тонкий и легкий алюминиевый корпус разных цветов</li>
            <li>Качественный Retina-экран </li>
            <li>Отличный тачпад Force Touch</li>
            <li>Отсутствие вентиляторов</li>
        </ul>
        <p><b>Apple MacBook </b>
            последнего поколения получил новейший процессор Intel серии M
            с тактовой частотой 1,1 ГГц. Благодаря низкому тепловыделению
            процессора разработчикам удалось обойтись без вентилятора и создать
            особенно тонкий и лёгкий ноутбук.<br></p>
        <p><b>ВЫСОКАЯ ПРОИЗВОДИТЕЛЬНОСТЬ</b>
            Процессор обеспечивает высокое быстродействие при
            работе с ультрасовременными приложениями. При повышении нагрузки можно
            воспользоваться функцией Turbo Boost, которая временно повышает тактовую
            частоту, предотвращая появление задержек.<br></p>
        <p><b>ВИДЕОПОВТОР</b>
            Устройство поддерживает режим видеоповтора. В нём MacBook транслирует
            на внешний экран изображение с разрешением 4K, а также сохраняет
            максимальное качество картинки на встроенном дисплее.<br></p>

        </div>
        <div class="full_description2">
        <p><b>НЕВЕРОЯТНОЕ КАЧЕСТВО ИЗОБРАЖЕНИЯ</b>
            Обновлённый экран Retina получил IPS-матрицу, которая обеспечивает большие
                углы обзора, насыщенную цветовую гамму и очень высокую контрастность.
                Она также позволяет добиться превосходной детализации картинки за счёт
                разрешения 2304 x 1440. Плотность размещения пикселей настолько высока,
                что человек не в состоянии увидеть отдельные точки.<br></p>
        <p><b>ОТЛИЧНАЯ АВТОНОМНОСТЬ</b>
            Apple MacBook можно использовать в качестве портативной рабочей
            станции, не опасаясь быстрой разрядки батареи. Ёмкости аккумулятора
            хватает на 10 часов доступа к интернету через беспроводную сеть или 11
            часов просмотра видео. При полностью заряженной батарее девайс может
            провести до 30 дней в режиме ожидания.<br></p>
        </div>
    </section>
    <div class="section_reviews">
    <h2>Отзывы</h2>
    <p>
        Анатолий. 19.12.2015
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <br>
        Спасибо за оперативную доставку! Мои рекомендации!
    </p>
    <p>
        Мария Сысоева
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <img src="<?php echo IMG_DIR; ?>star.png" alt="star.png">
        <br>
        Я стандартно не была удивлена стойкостью ноута к испытаниям!
        Ни царапин, ни глюков не появилось с момента его использования.
    </p>
    <h2>Добавить отзыв</h2>
    <input type="text" name="" value="" placeholder="Ваше имя">
    <br>
    <p>Ваша оценка
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>border.png" alt="border.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>border.png" alt="border.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>border.png" alt="border.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>border.png" alt="border.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <img src="<?php echo IMG_DIR; ?>star_null.png" alt="star_null.png">
        <br>
        <textarea name="name" rows="3" cols="80" placeholder="Ваш отзыв"></textarea><br>
        <button class=review type="button" name="button">Добавить отзыв</button>
    </p>
    </div>
</div>
</body>
</html>
