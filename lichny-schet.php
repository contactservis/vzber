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

    <!--Банеер-->
    <div class="top-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-left align-self-center">
                    <span class="top-banner-name">Личный счет</span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <span class="gray_text d-block">Прогнозируемая сумма поступлений по %</span>
                    <span class="top-banner-price">136 814,<span>00</span></span>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <span class="gray_text d-block">Сумма остатка счета</span>
                    <span class="top-banner-price">360 814,<span>00</span></span>
                    <div class="top-banner-button"><button class="btn btn-dark">Вывести средства</button></div>
                </div>
            </div>
        </div>
    </div>
    <!--Содержание-->
    <div class="lichny-schet">
        <div class="container">
            <h1>Эмитент</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="lichny-schet-emitent">
                        <div class="row">
                            <div class="col-12">
                                <div class="lichny-schet-emitent-header">
                                    <img src="img/example-building.jpg" alt="" class="lichny-schet-img">
                                    <h3>Название</h3>
                                    <span class="d-block">Новый сервис электронных платежей PayPey</span>
                                    <button class="btn btn-light">Профиль</button>
                                    <button class="btn btn-light">Написать сообщение</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-stavka gray_text">Ставка<br><span>7,52%</span></span>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-sum-invest gray_text">Сумма инвестиции<br><span>11 300,00 Р</span></span>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-srok gray_text">Срок погашения<br><span>21.12.2018</span></span>
                            </div>
                            <div class="col-12">
                                <div class="lichny-schet-vyplata">
                                    <span class="d-block">Выплачено:</span>
                                    <span class="float-left">6 814,00 Р</span>
                                    <span class="float-right">из 13 450,00 Р</span>
                                </div>
                                <div class="progress lichny-schet-progress-viplacheno">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="lichny-schet-sum-post">
                                    <span class="d-block">Прогнозная сумма поступлений:</span>
                                    <span class="d-block gray_text">23.11.2018</span>
                                    <span class="d-block lichny-schet-sum-post-price">13 450,<span>00</span> P</span>
                                    <div class="progress lichny-schet-progress-ostatok">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="d-block gray_text">Осталось 17 дней</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="lichny-schet-sum-zadol">
                                    <span class="d-block">Сумма задолженности</span>
                                    <span class="d-block gray_text">на 19.11.2018</span>
                                    <span class="d-block lichny-schet-sum-zadol-price">2 670,<span>00</span> P</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lichny-schet-emitent">
                        <div class="row">
                            <div class="col-12">
                                <div class="lichny-schet-emitent-header">
                                    <img src="img/example-building.jpg" alt="" class="lichny-schet-img">
                                    <h3>Название</h3>
                                    <span class="d-block">Новый сервис электронных платежей PayPey</span>
                                    <button class="btn btn-light">Профиль</button>
                                    <button class="btn btn-light">Написать сообщение</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-stavka gray_text">Ставка<br><span>7,52%</span></span>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-sum-invest gray_text">Сумма инвестиции<br><span>11 300,00 Р</span></span>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-srok gray_text">Срок погашения<br><span>21.12.2018</span></span>
                            </div>
                            <div class="col-12">
                                <div class="lichny-schet-vyplata">
                                    <span class="d-block">Выплачено:</span>
                                    <span class="float-left">6 814,00 Р</span>
                                    <span class="float-right">из 13 450,00 Р</span>
                                </div>
                                <div class="progress lichny-schet-progress-viplacheno">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="lichny-schet-sum-post">
                                    <span class="d-block">Прогнозная сумма поступлений:</span>
                                    <span class="d-block gray_text">23.11.2018</span>
                                    <span class="d-block lichny-schet-sum-post-price">13 450,<span>00</span> P</span>
                                    <div class="progress lichny-schet-progress-ostatok">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="d-block gray_text">Осталось 17 дней</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="lichny-schet-sum-zadol">
                                    <span class="d-block">Сумма задолженности</span>
                                    <span class="d-block gray_text">на 19.11.2018</span>
                                    <span class="d-block lichny-schet-sum-zadol-price">2 670,<span>00</span> P</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lichny-schet-emitent">
                        <div class="row">
                            <div class="col-12">
                                <div class="lichny-schet-emitent-header">
                                    <img src="img/example-building.jpg" alt="" class="lichny-schet-img">
                                    <h3>Название</h3>
                                    <span class="d-block">Новый сервис электронных платежей PayPey</span>
                                    <button class="btn btn-light">Профиль</button>
                                    <button class="btn btn-light">Написать сообщение</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-stavka gray_text">Ставка<br><span>7,52%</span></span>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-sum-invest gray_text">Сумма инвестиции<br><span>11 300,00 Р</span></span>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <span class="lichny-schet-srok gray_text">Срок погашения<br><span>21.12.2018</span></span>
                            </div>
                            <div class="col-12">
                                <div class="lichny-schet-vyplata">
                                    <span class="d-block">Выплачено:</span>
                                    <span class="float-left">6 814,00 Р</span>
                                    <span class="float-right">из 13 450,00 Р</span>
                                </div>
                                <div class="progress lichny-schet-progress-viplacheno">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="lichny-schet-sum-post">
                                    <span class="d-block">Прогнозная сумма поступлений:</span>
                                    <span class="d-block gray_text">23.11.2018</span>
                                    <span class="d-block lichny-schet-sum-post-price">13 450,<span>00</span> P</span>
                                    <div class="progress lichny-schet-progress-ostatok">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="d-block gray_text">Осталось 17 дней</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="lichny-schet-sum-zadol">
                                    <span class="d-block">Сумма задолженности</span>
                                    <span class="d-block gray_text">на 19.11.2018</span>
                                    <span class="d-block lichny-schet-sum-zadol-price">2 670,<span>00</span> P</span>
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