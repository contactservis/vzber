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
        <meta name="description" content="Сервис, позволяющий физическим лицам инвестировать в малый и средний бизнес через брокера - лицензированного участника рынка ценных бумаг." />
        <link rel="stylesheet" href="fonts/roboto.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/css.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>      
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
                    <h3 style="font-size: 2.5rem; font-weight: 100; margin-top: -13px;">с доходностью свыше</h3>
                    <span style="font-size: 9rem; margin-top: -60px; display: inline-block;">30%</span><span style="font-size: 2.5rem; font-weight: 100; margin-top: -18px; display: block; float: right; margin-right: 66px;">годовых</span>
                </div>
            </div>
        </div>
        <!--Блок преимущества-->
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h2 class="text-center head_block">ПРЕИМУЩЕСТВА И УСЛОВИЯ</h2>
                    </div>
                </div>
                <div class="row">
                        <div class="col-xl-12" >
                            <div class="pic_box">
                                <div class="active_cir float-left" data="f"></div>
                                <div class="float-left" data="f"></div>
                                <div class="float-left" data="f"></div>
                                <div class="float-left" data="f"></div>                                                              
                            </div>
                        </div>
                </div>
        </div>        
        <div class="container blok_pre">
            <div class="row">
                <?php 
                $arr_preim = array(
                    array(
                        'img'   => 'img/inv_ico_pre.png',
                        'title' => 'ИНВЕСТРОМ МОЖЕТ СТАТЬ КАЖДЫЙ',
                        'text'  => 'Минимальная сумма инвестирования 10 000 руб.'
                    ),
                    array(
                        'img'   => 'img/fin_ico_pre.png',
                        'title' => 'БЫСТРОЕ ФИНАНСИРОВАНИЕ БЕЗ ЗАЛОГА',
                        'text'  => 'Сроки привличения средств от 1 месяца.'
                    ),
                    array(
                        'img'   => 'img/ob_ico_pre.png',
                        'title' => 'Широкий выбор объектов инвестирования',
                        'text'  => 'От предприятий малого и среднего бизнеса до государственных облигаций'
                    )
                );
                foreach ($arr_preim as $item_p)  {
                ?>
                <div class="col-xl-4">
                    <div>                        
                        <img src="<?=$item_p['img']?>">
                        <h3><?=$item_p['title']?></h3>
                        <p><?=$item_p['text']?></p>
                    </div>                        
                </div>
                <?php } ?>                
            </div>
        </div>
        <!--Блок о сервисе-->
        <div class="container blok_pre">
            <div class="row">
                <div class="col-xl-12 col-sm-12">
                    <div class="rounded button_os"><span class="bt_sr_active"><span id="romb"></span>О сервисе</span><span><span id="romb"></span>Особенности сервиса</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-1">
                    <h2 class="head_block">ZБЕРОПОЛИС</h2>
                    <h3 style="margin-top: 13px;">ОНЛАЙН-ПЛОЩАДКА ДЛЯ ПРИВЛЕЧЕНИЯ ИНВЕСТИЦИЙ В БИЗНЕС ПРОЕКТЫ</h3>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-xl-6 col-sm-1">
                    <img class="slayd rounded" src="img/zaglushka.png" alt="Зберополис инвестиционный сервис" />
                </div>
                <div class="col-xl-6 col-sm-1">
                    <p>ZBEROPOLIS – это сервис, который предоставляет людям возможность вкладывать свои сбережения в различные направления: от предприятий малого и среднего бизнеса под ставку свыше 30% годовых до государственных облигаций, дающих высочайший уровень защиты капитала.</p>
                    <p>Это также механизм, позволяющий небольшим компаниям быстро и эффективно привлекать финансирование для своих проектов.</p>
                    <p>Инвесторами могут быть физические или юридические лица, получателями финансирования (эмитентами) – коммерческие организации или индивидуальные предприниматели, зарегистрированные на территории Российской Федерации. Посредником между инвесторами и эмитентами выступает брокер – профессиональный участник рынка ценных бумаг.</p>
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
                <div class="row">
                    <div class="col-xl-12 col-sm-12">
                        <div class="pic_box">
                            <div class="active_cir float-left" data="f"></div>
                            <div class="float-left" data="f"></div>
                            <div class="float-left" data="f"></div>
                            <div class="float-left" data="f"></div>                                                              
                        </div>
                    </div>
                </div>
        </div>
        <div class="container" style="overflow: hidden; position: relative;height: 480px;padding-top: 5px;">
                <div class="main_list_proekt">                    
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
        <div class="container projects">
                <div class="row text-center">
                        <p style="display: inline-block;margin: 32px auto;font-size: 1.1rem;"><a href="#">Зарегистрируйтесь,</a> чтобы увидеть больше компаний.</p>
                </div>
        </div>
        <!--Блок схема работы-->
        <div class="container shema_rabotu">
                <div class="row">
                    <div class="col-xl-12 col-sm-12">
                        <h2 class="text-center head_block">Схема работы</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-sm-12">
                        <div class="pic_box">
                            <div class="active_cir float-left" data="f"></div>
                            <div class="float-left" data="f"></div>
                            <div class="float-left" data="f"></div>
                            <div class="float-left" data="f"></div>                                                              
                        </div>
                    </div>
                </div>
            <div class="row">
                    <div class="col-xl-6 col-sm-1">
                        <img class="slayd rounded" src="img/sld_oserv2.png" alt="Зберополис инвестиционный сервис" />
                    </div>
                    <div class="col-xl-6 col-sm-1 box_investr">
                        <h2>Для инвесторов</h2>
                        <h3>как вложить деньги</h3>
                        <p>ZBEROPOLIS – это сервис, который предоставляет людям возможность вкладывать свои сбережения в различные направления: от предприятий малого и среднего бизнеса под ставку свыше 30% годовых до государственных облигаций, дающих высочайший уровень защиты капитала.</p>
                        <p>Это также механизм, позволяющий небольшим компаниям быстро и эффективно привлекать финансирование для своих проектов.</p>
                        <p>Инвесторами могут быть физические или юридические лица, получателями финансирования (эмитентами) – коммерческие организации или индивидуальные предприниматели, зарегистрированные на территории Российской Федерации. Посредником между инвесторами и эмитентами выступает брокер – профессиональный участник рынка ценных бумаг.</p>
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
    </body>
</html>
                    <?php } ?>