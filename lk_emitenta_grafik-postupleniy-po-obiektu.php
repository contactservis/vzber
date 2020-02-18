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
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--script src="js/script.js"></script-->
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

    <!--Содержание-->
    <div class="lichny-schet mt-4">
        <div class="container">
            <h3 class="font-weight-bold">График выплат на 17.02.2020</h3>
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="lichny-schet-emitent">
                        <div class="row">
                            <div class="col-12">
                                <div class="lichny-schet-emitent-header">
                                    <img src="img/example-building.jpg" alt="" class="lichny-schet-img">
                                    <h3>Little Gentrys</h3>
                                    <span class="d-block">Интернет магазин брендовой детской одежды и обуви</span>
                                    <button class="btn btn-light mt-3">Профиль</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="lichny-schet-vyplata mt-0">
                                    <div class="row">
                                        <div class="col-5 mt-2">Поступило:</div>
                                        <div class="col-7 mt-2">Выплачено:</div>
                                        <div class="col-5 mt-3"><span class="lichny-schet-orange font-weight-bold">9 814,00 Р</span></div>
                                        <div class="col-7 mt-3"><span class="lichny-schet-purpur font-weight-bold">23 814,00 Р</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="lichny-schet-sum-post">
                                    <div class="row">
                                        <div class="col-6 mt-4">
                                            <span class="d-block mt-2">Количество инвесторов вложивших до 100 000:</span>
                                            <span class="d-block lichny-schet-sum-post-price lichny-schet-orange mt-1">156</span>
                                            <div class="progress lichny-schet-progress-ostatok mt-2">
                                                <div class="progress-bar progress-bar-orange" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-4">
                                            <span class="d-block mt-2">Сумма:</span>
                                            <span class="d-block lichny-schet-sum-post-price lichny-schet-orange mt-1">13 450,<span>00</span> P</span>
                                            <div class="progress lichny-schet-progress-ostatok mt-2">
                                                <div class="progress-bar progress-bar-orange" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="lichny-schet-sum-post">
                                    <div class="row">
                                        <div class="col-6 mt-4">
                                            <span class="d-block mt-2">Количество инвесторов вложивших до 10 000:</span>
                                            <span class="d-block lichny-schet-sum-post-price lichny-schet-orange mt-1">1501</span>
                                            <div class="progress lichny-schet-progress-ostatok mt-2">
                                                <div class="progress-bar progress-bar-orange" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-4">
                                            <span class="d-block mt-2">Сумма:</span>
                                            <span class="d-block lichny-schet-sum-post-price lichny-schet-orange mt-1">13 450,<span>00</span> P</span>
                                            <div class="progress lichny-schet-progress-ostatok mt-2">
                                                <div class="progress-bar progress-bar-orange" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="lichny-schet-sum-post">
                                    <div class="row">
                                        <div class="col-6 mt-4">
                                            <span class="d-block mt-2">Количество инвесторов вложивших до 5 000:</span>
                                            <span class="d-block lichny-schet-sum-post-price lichny-schet-orange mt-1">12056</span>
                                            <div class="progress lichny-schet-progress-ostatok mt-2">
                                                <div class="progress-bar progress-bar-orange" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-4">
                                            <span class="d-block mt-2">Сумма:</span>
                                            <span class="d-block lichny-schet-sum-post-price lichny-schet-orange mt-1">13 450,<span>00</span> P</span>
                                            <div class="progress lichny-schet-progress-ostatok mt-2">
                                                <div class="progress-bar progress-bar-orange" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="lichny-schet-sum-post">
                                    <div class="row">
                                        <div class="col-6 mt-4">
                                            <span class="d-block mt-2">&nbsp;</span>
                                            <div class="d-flex justify-content-between lichny-schet-red mt-1">
                                                <span class="lichny-schet-sum-post-price">13 450,<span>00</span> P</span>
                                                <span class="h3">Просрочено</span>
                                            </div>
                                            <div class="progress lichny-schet-progress-ostatok mt-2">
                                                <div class="progress-bar progress-bar-red" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-4">
                                            <span class="d-block mt-2">&nbsp;</span>
                                            <div class="d-flex justify-content-between lichny-schet-red mt-1">
                                                <span class="lichny-schet-sum-post-price">13 450,<span>00</span> P</span>
                                                <span class="h3">Просрочено</span>
                                            </div>
                                            <div class="progress lichny-schet-progress-ostatok mt-2">
                                                <div class="progress-bar progress-bar-red" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Последние операции</h3>
                    <div class="lichny-schet-operation">
                        <span class="gray_text">19.11.2018</span>
                        <span class="d-block">Поручение на вывод средств на сумму <span class="lichny-schet-operation-price">6 814,00 Р</span></span>
                    </div>
                    <div class="lichny-schet-operation">
                        <span class="gray_text">18.11.2018</span>
                        <span class="d-block">Начисление процентов по вкладу от Эмитента
"ООО КОМПАНИЯ" <span class="lichny-schet-operation-price">2 853,00 Р</span></span>
                    </div>
                    <div class="lichny-schet-operation">
                        <span class="gray_text">16.11.2018</span>
                        <span class="d-block">Возврат суммы вклада от Эмитента "ООО КОМПАНИЯ"<span></span></span>
                    </div>
                    <div class="lichny-schet-operation">
                        <span class="gray_text">05.11.2018</span>
                        <span class="d-block">Поручение на вывод средств на сумму <span class="lichny-schet-operation-price">4 570,00 Р</span></span>
                    </div>
                    <div class="lichny-schet-operation">
                        <span class="gray_text">05.11.2018</span>
                        <span class="d-block">Начисление процентов по вкладу от Эмитента
    "ООО КОМПАНИЯ" <span class="lichny-schet-operation-price">10 330,00 Р</span></span>
                    </div >
                    <button class="btn btn-light btn-standart">Все операции</button>
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
    </body>
    </html>
<?php } ?>