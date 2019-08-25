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
                        title="Знакомство с HTML, CSS, JavaScript">Знакомство с HTML, CSS, JavaScript</a>
                    </li>
                    <li>
                        <ul class="book__menu_main">
                            <li>
                                <a class="book__menu_item active" href="#introduction" 
                                title="Введение">Введение</a>
                            </li>
                            <li>
                                <a class="book__menu_item" href="#semantic-markup" 
                                title="Семантическая вёрстка">Семантическая вёрстка</a>
                            </li>
                            <li>
                                <a class="book__menu_item" href="#markup-validation" 
                                title="Валидный HTML">Валидный HTML</a>
                            </li>
                            <li>
                                <a class="book__menu_item" href="#css-selectors-and-rules" 
                                title="CSS-правила и селекторы">CSS-правила и селекторы</a>
                            </li>
                            <li>
                                <a class="book__menu_item" href="#divide-and-impera" 
                                title="Разделяй и властвуй">Разделяй и властвуй</a>
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
                    Начнём знакомство с jQuery с повторения (или изучения) основ правильного употребления 
                    связки HTML и CSS с небольшой примесью JavaScript.
                </p>
                <p id="book__text" class="book__text">
                    HTML — о нём стоит помнить две вещи – <b>семантический</b> и <b>правильный</b>.
                </p>



                <span class="course__subtitle">
                    <a href="#semantic-markup" id="semantic-markup">
                        Семантическая вёрстка
                    </a>
                </span>
                <p id="book__text" class="book__text">
                    Семантическая вёрстка HTML-документа подразумевает использование тегов по 
                    прямому назначению, т.е. если вам нужен заголовок — то вот тег
                    <code class="code__wrapper">&lt;h1&gt;</code> и собратья, необходимо табличное 
                    представление данных — используйте тег <code class="code__wrapper">
                    &lt;table&gt;</code> и только его.
                </p>
                <p class="book__text book__text_italic">
                    Иногда, избавляясь от табличной верстки, доходят до абсурда, и тег 
                    <code class="code__wrapper">&lt;table&gt;</code> становится изгоем, и его 
                    перестают использовать даже для табличного представления данных. Не стоит 
                    повторять эту ошибку.
                </p>
                <p id="book__text" class="book__text">
                    Семантическая вёрстка HTML-документа подразумевает использование тегов по 
                    прямому назначению, т.е. если вам нужен заголовок — то вот тег
                    <code class="code__wrapper">&lt;h1&gt;</code> и собратья, необходимо табличное 
                    представление данных — используйте тег <code class="code__wrapper">
                    &lt;table&gt;</code> и только его.
                </p>
                <p id="book__text" class="book__text">
                    Забегая чуть-чуть вперёд, стоит упомянуть теги из спецификации HTML5: 
                    <code class="code__wrapper">&lt;article&gt;</code>, <code class="code__wrapper">
                    &lt;aside&gt;</code>, <code class="code__wrapper">&lt;header&gt;</code>, 
                    <code class="code__wrapper">&lt;footer&gt;</code>, 
                    <code class="code__wrapper">&lt;menu&gt;</code>, <code class="code__wrapper">
                    &lt;section&gt;</code> и т.д. — используйте их, не бойтесь.
                </p>
                <p id="book__text" class="book__text">
                    Старайтесь избегать избыточных элементов на странице, большинство 
                    HTML-страниц грешат лишними блочными элементами:
                </p>
                <iframe width="100%" height="220" src="//jsfiddle.net/jumbee1573/s5407Lgp/5/embedded/html,result/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                <p id="book__text" class="book__text">
                    Данную конструкцию можно легко упростить, и при этом код станет более 
                    читаемым, изменения в CSS будут минимальными, или даже не потребуются:
                </p>
                <iframe width="100%" height="220" src="//jsfiddle.net/jumbee1573/s5407Lgp/5/embedded/html,result/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                <p id="book__text" class="book__text">
                    Ещё одним обязательным пунктом для создания «правильного» HTML является использование 
                    названий классов и идентификаторов, которые однозначно говорят нам о содержимом 
                    элемента, а не о каких-либо нюансах оформления. Приведу пример:
                </p>
                <table class="ui celled striped table">
                    <thead>
                        <tr>
                            <th colspan=2 class="center aligned">
                                Плохо
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                red, green и т.д.
                            </td>
                            <td>
                                в какой-то момент захотите дизайн через CSS поменять – и элемент с классом 
                                «red» станет синим; или возитесь, бегаете по всем страницам и меняйте red 
                                на blue, чтоб потом ещё раз начать по новой
                            </td>
                        </tr>
                        <tr>
                            <td>
                                wide, small и т.д.
                            </td>
                            <td>
                                сегодня широкий, а завтра?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                h90w490
                            </td>
                            <td>
                                наверное, это элемент с высотой 90px и шириной 490px; или я ошибаюсь? 
                                а в смартфоне тот же класс влезает в экран?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                b_1, ax_9
                            </td>
                            <td>
                                ничего не говорящие названия, которые завтра вылетят из памяти
                            </td>
                        </tr>
                        <tr>
                            <td>
                                color1, color2, ...
                            </td>
                            <td>
                                иногда встречается для «скинованных» сайтов, но создаются такие 
                                классы во имя лени
                            </td>
                        </tr>
                        <tr>
                            <td>
                                element1...20
                            </td>
                            <td>
                                такое тоже встречается и ничем хорошим не пахнет
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p id="book__text" class="book__text">
                    И примеры правильного именования:
                </p>
                <table class="ui celled striped table">
                    <thead>
                        <tr>
                            <th colspan=2 class="center aligned">
                                Хорошо
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                logo, content
                            </td>
                            <td>
                                логотип, основной контент
                            </td>
                        </tr>
                        <tr>
                            <td>
                                menu, submenu
                            </td>
                            <td>
                                меню и подменю
                            </td>
                        </tr>
                        <tr>
                            <td>
                                even, odd
                            </td>
                            <td>
                                чётный и нечётный элементы списка (хотя для подобных задач 
                                проще использовать CSS-операторы :nth-child(even) и :nth-child(odd), 
                                опять же из-за возможного в будущем сдвига элементов)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                navigation
                            </td>
                            <td>
                                постраничная навигация
                            </td>
                        </tr>
                        <tr>
                            <td>
                                copyright
                            </td>
                            <td>
                                информация о лицензировании
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p id="book__text" class="book__text">
                    Есть ещё один момент – это форматирование HTML- и CSS-кода. 
                    Я не буду заострять на нём внимание, но весь код в книге будет 
                    отформатирован отступами, и, возможно, это даст свои плоды в 
                    ваших творениях.
                </p>


                <span class="course__subtitle">
                    <a href="#markup-validation" id="markup-validation">
                        Валидный HTML
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



                <span class="course__subtitle">
                    <a href="#css-selectors-and-rules" id="css-selectors-and-rules">
                        CSS-правила и селекторы
                    </a>
                </span>
                <p id="book__text" class="book__text">
                    Теперь приступим к CSS, и начнём, пожалуй, с расшифровки аббревиатуры CSS. Это Cascading 
                    Style Sheets, дословно «каскадная таблица стилей», но:
                </p>
                <p id="book__text" class="book__text">
                    <i>— Почему же она называется каскадной?</i> — представьте себе каскад водопада, вот вы 
                    стоите на одной из ступенек каскада с чернильницей в руках, и выливаете её содержимое в 
                    воду — вся вода ниже по каскаду будет окрашиваться в цвет чернил. Применив эту аналогию 
                    на HTML — создавая правило для элемента, вы автоматически применяете его на все дочерние 
                    элементы (конечно, не все правила так работают, но исключения обсудим позже) — то есть, 
                    происходит «наследование стилей от элементов-родителей».
                </p>
                <p id="book__text" class="book__text">
                    <i>— Зачем мне всё это?</i> — работая с jQuery, вы должны «на отлично» читать правила CSS, 
                    а также уметь составлять CSS-селекторы для поиска необходимых элементов на странице. 
                    Практически все задачи, которые вы будете решать с помощью jQuery, начинаются с поиска 
                    необходимого элемента на странице, так что <b>знание CSS-селекторов обязательно</b>.
                </p>
                <p id="book__text" class="book__text">
                    Но давайте обо всём по порядку, возьмём следующий простенький пример вполне семантического HTML
                </p>
                <iframe width="100%" height="1100" src="//jsfiddle.net/jumbee1573/s5407Lgp/9/embedded/html,result/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                <p id="book__text" class="book__text">
                    Это пример простого и правильного HTML с небольшим добавлением CSS. Давайте разберём селекторы 
                    в приведённом CSS-коде (я умышленно не выносил CSS в отдельный файл, ибо так наглядней):
                </p>
                <p id="book__text" class="book__text">
                    <ul class="book__text_list">
                        <li>
                            <code class="code__wrapper">body</code> — данные правила будут применены к тегу 
                            <code class="code__wrapper">&lt;body&gt;</code> и всем его потомкам, запомните: настройки 
                            шрифтов распространяются вниз «по каскаду»
                        </li>
                        <li>
                            <code class="code__wrapper">h1, h2, h3</code> — мы выбираем теги <code class="code__wrapper"
                            >&lt;h1&gt;</code>, <code class="code__wrapper">&lt;h2&gt;</code>, 
                            <code class="code__wrapper">&lt;h3&gt;</code>, и устанавливаем цвет шрифта для 
                            данных тегов и их потомков
                        </li>
                        <li>
                            <code class="code__wrapper">#content</code> — выбираем элемент с «id="content"», 
                            настройки отступов не распространяются на потомков, они будут изменяться только 
                            для данного элемента
                        </li>
                        <li>
                            <code class="code__wrapper">.box</code> — выбираем элемент с «class="box"», 
                            настройки отступов не распространяются на потомков, они будут изменяться только 
                            для данного элемента
                        </li>
                    </ul>
                </p>
                <p id="book__text" class="book__text">
                    Теперь подробнее и с усложнёнными примерами:
                </p>
                <table class="ui celled striped table">
                    <thead>
                        <tr>
                            <th colspan=2>
                                Селектор
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               h1 
                            </td>
                            <td>
                                ищем элементы по имени тега
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #container
                            </td>
                            <td>
                                ищем элемент по идентификатору «id=container» (<b>идентификатор уникален</b>, 
                                значит, на странице он должен быть только один)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                div#container
                            </td>
                            <td>
                                ищем <code class="code__wrapper">&lt;div&gt;</code> c идентификатором 
                                «container», но предыдущий селектор работает быстрее, а этот важнее
                            </td>
                        </tr>
                        <tr>
                            <td>
                                .news
                            </td>
                            <td>
                                выбираем элементы по имени класса «class="news"»
                            </td>
                        </tr>
                        <tr>
                            <td>
                                div.news
                            </td>
                            <td>
                                все элементы <code class="code__wrapper">&lt;div&gt;</code> c классом 
                                «news» (так работает быстрее в IE8, т.к. в нём не реализован метод 
                                <code class="code__wrapper">getElementsByClassName()</code>)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #wrap .post
                            </td>
                            <td>
                                ищем все элементы с классом «post» внутри элемента с «id="wrap"»
                            </td>
                        </tr>
                        <tr>
                            <td>
                                .cls1.cls2
                            </td>
                            <td>
                                выбираем элементы с двумя классами «class="cls1 cls2"»  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                h1,h2,.posts
                            </td>
                            <td>
                                перечисление селекторов, выберем всё перечисленное
                            </td>
                        </tr>
                        <tr>
                            <td>
                                .post > h2
                            </td>
                            <td>
                                выбираем элементы <code class="code__wrapper">&lt;h2&gt;</code>, 
                                которые являются непосредственными потомками элемента с классом 
                                «post»
                            </td>
                        </tr>
                        <tr>
                            <td>
                                a + span
                            </td>
                            <td>
                                будут выбраны все элементы <code class="code__wrapper">
                                &lt;span&gt;</code> следующие сразу за элементом <code 
                                class="code__wrapper">&lt;a&gt;</code>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                a[href^=http]
                            </td>
                            <td>
                                будут выбраны все элементы <code class="code__wrapper">
                                &lt;a&gt;</code> у которых атрибут «href» начинается с 
                                «http» (предположительно, все внешние ссылки)
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p id="book__text" class="book__text">
                    Возвращаясь к нашей аналогии с водопадом, представьте, что умников с 
                    чернильницей больше чем один и цвета разные, мы же в результате получим 
                    смешение цветов. Но это в жизни, а в CSS работают правила приоритетов:
                </p>
                <p id="book__text" class="book__text">
                    <ul class="book__text_list">
                        <li>
                            расчёт происходит по четырём весовым позициям 
                            <code class="code__wrapper">[0:0:0:0]</code>
                        </li>
                        <li>
                            стили заданные в атрибуте «style=""» имеют наибольший приоритет 
                            и получают единицу по первой позиции — <code class="code__wrapper">
                            [1:0:0:0]</code>
                        </li>
                        <li>
                            за каждый идентификатор элемента (<code class="code__wrapper">#id</code>) — 
                            <code class="code__wrapper">[0:1:0:0]</code>
                        </li>
                        <li>
                            за каждый класс (<code class="code__wrapper">.class</code>), 
                            либо псевдо-класс (<code class="code__wrapper">:pseudo</code>) 
                            — <code class="code__wrapper">[0:0:1:0]</code>
                        </li>
                        <li>
                            за каждый тег (<code class="code__wrapper">&lt;a&gt;</code>, 
                            <code class="code__wrapper">&lt;div&gt;</code>) — 
                            <code class="code__wrapper">[0:0:0:1]</code>
                        </li>
                        <li>
                            при этом <code class="code__wrapper">[1:0:0:0]</code> > 
                            <code class="code__wrapper">[0:x:y:z]</code> > <code 
                            class="code__wrapper">[0:0:x:y]</code> > 
                            <code class="code__wrapper">[0:0:0:x]</code>
                        </li>
                        <li>
                            при равенстве счета — снова тапки у того, кто объявлен последним
                        </li>
                    </ul>
                </p>
                <p id="book__text" class="book__text">
                    Не имеет значение в каком порядке вы будете добавлять стили на страницу, тут имеет вес только специфичность CSS-селектора.
                </p>



                <span class="course__subtitle">
                    <a href="#divide-and-impera" id="divide-and-impera">
                        Разделяй и властвуй
                    </a>
                </span>
                <p id="book__text" class="book__text">
                    Тут стоит запомнить несколько простых правил:
                </p>
                <p id="book__text" class="book__text">
                    <ul class="book__text_list">
                        <li>
                            выносим JavaScript во внешние файлы 
                        </li>
                        <li>
                            никогда не пишем inline обработчиков событий «onclick="some()"»
                        </li>
                        <li>
                            выносим CSS во внешние файлы
                        </li>
                        <li>
                            никогда не пишем inline стилей «style="color:red"»
                        </li>
                        <li>
                            и ещё разок для закрепления – никогда не пишем inline!
                        </li>
                    </ul>
                </p>
                <p id="book__text" class="book__text">
                    Теперь приведу код, за который следует что-нибудь ломать (это пример плохого 
                    кода, уточняю для тех, кто не понимает намёков):
                </p>
                <iframe width="100%" height="290" src="//jsfiddle.net/jumbee1573/s5407Lgp/11/embedded/html,result/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                <p id="book__text" class="book__text">
                    Неясно, почему же это плохо? Похоже, вам просто не приходилось менять дизайн 
                    для уже готового сайта :) Проясню суть проблемы: вам ставят задачу – «надо 
                    поменять цвет шрифта для всех страниц сайта», коих может быть три десятка. 
                    Это могут быть не только HTML-файлы, а страницы какого-то шаблонизатора, 
                    разбросанные по двум десяткам папок (и это ещё не самый плохой вариант). И 
                    тут появляется он — красный абзац. Вероятность услышать «слова поддержки» 
                    в адрес автора сего кода будет стремиться к единице. Насчет inline-обработчиков 
                    событий ситуация похожа. Вот представьте себе — пишете вы JavaScript-код, 
                    всё отлично, всё получается, пока вы не пытаетесь кликнуть по красному абзацу. 
                    Он оказывается вам не подвластен, и живёт своей собственной жизнью, игнорируя
                    все ваши усилия. Вы смотрите код, и опять кто-то услышит эти слова...
                </p>
                <p id="book__text" class="book__text">
                    При применении четырёх правил «красного абзаца» у вас должен будет получиться 
                    чистый и предсказуемый HTML код:
                </p>
                <iframe width="100%" height="130" src="//jsfiddle.net/jumbee1573/s5407Lgp/13/embedded/html,result/" 
                allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                <p id="book__text" class="book__text">
                    Стили можно будет легко повесить на <code class="code__wrapper">&lt;div&gt;</code> 
                    с идентификатором, как, собственно, и обработчик событий для нашего параграфа.
                </p>
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