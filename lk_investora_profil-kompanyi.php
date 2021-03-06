<?php
if(!isset($_COOKIE['tryUser'])) {

    if(isset($_POST['codeUser'])){
        $codeUser = $_POST['codeUser'];
        if ($codeUser == '123qwe'){
            setcookie("tryUser", "yes", time()+3600);
            header("Refresh:0");
        }
    }
    include_once('loginform.php');

} else { ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Эмитент - Зберополис</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="fonts/roboto.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.zberopolis.css">
    <link rel="stylesheet" href="css/css.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <!--script src="js/script.js"></script-->
    <style>
        /*стили карты*/
        #map {
            width: 100%; height: 230px; padding: 0; margin: 0;
        }
        .my-hint {
            display: inline-block;
            padding: 5px;
            height: 45px;
            position: relative;
            left: -10px;
            width: 195px;
            font-size: 11px;
            line-height: 17px;
            color: #333333;
            text-align: center;
            vertical-align: middle;
            background-color: #faefb6;
            border: 1px solid #CDB7B5;
            border-radius: 20px;
        }
    </style>
</head>
<body>
<!--Шапка с телефоном-->
<div class="tel_container" style="height: 35px; background-color: #f2f2f2;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8"></div>
            <div class="col-xl-4 align-middle">
                <a href="#" class="float-right">Бесплатно по России 8 (800) 000 00 00</a>
            </div>
        </div>
    </div>
</div>
<!--навигационная панель-->

<?php require_once '_navbar.php';?>

<!--Банер-->
<div class="top-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
                <span class="top-banner-name">Little Gentrys</span>
                <span class="top-banner-description">интернет магазин детской одежды и обуви</span>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <span class="top-banner-rate">Ставка<br><span>7,52%</span></span>
                <span class="top-banner-date">Срок погашения<br><span>21.12.2018</span></span>
                <div><button class="btn btn-dark">Написать сообщение</button></div>
            </div>
        </div>
    </div>
</div>
<!--Содержание-->
<div class="zaemshik-description">
    <div class="container">
        <h3 class="font-weight-bold">Эмитент</h3>
        <div class="row">
            <div class="col-md-4">
                <img class="zaemshik-description-portret d-block" src="img/example-portret-man.jpg" alt="">
                <span class="h2 text-capitalize">Лупенко Владимир Владимирович</span>
                <span class="zaemshik-description-raiting d-block">Рейтинг: <span>5.1</span></span>
            </div>
            <div class="col-md-8">
                <h3>Реквизиты компании</h3>
                <div class="row">
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">Полное наименование</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">Общество с ограниченной ответственностью «КарФикс»</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">Сокращенное наименование</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">ООО «КарФикс»</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">Юридический ад</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">119180, г. Москва, ул. Б. Полянка, д. 56, стр. 3</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">Фактический адрес</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">115162, г. Москва, ул. Шаболовка, д. 31Б, 3 подъезд, 1 этаж</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">Генеральный директор</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">Лупенко Владимир Владимирович</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">ИНН</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">7706436472</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">КПП</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">770601001</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">ОГРН</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">1167746369471</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">ОКПО</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">01967810<br><br></div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">Расчетный счет</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">40702810402080001046</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">Полное название банка</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">АО «Альфа-Банк», г. Москва</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0 gray_text">БИК</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">044525593</div>
                    <div class="col-12 col-sm-5 mt-2 mt-lg-0">Корреспондентский счет</div>
                    <div class="col-12 col-sm-7 mt-2 mt-lg-0">30101810200000000593</div>
                </div>
                <h3>Обращение к коллекторам: </h3>
                <span class="gray_text">Отсутствует</span>
                <h2>О компании</h2>
                <p>Компания «ЛОТ-Золото» создана профессионалами ювелирного и ломбардного рынка с многолетним опытом работы в данной сфере.</p>
                <p>С 2014 года рынок ломбардов в РФ стал регулироваться Центробанком России, что внесло серьезные положительные изменения в работу.</p>
                <p>Основатели компании «ЛОТ-Золото» стали одними из пионеров реорганизации рынка и создания на нём Саморегулируемой Организации (СРО). Благодаря этому, они наладили рабочие и доверительные контакты с сотнями участников рынка ломбардов, поняли их потребности и предложили востребованную услугу в рамках новой компании «ЛОТ-Золото».</p>
                <p>Многие ломбарды, особенно мелкие игроки, регулярно сталкиваются с проблемой невыкупа залогов клиентами (золотые ювелирные изделия, монеты, золотые части и лом). Сбыт таких залогов является необходимостью ввиду высокой зависимости ломбарда от оборотных средств.</p>
                <h3>Сотрудники</h3>
                <div class="">
                    <div class="row">
                        <div class="col-12 container-slider">
                            <div class="carousel-sotruniky owl-carousel owl-theme-zber">
                                <div class="text-center">
                                    <img class="zaemshik-description-portret" src="img/example-portret-man.jpg" alt="">
                                    <span class="zaemshik-description-fi d-block">Андрей Жирных</span>
                                    <span class="zaemshik-description-post d-block gray_text">Генеральный директор</span>
                                </div>
                                <div class="text-center">
                                    <img class="zaemshik-description-portret" src="img/example-portret-man.jpg" alt="">
                                    <span class="zaemshik-description-fi d-block">Андрей Жирных</span>
                                    <span class="zaemshik-description-post d-block gray_text">Генеральный директор</span>
                                </div>
                                <div class="text-center">
                                    <img class="zaemshik-description-portret" src="img/example-portret-man.jpg" alt="">
                                    <span class="zaemshik-description-fi d-block">Андрей Жирных</span>
                                    <span class="zaemshik-description-post d-block gray_text">Генеральный директор</span>
                                </div>
                                <div class="text-center">
                                    <img class="zaemshik-description-portret" src="img/example-portret-man.jpg" alt="">
                                    <span class="zaemshik-description-fi d-block">Андрей Жирных</span>
                                    <span class="zaemshik-description-post d-block gray_text">Генеральный директор</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Бизнес-модель</h2>
                <h3>Проблема, которую решает бизнес</h3>
                <p>Каждый ломбард, который выдает займы под залог ювелирных изделий, ежемесячно сталкивается с проблемой реализации невостребованных залогов. Для небольших ломбардов это проблема, так как с конца 2015 года только 11 государственных заводов в России имеют право принимать золотой лом на переработку. Государственные заводы работают без предоплаты, долго заключают договоры и не работают с небольшими объемами.</p>
                <h3>Продукт (то, что продается клиенту)</h3>
                <p>Для скупщиков золотого лома и ломбардов  - обеспечение оборотного капитала за счет  быстрой оплаты за невостребованные остатки золотых изделий. <br>
                    Для аффинажных заводов  - обеспечение сырьем  в виде золотого лома.</p>
                <h3>Портрет потенциального клиента</h3>
                <p>Ломбарды и ломбардные сети в Европейской части России</p>
                <h3>Проблема, которую решает бизнес</h3>
                <ol>
                    <li>Группа компаний ЛОТ-Золото осуществляет выкуп невостребованных залогов  (ювелирных изделий, золотых украшений и т.д.) у ломбардов</li>

                    <li>Аккумулирует эти залоги в собственном сортировочном центре, оборудованном по банковским стандартам безопасности</li>

                    <li>Проводит экспертизу (химический анализ металла, на предмет выявления примесей и сортировку)</li>

                    <li>Формирует лоты (специальная упаковка, маркировка, сопровождающая документация)</li>

                    <li>Осуществляет транспортировку лотов на аффинажный завод с помощью специального перевозчика (Brinks)</li>

                    <li>Сдает лом на завод с государственной лицензией на переработку золота</li>

                    <li>Получает оплату от завода по фиксированной заранее цене</li>

                    <li>В группе компаний торговлю золотым ломом выполняют два юрлица: ООО "ЛОТ-Золото" и ООО "КВП-Скупка".</li>
                </ol>
                <h3>Что планируется сделать за привлеченные средства</h3>
                <p>Закупка золотого лома у ломбардов и быстрая транспортировка лома на аффинажные заводы.</p>
            </div>
        </div>
    </div>
</div>
<div class="zaemshik-resume-company">
    <div class="container">
        <h2>Резюме по компании</h2>
        <div class="row">
            <div class="col-sm-4">
                <span class="gray_text">Название юр. лица</span><br>
                Общество с ограниченной ответственностью «КарФикс»<br><br>
                <span class="gray_text">Инструменты инвестирования</span><br>
                Кредитование<br><br>
                <span class="gray_text">Юрисдикция</span><br>
                Российское право<br><br>
                <span class="gray_text">Сайт компании</span><br>
                <a href="#">www.lot-zoloto.ru</a><br><br>
            </div>
            <div class="col-sm-4">
                <span class="gray_text">Дата запуска компании</span><br>
                2016-05-16<br><br>
                <span class="gray_text">Стадия развития компании</span><br>
                Активные продажи<br><br>
                <span class="gray_text">Готовность к синдикату</span><br>
                Да<br><br>
            </div>
            <div class="col-md-4">
                <span class="gray_text">Головной офис</span>
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<!--Подвал-->
<footer>
    <div class="footer-tel-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 tel_box">
                    <span class="footer-tel-numb">8(800) 000 00 00</span>
                    <span class="footer-tel-text">Бесплатно по России</span>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer grey_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="img/logo_hd.png" alt="">
                </div>
                <div class="col-md-5 box_footer_podpiska">
                    <span class="subscribe_text d-block">Подписка на новости</span>
                    <span class="gray_text">Будьте в курсе всех событий</span>
                    <input type="text" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="E-mail">
                    <button type="submit" class="vz_button btn float-right">Подписаться</button>
                </div>
            </div
        </div>
    </div>
</footer>
<script>
    ymaps.ready(init);

    function init () {
        var myMap = new ymaps.Map("map", {
                center: [55.72094351429477,37.61397172883604],
                zoom: 17
            }, {
                searchControlProvider: 'yandex#search'
            }),
            // Создание макета содержимого хинта.
            // Макет создается через фабрику макетов с помощью текстового шаблона.
            HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
                "<b>{{ properties.object }}</b><br />" +
                "{{ properties.address }}" +
                "</div>", {
                    // Определяем метод getShape, который
                    // будет возвращать размеры макета хинта.
                    // Это необходимо для того, чтобы хинт автоматически
                    // сдвигал позицию при выходе за пределы карты.
                    getShape: function () {
                        var el = this.getElement(),
                            result = null;
                        if (el) {
                            var firstChild = el.firstChild;
                            result = new ymaps.shape.Rectangle(
                                new ymaps.geometry.pixel.Rectangle([
                                    [0, 0],
                                    [firstChild.offsetWidth, firstChild.offsetHeight]
                                ])
                            );
                        }
                        return result;
                    }
                }
            );

        var myPlacemark = new ymaps.Placemark([55.72094351429477,37.61397172883604], {
            address: "Москва, улица Шаболовка, 31сБ ",
            object: "ООО \"КарФикс\""
        }, {
            hintLayout: HintLayout
        });

        myMap.geoObjects.add(myPlacemark);
        $('.carousel-sotruniky').owlCarousel({
            loop:false,
            nav:false,
            dotsEach: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 5,
                    margin: 50,
                    autoWidth: true
                },
                544: {
                    items: 3,
                    stagePadding: 5,
                    margin: 15
                },
                768: {
                    items: 3,
                    stagePadding: 5,
                    margin: 15,
                },
                992: {
                    stagePadding: 0,
                    margin: 15,
                    items: 3
                }
            }
        });
    }

</script>
</body>
</html>
<?php } ?>