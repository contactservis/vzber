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
        <title>Эмитенту</title>
        <meta charset="utf-8"/>
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
                <img src="img/logo.png">
            </div>
            <div class="col-xl-8 main_menu_box">
                <ul class="nav main_menu">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">ГЛАВНАЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projekt.php">О ПРОЕКТЕ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="investor.php"><span class="active">ИНВЕСТОРУ</span></a>
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
    <!--Банеер-->
    <div class="top-banner1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-center my-5 order-3 order-md-1">
                    <div class="slayder_text">
                        <div class="slayder_text_top">Эмитенту</div>
                        <div class="slayder_text_mid">Получить деньги на развитие бизнеса</div>
                        <div class="slayder_text_bot">и финансирование проектов</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center my-5 order-2">
                    <img src="img/main_banner_new.png" class="mw-100" alt="инвестиционный сервис Зберополис"/>
                </div>
            </div>
        </div>
    </div>
    <!--Блок как стать инвестором-->
    <div class="container kak_sat_investr mt-5 pb-md-5">
        <h2>Стать эмитентом</h2>
        <h3>ZBEROPOLIS</h3>
        <div class="row mt-4">
            <div class="col-md-6">
                <p>это сервис, который позволяет небольшим компаниям привлечь на короткий срок деньги, к примеру, на пополнение оборотных средств или текущие выплаты. Эмитентом может стать любая коммерческая организация или индивидуальный предприниматель, зарегистрированные на территории Российской Федерации.</p>
                <p>Механизм финансирования основан на краудфандинговой модели, когда множество инвесторов вкладывают относительно небольшие суммы (от нескольких тысяч до нескольких сотен тысяч рублей), в результате чего</p>
            </div>
            <div class="col-md-6">
                <p>собирается необходимый объем денежных средств для финансирования того или иного проекта. Главное, что теперь между Вами и Инвесторами нет банка, Вы получаете возможность привлечь инвестиции напрямую.</p>
                <p>Объем привлекаемых средств по каждому проекту – от 500 000 рублей до 10 000 000 рублей. Сроки привлечения средств на начальном этапе развития проекта – от 1 месяца до 1 года.</p>
            </div>
        </div>
    </div>
    <!--Блок с проектами-->
    <div class="container projects">
        <div class="row">
            <div class="col-xl-12 col-sm-12">
                <h2 class="text-center head_block">ПРОЕКТЫ</h2>
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
    <!--Как вложить деньги-->
    <div class="container kak_poluchit_dengi mt-5">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="text-center head_block">Как получить финансирование</h2>
            </div>
        </div>
        <div class="row">
            <!--Левая часть-->
            <div class="col-xl-6 col-lg-6">
                <div class="media mt-5">
                    <img  src="img/inv_p1.png" alt="Generic placeholder image">
                    <div class="media-body ml-3 ml-md-5">
                        <h3>Зарегистрируйтесь на сайте</h3>
                        <p>заполните форму и получите доступ к личному кабинету Эмитента</p>
                    </div>
                </div>
                <div class="media mt-5">
                    <img src="img/inv_p2.png" alt="Generic placeholder image">
                    <div class="media-body ml-3 ml-md-5">
                        <h3>Заключите брокерский договор</h3>
                        <p>Брокер действует в качестве поверенного (от имени Эмитента)</p>
                    </div>
                </div>
                <div class="media mt-5">
                    <img  src="img/inv_p3.png" alt="Generic placeholder image">
                    <div class="media-body ml-3 ml-md-5">
                        <h3>Откройте 2 счета</h3>
                        <p>для привлечения средств (счет типа «А») и погашения обязательств (счет типа «Б»)</p>
                    </div>
                </div>
            </div>
            <!--Правая часть-->
            <div class="col-xl-6 col-lg-6">
                <div class="media mt-5">
                    <img  src="img/inv_p4.png" alt="Generic placeholder image">
                    <div class="media-body ml-3 ml-md-5">
                        <h3>Создайте проект и укажите сумму займае</h3>
                        <p>подайте поручение Брокеру на заключение опционного договора с Инвестором</p>
                    </div>
                </div>
                <div class="media mt-5">
                    <img src="img/inv_p5.png" alt="Generic placeholder image">
                    <div class="media-body ml-3 ml-md-5">
                        <h3>Получите средства</h3>
                        <p>на свой расчетный счет и используйте их по своему усмотрению</p>
                    </div>
                </div>
                <div class="media mt-5">
                    <img  src="img/inv_p6.png" alt="Generic placeholder image">
                    <div class="media-body ml-3 ml-md-5">
                        <h3>Совершайте платежи</h3>
                        <p>погашайте задолженность по договору в установленный срок</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 pt-5">
        <h2 class="text-center">Условия</h2>
        <div class="row mt-5">
            <div class="col-md-6">
                <ul class="ul-zber">
                    <li>В случае несвоевременного погашения обязательств по опционному договору Инвестор вправе инициировать через Брокера обращение к коллекторам, активировав такое поручение через сайт. При этом в случае удачного взыскания средств, Инвестор должен будет заплатить через Брокера коллекторам определенный процент от возвращенной суммы.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="ul-zber">
                    <li>В случае просрочки более 30 дней по погашению любого опционного контракта, обязательства по всем действующим опционным контрактам этого Эмитента подлежат досрочному погашению. Брокер автоматически обращается в суд от имени всех клиентов по взысканию сумм по всем не истекшим опционным контрактам, ранее заключенным данным Эмитентом. Для покрытия судебных издержек используется гарантийная сумма, которая заранее формируется у Брокера за счет блокирования части средств, которые привлекает Эмитент при каждом заключении опционного договора (1-5% от суммы привлеченных средств).</li>
                </ul>
            </div>
        </div>
    </div>
    <!--Блок регистрация/авторизация-->
    <div class="border-bottom pb-5 mt-5">
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
            <div class="row box_reg_input" data-slide="1" data-sliderName="type">
                <div class="col-md-6">
                    <h2 class="text-left head_block">Регистрация Инвестора</h2>
                    <p>Инвестировать может любая коммерческая организация, индивидуальный предприниматель или частное лицо.</p>
                    <form action="">
                        <div class="row">
                            <div class="col-12 reg_usertype">
                                <label>
                                    <input type="radio" name="usertype">
                                    <div>Физическое лицо</div>
                                </label>
                                <label>
                                    <input type="radio" name="usertype">
                                    <div>Юридическое Лицо</div>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Фамилия" value="">
                            </div>
                            <div class="col-md-6">
                                <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Имя" value="">
                            </div>
                            <div class="col-md-6">
                                <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Отчество" value="">
                            </div>
                            <div class="col-md-6">
                                <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Телефон" value="">
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="vz_button btn">Регистрация</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1">
                    <div class="registration_dec_line">
                        <span class="bg-white gray_text p-3">Или</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="text-left head_block">Вход</h2>
                    <p>Привлечь инвестиции может любая коммерческая организация или индивидуальный предприниматель  </p>
                    <form action="">
                        <input type="text" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Логин" value="">
                        <input type="password" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Пароль" value="">
                        <button type="submit" class="vz_button btn">Войти</button>
                    </form>
                </div>
            </div>
            <div class="row box_reg_input" data-slide="2" data-sliderName="type" style="display: none">
                <div class="col-md-6">
                    <h2 class="text-left head_block">Регистрация Эмитента</h2>
                    <p>Привлечь инвестиции может любая коммерческая организация или индивидуальный предприниматель  </p>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Логин" value="">
                            </div>
                            <div class="col-md-6">
                                <input type="password" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Пароль" value="">
                            </div>
                            <div class="col-12">
                                <textarea name="" id="" class="form-control vz_input mb-3" rows="4" placeholder="Обоснование регистрации"></textarea>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="vz_button btn">Регистрация</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1">
                    <div class="registration_dec_line">
                        <span class="bg-white gray_text p-3">Или</span>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="text-left head_block">Вход</h2>
                    <p>Привлечь инвестиции может любая коммерческая организация или индивидуальный предприниматель  </p>
                    <form action="">
                        <input type="text" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Логин" value="">
                        <input type="password" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Пароль" value="">
                        <button type="submit" class="vz_button btn">Войти</button>
                    </form>
                </div>
            </div>
        </div><!--Блок регистрация/авторизация-->
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
        };
    </script>
    </body>
    </html>

<?php } ?>