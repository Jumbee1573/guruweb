<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css">
	<link rel="stylesheet" href="../css/course.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/courseMedia.css">
	<link rel="icon" type="image/png" href="../img/favicon.png" />
    <link rel="apple-touch-icon-precomposed" href="../img/favicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Знакомство с HTML, CSS, JavaScript</title>
</head>
<body>    

    <!-- <div class="preloader">
        <span class="preloader__animation">
            <img class="preloader__animation_atom" src="../img/logo.svg" alt="GuruWeb">
        </span>
    </div> -->

    <div class="top__button_grey">
        <a class="top__button"><i class="fas fa-chevron-up"></i></a>
    </div>
    
	<main class="book">
        <aside class="book__aside"  id="book__visible_false">
            <div class="book__back book__item_border">
                <div class="book__back_item">
                    <a href="../index.php"><i class="fas fa-arrow-circle-left"></i></a>
                </div>
            </div>
            <nav class="book__menu">
                <ul class="book__menu_wrapper">
                    <li>
                        <a class="book__menu_item book__menu_item_title book__item_border" href="#" 
                        title="Знакомство с HTML, CSS, JavaScript">Подключаем, находим, готовим</a>
                    </li>
                    <li>
                        <ul class="book__menu_main">
                            <li>
                                <a class="book__menu_item active" href="#introduction" 
                                title="Введение">Введение</a>
                            </li>
                            <li>
                                <a class="book__menu_item" href="#semantic-markup" 
                                title="Семантическая вёрстка">Будь готов</a>
                            </li>
                            <li>
                                <a class="book__menu_item" href="#markup-validation" 
                                title="Валидный HTML">Оптимизируем выборки</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="book__mrc">
                <span class="book__mrc_description"> 
					БГУИР Филиал "Минский радиотехнический колледж"
                </span>
            </div>
        </aside>
        <article class="article__animation" id="content__article">
            <header class="article__header">
                <button class="menu__button" onclick="bookMenu()">
                    <i class="fas fa-bars"></i>
                </button>
            </header>
            
            <section class="section__wrapper">
                <span class="course__subtitle">
                    <a href="#introduction" id="introduction">
                        Введение
                    </a>
                </span>
                <p id="book__text" class="book__text">
                    Базу подготовили, теперь пора перейти к непосредственному изучению jQuery. 
                    Всё начинается с подключения библиотеки. И уже на этом этапе мы можем пойти 
                    несколькими путями:
                </p>
                <p id="book__text" class="book__text">
                    <ol class="book__text_list">
                        <li>
                            Скачиваем jQuery с домашней страницы проекта <a href="http://jquery.com/" 
                            target="blank">http://jquery.com/</a> и положим рядышком с нашей 
                            HTML-страничкой (советую скачать development-версию — всегда интересно 
                            покопаться в исходном коде :):
                            <p id="book__text" class="book__text">
                                <iframe width="100%" height="150" src="//jsfiddle.net/jumbee1573/s5407Lgp/14/embedded/html,result/" 
                                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                            </p>
                            <p class="book__text book__text_italic">
                                Данный способ хорош для работы в offline или при слишком медленном соединении 
                                с интернетом. Отдельно стоит обратить внимание на путь — скрипты собраны в 
                                отдельной папке «js». И это не случайно, нужно приучать себя к порядку.
                            </p>
                        </li>
                        <li>
                            Используем CDN. Я предпочитаю сервис от компании Google, но есть ещё Microsoft и Яндекс, 
                            а так же универсальный <a href="http://cdnjs.com/" target="blank">http://cdnjs.com/</a>, 
                            последний, кстати, размещает много популярных плагинов, за что им отдельное спасибо:
                            <p id="book__text" class="book__text">
                                <iframe width="100%" height="150" src="//jsfiddle.net/jumbee1573/s5407Lgp/16/embedded/html,result/" 
                                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                            </p>
                        </li>
                        <li>
                            С использованием менеджера пакетов NPM устанавливаем искомую библиотеку. 
                            Данный менеджер позволяет устанавливать очень много разнообразных библиотек 
                            и пакетов, за всем и не уследить.
                        </li>
                    </ol>
                </p>



                <span class="course__subtitle">
                    <a href="#semantic-markup" id="semantic-markup">
                        Будь готов
                    </a>
                </span>
                <iframe width="100%" height="170" src="//jsfiddle.net/jumbee1573/s5407Lgp/18/embedded/html,result/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                </p>
                <p id="book__text" class="book__text">
                    Только подобный код ничего не сделает, так как на момент выполнения на странице ещё не 
                    будет тегов <code class="code__wrapper">&lt;h2&gt;</code> – слишком рано выполняется 
                    скрипт, до загрузки всего HTML-документа. Для того, чтобы код сработал верно, мы должны 
                    либо поместить код после искомого <code class="code__wrapper">&lt;h2&gt;</code>, а то 
                    и сразу в самый низ страницы, либо использовать метод «.ready()» для отслеживания 
                    события «load» нашего «document»:
                </p>
                <iframe width="100%" height="220" src="//jsfiddle.net/jumbee1573/s5407Lgp/20/embedded/html,result/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                <p id="book__text" class="book__text">
                    Также можно использовать сокращённый вариант без явного вызова метода «.ready()»:
                </p>
                <iframe width="100%" height="180" src="//jsfiddle.net/jumbee1573/s5407Lgp/22/embedded/html,result/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                <p id="book__text" class="book__text">
                    Вы можете создать сколь угодно много подобных функций, не обязательно весь 
                    необходимый функционал помещать в одну.
                </p>
                <p class="book__text book__text_italic">
                    <code class="code__wrapper">$()</code> — это синоним для <code class="code__wrapper">
                    jQuery()</code>. Чтобы у вас не возникало конфликтов с другими библиотеками за 
                    использование «$», советую ваш код оборачивать в анонимную функцию следующего 
                    вида (best practice):
                </p>
                <iframe width="100%" height="200" src="//jsfiddle.net/jumbee1573/s5407Lgp/25/embedded/js/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>


                <span class="course__subtitle">
                    <a href="#markup-validation" id="markup-validation">
                        Оптимизируем выборки
                    </a>
                </span>
                <p id="book__text" class="book__text">
                    Зелёный маркер W3C validator'а – это правильно, и к этому надо 
                    стремиться, так что не забывайте закрывать теги да прописывать 
                    обязательные параметры. Приведу пример HTML-кода, в котором согласно 
                    спецификации HTML 5 допущено шесть ошибок, найдите их:
                </p>
                <iframe width="100%" height="300" src="//jsfiddle.net/jumbee1573/s5407Lgp/8/embedded/html,result/" 
                    allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
            </section>
            
        </article>
    </main>
    <script>
        let bookMenuWrapperA = document.querySelectorAll('.book__menu_wrapper a');
    
        for(let i = 0; i < bookMenuWrapperA.length; i++) {
            if(bookMenuWrapperA[i].innerHTML.length > 28) {
                bookMenuWrapperA[i].innerHTML = 
                bookMenuWrapperA[i].innerHTML.slice(0, 28) + '...';
            }
        }

        if (window.matchMedia("(max-width: 424.98px)").matches) {
            for(let i = 0; i < bookMenuWrapperA.length; i++) {
                if(bookMenuWrapperA[i].innerHTML.length > 24) {
                    bookMenuWrapperA[i].innerHTML = 
                    bookMenuWrapperA[i].innerHTML.slice(0, 24) + '...';
                }
            }
        }
    </script>
    <script>
        $(window).on('load', function () {
            $('body').css('overflow', 'auto');
            var $preloader = $('.preloader'),
                $svg_anm   = $preloader.find('.preloader__animation');
            $svg_anm.fadeOut();
            $preloader.delay(100).fadeOut('slow');
        });
        $('body').css('overflow', 'hidden');
    </script>

	<script src="../tJs/jquery.js"></script>
    <script src="../tJS/main.js"></script> 
    <script src="../tJS/jqueryJs.js"></script>
</body>
</html>