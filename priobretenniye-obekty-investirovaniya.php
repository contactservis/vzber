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
        <title>Объекты инвестирования - Зберополис</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="fonts/roboto.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-slider.min.css">
        <link rel="stylesheet" href="css/css.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-slider.min.js"></script>
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
    <div class="obj-zai-top">
        <div class="container">
            <h1>Объекты инвестирования</h1>
        </div>
    </div>
    <!--Содержание-->
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="obj-zai">
                    <div class="obj-zai-img">
                        <img src="img/example-building.jpg" alt="Здание">
                        <div class="obj-zai-blackout"></div>
                    </div>
                    <div class="obj-zai-text">
                        <h3>Название</h3>
                        <span>Сервис электронных платежей</span>
                        <div class="obj-zai-desc">
                            <span class="obj-zai-desc-left">Ставка<br><span class="font-weight-bold">7,52%</span></span>
                            <span class="obj-zai-desc-right">
                            Цель <span class="font-weight-bold">31 000 000 P</span><br>
                            Инвесторов <span class="font-weight-bold">18</span>
                        </span>
                        </div>
                        <span class="obj-zai-date">
                        Срок погашения<br>
                        <span class="font-weight-bold">21.12.2018</span>
                    </span>
                        <span class="obj-zai-btn">
                        <button class="btn btn-light">Инвестировать</button>
                    </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <button class="buy-obj-zai">
                </button>
            </div>

        </div>
    </div>
    <!--Подвал-->
    <footer>
        <div class="footer-tel-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 tel_box">
                        <span class="footer-tel-numb">8(800) 000 00 00</span>
                        <span class="footer-tel-text">Бесплатно по России</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
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