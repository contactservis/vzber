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
    <div class="mt-2-5">
        <div class="container">
            <h3 class="font-weight-bold">Создать обьект инвестирования</h3>
            <div class="row mt-2-5">
                <div class="col-12 col-md-4">
                    <div>
                        <div class="add-image-btn">
                            <div class="add-plus-round"></div>
                            <span>Добавить фотографию</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="add-video-btn">
                            <div class="add-plus-round"></div>
                            <span>Добавить Видео</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <form action="">
                        <label class="d-block" for="texta">Поле ввода текста</label>
                        <textarea class="w-100" id="texta" rows="5"></textarea>
                        <div class="row mt-4">
                            <div class="col-12 col-lg-5">
                                <label class="d-block" for="sum">Сумма</label>
                                <input class="w-100" type="text" id="sum">
                            </div>
                            <div class="col-6 col-lg">
                                <label class="d-block" for="rate">Процентная ставка</label>
                                <input class="w-100" type="text" id="rate">
                            </div>
                            <div class="col-6 col-lg">
                                <label class="d-block" for="minrate">Мин ставка</label>
                                <input class="w-100" type="text" id="minrate">
                            </div>
                        </div>
                        <label class="d-block mt-4" for="date">Дата погашения</label>
                        <input class="d-block w-261" type="date" id="date" placeholder="Дата">
                        <button class="btn btn-light w-261 mt-5" type="submit">Создать</button>
                    </form>
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