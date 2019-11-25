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
        <title>Инвестору</title>
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
        <!--Большой рекламный слайдер-->
        <div class="main_slayder">
            <div style="overflow: hidden; width: 100%; text-align: center; position: relative;">
                <img src="img/big_baner_inv.jpg" alt="инвестиционный сервис Зберополис"/> 
                <!--<div class="slayder_text"> 
                    <h1 style="font-size: 3rem;">Инвестируйте</h1>
                    <h3 style="font-size: 2.5rem; font-weight: 100; margin-top: -13px;">с доходностью свыше</h3>
                    <span style="font-size: 9rem; margin-top: -60px; display: inline-block;">30%</span><span style="font-size: 2.5rem; font-weight: 100; margin-top: -18px; display: block; float: right; margin-right: 66px;">годовых</span>
                </div>-->
            </div>
        </div>
        <!--Блок как стать инвестором-->
        <div class="container kak_sat_investr">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <h2>Стать инвестором</h2>
                    <h3>ZBEROPOLIS</h3>
                    <p>это сервис, который дает частным инвесторам возможность вкладывать свои средства в различные направления: от предприятий малого и среднего бизнеса до государственных облигаций. Инвестором может стать любое физическое или юридическое лицо, зарегистрированное на территории Российской Федерации.</p>
                    <p>Вы сами решаете, куда вложить деньги и на каких условиях. Брокер не несет ответственности за выбор финансовых инструментов, поэтому все возможные риски потери средств лежат на Инвесторе. Однако можно существенно уменьшить свои риски, если инвестировать в финансовые инструменты нескольких компаний. Целесообразно распределить Ваши средства хотя бы между 5-10 различными, не зависящими друг от друга компаниями. Также имеет смысл вложить часть средств в государственные облигации либо облигации крупнейших российских эмитентов.</p>
                    <p>Мы предлагаем Вам инвестирование в финансовые инструменты с фиксированным доходом, которые четко позволяют определить срок и ставку ожидаемой доходности – это могут быть облигации, производные финансовые инструменты или структурные продукты (комбинации различных финансовых инструментов с четко определенной структурой будущих выплат).</p>
                </div>
                <div class="col-xl-6 col-lg-6 text-center">
                    <img src="img/zagl_inv.jpg" />
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
        <div class="container mt-2">
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
                                    <h5 class="card-title"><?=$item[0]?></h5>
                                      <div>
                                        <span style="margin-right: 8px;">Срок погашения<p>21.12.2018</p></span>
                                        <span style="margin-right: 8px;"><img src="img/procent.png"/></span>
                                        <span>Ставка: <p>7,52%</p></span>
                                      </div>
                                      <a class="btn btn-block" href="#" role="button">Инвестировать</a>                                   
                                </div>
                            </div>
                        <?php } ?>
                    
                
                </div>
        </div>
        <!--Как вложить деньги-->
        <div class="container kak_poluchit_dengi">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-center head_block">Как вложить деньги</h2>
                </div>
            </div>            
            <div class="row" style="margin-top: 65px;">
                <!--Левая часть-->
                <div class="col-xl-6 col-lg-6">
                    <div class="media">
                        <img  src="img/inv_p1.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h3>Зарегистрируйтесь на сайте</h3>
                            <p>заполните форму и получите доступ к личному кабинету Инвестора</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/inv_p2.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h3>Заключите брокерский договор</h3>
                            <p>Брокер действует в качестве комиссионера (от своего имени)</p>
                        </div>
                    </div>
                    <div class="media">
                        <img  src="img/inv_p3.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h3>Откройте счет</h3>
                            <p>для получения дохода от инвестиций</p>
                        </div>
                    </div>
                </div>
                <!--Правая часть-->
                <div class="col-xl-6 col-lg-6">
                    <div class="media">
                        <img  src="img/inv_p4.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h3>Выберите проект для инвестирования</h3>
                            <p>подайте заявку Брокеру на заключение опционного договора с Эмитентом</p>
                        </div>
                    </div>
                    <div class="media">
                        <img src="img/inv_p5.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h3>Перечислите средства</h3>
                            <p>минимальная сумма вложений – 10 000 рублей<</p>
                        </div>
                    </div>
                    <div class="media">
                        <img  src="img/inv_p6.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h3>Получайте доход</h3>
                            <p>на свой расчетный счет или реинвестируйте средства в новые проекты</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Блок регистрация/авторизация-->
        <div class="container autorisation" style="margin-bottom:82px;">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-center head_block">Регистрация/Вход</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-sm-12">
                    <div class="rounded button_os"><span class="bt_sr_active"><span id="romb"></span>Инвестор</span><span><span id="romb"></span>Эмитент</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="text-left head_block">Регистрация</h2>
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
            <div class="container">
                <div class="row bottom_footer">
                    <div class="col-xl-7">
                                <img src="img/logo_hd.png" alt="">
                    </div>
                    <div class="col-xl-5 box_footer_podpiska">
                        <h3>Подписка на новости</h3>
                        <h4>Будьте в курсе всех событий</h4>
                        <input type="" name=""  class="form-control vz_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="E-mail">
                        <button type="" class="vz_button btn float-right">Подписаться</button>
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
                    margin:10,
                    nav:false,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                })
            };
        </script>
    </body>
</html>

<?php } ?>