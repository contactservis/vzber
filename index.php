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
        <title>Zберополис - онлайн площадка для привлечения инвестиций в малый и средний бизнес</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Сервис, позволяющий физическим лицам инвестировать в малый и средний бизнес через брокера - лицензированного участника рынка ценных бумаг." />
        <link rel="stylesheet" href="fonts/roboto.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.zberopolis.css">
        <link rel="stylesheet" href="css/css.css">
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
        <div class="container">
            <div class="row" style="padding: 9px 0;">                
                    <div class="col-xl-4">                            
                        <img class="mw-100" src="img/logo.png">
                    </div>
                    <div class="col-xl-8 main_menu_box">
                        <ul class="nav main_menu">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php"><span class="active">ГЛАВНАЯ</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="projekt.php">О ПРОЕКТЕ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="investor.php">ИНВЕСТОРУ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="emitent.php">ЭМИТЕНТУ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="help.php">ПОМОЩЬ</a>
                            </li>
                        </ul>
                        <a href="reg.php" class="btn btn-outline-secondary float-right">ВХОД/РЕГИСТРАЦИЯ</a>
                    </div>                
            </div>
        </div>
        <!--Большой рекламный слайдер-->
        <div class="main_slayder">
            <div style="overflow: hidden; width: 100%; text-align: center; position: relative;">
                <img src="img/big_baner3.jpg" alt="инвестиционный сервис Зберополис"/>
                <div class="slayder_text">
                    <h1 style="font-size: 3rem;">Инвестируйте</h1>
                    <h3 style="font-size: 2.5rem;font-weight: 100;margin-top: 0px;">с доходностью свыше</h3>
                    <span style="font-size: 9rem;margin-top: 43px;display: inline-block;">30%</span><span style="font-size: 2.5rem;font-weight: 100;margin-top: 40px;display: block;float: right;margin-right: 66px;">годовых</span>
                </div>
            </div>
        </div>
        <!--Блок преимущества-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-center">Преимущества и условия</h2>
                </div>
            </div>
        </div>        
        <div class="container mt-5 pt-2">
            <div class="row owl-carousel preim-slider owl-theme-zber">
                <?php 
                $arr_preim = array(
                    array(
                        'img'   => 'img/icons8_natural_user_interface_2_100px 1.png',
                        'title' => 'Простота',
                        'text'  => 'Вам достаточно сделать 3 шага для того, чтобы стать инвестором, и 4 шага – чтобы стать эмитентом.'
                    ),
                    array(
                        'img'   => 'img/icons8_collaboration_100px 1.png',
                        'title' => 'Интерактивность',
                        'text'  => 'На платформе реализована дистанционная модель обслуживания, в которой и инвесторы, и эмитенты могут пройти весь перечень процедур удаленно.'
                    ),
                    array(
                        'img'   => 'img/icons8_clock_100px 1.png',
                        'title' => 'Скорость',
                        'text'  => 'Возможность инвестировать появляется уже на следующий день после регистрации. Запуск инвестиционных проектов осуществляется в течение 3-х дней.'
                    ),
                    array(
                        'img'   => 'img/icons8_e-commerce_100px 1.png',
                        'title' => 'Широкий выбор',
                        'text'  => 'Доступны объекты инвестирования от предприятий малого и среднего бизнеса до государственных облигаций.'
                    ),
                    array(
                        'img'   => 'img/icons8_helping_hand_100px 1.png',
                        'title' => 'Выгодные условия',
                        'text'  => 'Финансирование без залога и поручительств с индивидуальным графиком платежей.'
                    ),
                    array(
                        'img'   => 'img/icons8_combo_chart_100px 1.png',
                        'title' => 'Уникальная экономическая модель',
                        'text'  => 'Инвестиционная платформа реализована на базе профессионального участника рынка ценных бумаг – брокера, без банковского посредничества.'
                    ),
                    array(
                        'img'   => 'img/icons8_bill_100px 1.png',
                        'title' => 'Оптимизация налогов',
                        'text'  => 'Наличие единого налогового агента решает многие проблемы, в том числе позволяет уменьшить налоговую базу на размер убытков от отдельных инвестиций.'
                    ),
                    array(
                        'img'   => 'img/icons8_business_100px 1.png',
                        'title' => 'Встроенная диверсификация',
                        'text'  => 'Ограничение на инвестирование в ценные бумаги одного эмитента в пределах 20% от стоимости портфеля позволяет сбалансировать портфель и уменьшить риски.'
                    ),
                    array(
                        'img'   => 'img/icons8_cash_in_hand_100px 1.png',
                        'title' => 'Доступность',
                        'text'  => 'Для начала инвестирования достаточно 5000 рублей. Привлечь финансирование могут даже представители микробизнеса.'
                    )
                );
                foreach ($arr_preim as $item_p)  {
                ?>
                <div class="preim-block">
                    <div class="preim_block__item">
                        <div class="preim_img text-center">
                            <img src="<?=$item_p['img']?>">
                        </div>
                        <div class="preim_block__desc">
                            <h3><?=$item_p['title']?></h3>
                            <p><?=$item_p['text']?></p>
                        </div>
                    </div>                        
                </div>
                <?php } ?>                
            </div>
        </div>
        <!--Блок о сервисе-->
        <div class="container">
            <div class="row button_os_container">
                    <div class="button_os">
                        <span class="bt_sr_active" data-pointer="1" data-name="about">О сервисе</span><span data-pointer="2" data-name="about">Особенности сервиса</span>
                    </div>
            </div>
            <div class="row mt-5 pt-4" data-slide="1" data-sliderName="about">
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <img class="mw-100" src="img/main-about.png" alt="Зберополис инвестиционный сервис" />
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <h2>ZБЕРОПОЛИС</h2>
                    <h3 style="margin-top: 13px;">ОНЛАЙН-ПЛОЩАДКА ДЛЯ ПРИВЛЕЧЕНИЯ ИНВЕСТИЦИЙ В БИЗНЕС ПРОЕКТЫ</h3>
                    <p class="mt-3">С помощью сервиса ZBEROPOLIS физические лица (инвесторы) могут выдавать деньги в долг представителям малого и среднего бизнеса – юридическим лицам и индивидуальным предпринимателям (эмитентам).</p>
                    <p class="mt-4">Принцип работы сервиса основан на том, что множество инвесторов вкладывают относительно небольшие суммы (от тысячи до нескольких сотен тысяч рублей), в результате чего собирается необходимый объем денежных средств для финансирования того или иного проекта.</p>
                    <p class="mt-4">Все договора заключаются в электронном виде и автоматически генерируются в системе, поэтому эмитенту не нужно подписывать договор одновременно со всеми инвесторами.
                    Между вкладчиками и получателями финансирования нет банка. Каждый инвестор сам определяет, куда вложить деньги и на каких условиях.</p>
                </div>
            </div>
            <div class="row mt-5 pt-4" data-slide="2" data-sliderName="about" style="display: none">
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <img class="mw-100" src="img/main-about.png" alt="Зберополис инвестиционный сервис" />
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <h2>ZБЕРОПОЛИС2</h2>
                    <h3 style="margin-top: 13px;">ОНЛАЙН-ПЛОЩАДКА ДЛЯ ПРИВЛЕЧЕНИЯ ИНВЕСТИЦИЙ В БИЗНЕС ПРОЕКТЫ</h3>
                    <p class="mt-3">С помощью сервиса ZBEROPOLIS физические лица (инвесторы) могут выдавать деньги в долг представителям малого и среднего бизнеса – юридическим лицам и индивидуальным предпринимателям (эмитентам).</p>
                    <p class="mt-4">Принцип работы сервиса основан на том, что множество инвесторов вкладывают относительно небольшие суммы (от тысячи до нескольких сотен тысяч рублей), в результате чего собирается необходимый объем денежных средств для финансирования того или иного проекта.</p>
                    <p class="mt-4">Все договора заключаются в электронном виде и автоматически генерируются в системе, поэтому эмитенту не нужно подписывать договор одновременно со всеми инвесторами.
                    Между вкладчиками и получателями финансирования нет банка. Каждый инвестор сам определяет, куда вложить деньги и на каких условиях.</p>
                </div>
            </div>
        </div>
        <!--Блок с проектами-->
        <div class="container projects" style="margin-top: 100px;">
            <div class="row">
                <div class="col-xl-12 col-sm-12">
                    <h2 class="text-center">ПРОЕКТЫ</h2>
                </div>
            </div>
        </div>
        <div class="container container-slider pt-3">
                <div class="main_list_proekt owl-carousel owl-theme-zber">
                        <?php 
                            $arr = array(
                                array('КОФЕЙНЯ', 'img/proekt1.jpg'),
                                array('Перерабатывающий комплекс', 'img/proekt2.jpg'),
                                array('Добыча песка на речном карьере', 'img/proekt3.jpg'),
                                array('Сервис электронных платежей', 'img/proekt4.jpg'),
                                array('Добыча песка на речном карьере', 'img/proekt3.jpg'),
                                array('Сервис электронных платежей', 'img/proekt4.jpg')
                            );
                            foreach($arr as $item){
                        ?>
                            <div class="card">
                                    <img class="card-img-top" src="<?=$item[1]?>" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-title"><?=$item[0]?></h3>
                                    <p>Интернет магазин брендовой детской одежды и обуви</p>
                                    <div class="group-info">
                                        <div><img src="img/procent.png"/></div>
                                        <div>Ставка: <br><b>7,52%</b></div>
                                        <div>Срок погашения<br><b>21.12.2018</b></div>
                                    </div>
                                    <span class="group-btn">
                                        <a class="col btn btn-light flex mr-3" href="#" role="button">Подробнее</a>
                                        <a class="col btn btn-light" href="#" role="button">Инвестировать</a>
                                    </span>
                                </div>
                            </div>
                        <?php } ?>
                    
                
                </div>
        </div>
        <div class="container projects mt-3">
            <p class="text-center">
                <a href="#">Зарегистрируйтесь,</a> чтобы увидеть больше компаний.
            </p>
        </div>
        <!--Блок схема работы-->
        <div class="container shema_rabotu">
            <div class="row">
                <div class="col-xl-12 col-sm-12">
                    <h2 class="text-center head_block">Схема работы</h2>
                </div>
            </div>
            <div class="scheme-slider owl-carousel owl-theme-zber">
                <div class="row scheme-slider-item">
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <img class="mw-100" src="img/main-sheme.png" alt="Зберополис инвестиционный сервис" />
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0 box_investr">
                        <h2 class="mt-3">ДЛЯ ИНВЕСТОРОВ</h2>
                        <h3 class="mt-3">КАК ВЛОЖИТЬ ДЕНЬГИ</h3>
                        <ul class="ul-zber mt-3">
                            <li>Зарегистрируйтесь на сайте в качестве Инвестора.</li>
                            <li>Заключите брокерский договор и откройте счет.</li>
                            <li>Выберите проект с требуемой доходностью и подайте заявку Брокеру на заключение опционного договора с Эмитентом.</li>
                            <li>Инвестируйте от 1000 рублей на срок до 12 месяцев и получайте прибыль каждую неделю.</li>
                        </ul>
                    </div>
                </div>
                <div class="row scheme-slider-item">
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <img class="mw-100" src="img/main-sheme.png" alt="Зберополис инвестиционный сервис" />
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0 box_investr">
                        <h2 class="mt-3">ДЛЯ ИНВЕСТОРОВ</h2>
                        <h3 class="mt-3">КАК ВЛОЖИТЬ ДЕНЬГИ</h3>
                        <ul class="mt-3">
                            <li>Зарегистрируйтесь на сайте в качестве Инвестора.</li>
                            <li>Заключите брокерский договор и откройте счет.</li>
                            <li>Выберите проект с требуемой доходностью и подайте заявку Брокеру на заключение опционного договора с Эмитентом.</li>
                            <li>Инвестируйте от 1000 рублей на срок до 12 месяцев и получайте прибыль каждую неделю.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Блок регистрация/авторизация-->
        <div class="container autorisation">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-center head_block">Регистрация/Вход</h2>
                </div>
            </div>
            <div class="row button_os_container mb-2 mb-md-5">
                    <div class="button_os">
                        <span class="bt_sr_active" data-pointer="1" data-name="type">Инвестор</span><span data-pointer="2" data-name="type">Эмитент</span>
                    </div>
            </div>
            <div class="row">
                <div class="col-xl-6" data-slide="1" data-sliderName="type">
                    <h2 class="text-left head_block">Регистрация Инвестора</h2>
                    <p>Привлечь инвестиции может любая коммерческая организация или индивидуальный предприниматель  </p>
                </div>
                <div class="col-xl-6" data-slide="2" data-sliderName="type" style="display: none">
                    <h2 class="text-left head_block">Регистрация Инвестора</h2>
                    <p>Привлечь инвестиции может любая коммерческая организация или индивидуальный предприниматель  </p>
                </div>
                <div class="col-xl-1">
                    <div class="registration_dec_line border-right" style="height: 7rem; margin-top: 39px;"></div>
                </div>
                <div class="col-xl-5">
                    <h2 class="text-left head_block">Вход</h2>
                    <p>Привлечь инвестиции может любая коммерческая организация или индивидуальный предприниматель  </p>
                </div>
            </div>
            <div class="row box_reg_input">
                <div class="col-xl-3">
                    <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Физическое лицо">
                    <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Фамилия">
                    <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Отчество">
                    <button type="" class="vz_button btn">Регистрация</button>
                </div>
                <div class="col-xl-3">
                    <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Юридическое лицо">
                    <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Имя">
                    <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Телефон">
                </div>
                <div class="col-xl-1">                    
                    <p class="text-center" style="color:#b5b5b5; margin-top: 10px;">Или</p>
                    <div class="registration_dec_line border-right" style="height: 14rem;"></div>
                </div>
                <div class="col-xl-4">
                    <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Логин">
                    <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="Пароль">
                    <button type="" class="vz_button btn">Войти</button>
                </div>
            </div>
        </div>
        <!--Блок вопросы-->
        <div class="container questions">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="text-center head_block">Вопросы и ответы</h2>
                    </div>
                </div>
            <div class="row list_faq">
                <div class="col-xl-12">
                    <?php
                        $ar_help_quests = array(
                            array('title'=>'Кто может быть инвестором?', 'text'=>'ZБЕРОПОЛИС – это сервис, который дает частным инвесторам возможность вкладывать свои средства в различные направления: от предприятий малого и среднего бизнеса до государственных облигаций. Инвестором может стать любое физическое или юридическое лицо, зарегистрированное на территории Российской Федерации. '),
                            array('title'=>'Кто может привлечь деньги?', 'text'=>''),
                            array('title'=>'В какой форме происходит инвестирование', 'text'=>'Мы предлагаем Вам инвестирование в финансовые инструменты с фиксированным доходом, которые четко позволяют определить срок и ставку ожидаемой доходности – это могут быть облигации, производные финансовые инструменты или структурные продукты (комбинации различных финансовых инструментов с четко определенной структурой будущих выплат). '),
                            array('title'=>'На какой срок вкладываются средства?', 'text'=>''),
                            array('title'=>'Для чего  инвестору предоставляется возможность  вложения средств не только в малый бизнес, но и в государственные облигации крупных компаний?', 'text'=>'Мы предлагаем Вам инвестирование в финансовые инструменты с фиксированным доходом, которые четко позволяют определить срок и ставку ожидаемой доходности – это могут быть облигации, производные финансовые инструменты или структурные продукты (комбинации различных финансовых инструментов с четко определенной структурой будущих выплат).')
                        );
                        foreach($ar_help_quests as $key => $item_help){
                            ?>
                            <div class="box_help card" id="helpbox<?=$key?>">
                                <div class="card-header border-bottom-0"><span class="float-left box_head_title"><?=$item_help['title']?></span><span class="float-right icon_pl"></span></div>                                
                                <div class="card-body hide border-top" style="display:none;">                                    
                                    <p style="margin-top: 1.2rem;"><?=$item_help['text']?></p>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <!--Подвал-->
        <footer>
            <div class="grey_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 text-center tel_box">
                            <h2>8(800) 000 00 00</h2>
                            <h4>Бесплатно по России</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grey_bg2">
                <div class="container">
                    <div class="row bottom_footer justify-content-between">
                        <div class="col-md-5 col-lg-4 col-xl-3 text-center">
                            <img src="img/logo_hd.png" alt="">
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4 mt-5 mt-md-0 box_footer_podpiska">
                            <p>Будьте в курсе всех событий</p>
                            <input type="text" name=""  class="form-control vz_input grey_bg2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="E-mail">
                            <button type="submit" class="btn vz_button">Подписаться</button>
                        </div>
                        <div class="col-12 mt-5">
                            <p class="text-center gray_text">
                                © 2019 АО «НФК-Сбережения», ООО «НФК - ФинТех»<br>
                                Электронная почта: <a href="mailto:info@zberopolis.ru">info@zberopolis.ru</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
        <script>
            window.onload = function() {
                $('.main_list_proekt').owlCarousel({
                    loop:false,
                    nav:false,
                    dotsEach: true,
                    responsive: {
                        0: {
                            items: 1,
                            stagePadding: 5,
                            margin: 0,
                            autoWidth: true
                        },
                        544: {
                            items: 1,
                            stagePadding: 5,
                            margin: 15
                        },
                        768: {
                            items: 2,
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
                $('.preim-slider').owlCarousel({
                    loop:false,
                    nav:false,
                    responsive: {
                        0: {
                            items: 1,
                            stagePadding: 5,
                            margin: 0,
                            autoWidth: true
                        },
                        544: {
                            items: 1,
                            stagePadding: 5,
                            margin: 20
                        },
                        768: {
                            items: 2,
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
                $('.scheme-slider').owlCarousel({
                    loop:false,
                    margin:0,
                    nav:false,
                    items:1
                });
            };
        </script>
    </body>
</html>
                    <?php } ?>