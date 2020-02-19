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
    <html lang="ru">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Эмитент - Зберополис</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="fonts/roboto.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/fotorama.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fotorama.js"></script>
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
    <?php require_once '_navbar_light.php';?>
    <!--Содержание-->
    <div class="top-banner2">
        <div class="container h-100 d-flex align-items-center">
            <span class="top-banner2-header">Помощь</span>
        </div>
    </div>
    <div class="container mt-5 pt-4">
        <div class="text-center">
            <h2>Задать вопрос</h2>
            <p class="mx-auto gray_text mt-3" style="max-width: 530px">Lorem ipsum dolor sit amet, consectetur adipiscing elittellus maecenas. Eget in vel vitae tellus maecenas dolor nec et.</p>
        </div>
        <div class="row mt-5 pb-5 pt-3">
            <div class="col-12 col-md-6 text-center">
                <img class="mw-100" src="img/help-sheme.png" alt="Схема">
            </div>
            <div class="col-12 col-md-5">
                <form action="">
                    <textarea class="w-100 d-block" name="" rows="3" placeholder="Ваш вопрос"></textarea>
                    <input class="w-75 d-block mt-3" type="text" placeholder="Ваш E-mail">
                    <button class="w-164 btn btn-light mt-3" type="submit">Отправить</button>
                </form>
            </div>
        </div>
        <div class="text-center my-5">
            <h2>Вопросы и ответы</h2>
        </div>
        <div class="row list_faq">
            <div class="col-12 col-md-6">
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
                        <div class="card-header border-bottom-0"><span class="box_head_title"><?=$item_help['title']?></span><span class="icon_pl"></span></div>
                        <div class="card-body hide border-top" style="display:none;">
                            <p style="margin-top: 1.2rem;"><?=$item_help['text']?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-12 col-md-6">
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
    <!--Блок регистрация/авторизация-->
    <div class="container autorisation">
        <div class="row">
            <div class="col-xl-12">
                <h2 class="text-center head_block">Регистрация/Вход</h2>
            </div>
        </div>
        <div class="row button_os_container mb-2 mb-md-5">
            <div class="button_os mt-4">
                <span class="bt_sr_active" data-pointer="1" data-name="type">Инвестор</span><span data-pointer="2" data-name="type">Эмитент</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6" data-slide="1" data-sliderName="type">
                <h2 class="text-left head_block">Регистрация</h2>
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
                <button type="" class="vz_button btn w-164">Регистрация</button>
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
                <button type="" class="vz_button btn w-164">Войти</button>
            </div>
        </div>
    </div><!--Блок регистрация/авторизация-->
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
    </body>
    </html>
<?php } ?>