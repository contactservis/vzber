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

    <style>
        .acc-err{
            margin: 152px 0;
        }
        .acc-err h1{
            font-weight: 300;
            font-size: 36px;
            line-height: 42px;
            text-transform: uppercase;
            max-width: 850px;
            margin: 19px auto 34px;
        }
        .acc-err .btn-light{
            min-width: 164px;
            padding: 0.5rem 0.75rem;
            margin-bottom: 16px;
        }
    </style>
    <!--Содержание-->
    <div class="acc-err">
        <div class="container text-center">
            <svg version="1.1" width="125" height="125" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 125 125" fill="#8E26B8" xml:space="preserve">
                <g>
                    <path d="M62.5,70.7c-5.2,0-9.4,4.2-9.4,9.4c0,4.3,3,8,7,9.1v13.5c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5V89.2 c4-1.1,7-4.7,7-9.1C71.9,74.9,67.7,70.7,62.5,70.7z M62.5,84.6c-2.5,0-4.5-2-4.5-4.5s2-4.5,4.5-4.5s4.5,2,4.5,4.5 S65,84.6,62.5,84.6z"></path>
                    <path d="M95.6,44.4h-5.5V27.6C90.1,12.4,77.7,0,62.5,0C47.3,0,34.9,12.4,34.9,27.6v16.8h-5.5 c-8.1,0-14.6,6.5-14.6,14.6v51.4c0,8.1,6.6,14.6,14.6,14.6h66.2c8.1,0,14.6-6.6,14.6-14.6V59C110.2,50.9,103.6,44.4,95.6,44.4z M39.8,27.6C39.8,15.1,50,4.9,62.5,4.9c12.5,0,22.7,10.2,22.7,22.7v16.8h-6.9V27.6c0-8.7-7.1-15.8-15.8-15.8 c-8.7,0-15.8,7.1-15.8,15.8v16.8h-6.9V27.6z M73.4,27.6v16.8H51.6V27.6c0-6,4.9-10.9,10.9-10.9C68.5,16.7,73.4,21.6,73.4,27.6z M105.3,110.4c0,5.3-4.4,9.7-9.7,9.7H29.4c-5.3,0-9.7-4.4-9.7-9.7V59c0-5.3,4.4-9.7,9.7-9.7h7.9h11.8h26.7h11.8h7.9 c5.3,0,9.7,4.3,9.7,9.7V110.4z"></path>
                    <path d="M99.5,68.1c-1.4,0-2.5,1.1-2.5,2.5v21.6c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5V70.6 C102,69.2,100.9,68.1,99.5,68.1z"></path>
                    <path d="M99.4,60c-3.2,0-3.2,4.9,0,4.9C102.6,64.9,102.6,60,99.4,60z"></path>
                </g>
            </svg>
            <h1>ВАМ необходимо зарегистрироваться,
                чтобы увидеть данную страницу</h1>
            <a href="#" class="btn btn-light">Регистрация</a>
            <a href="/" class="d-block">Вернуться на главную страницу</a>
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
        // после загрузки страницы
        $(function(){
            // инициализации подсказок для всех элементов на странице, имеющих атрибут data-toggle="tooltip"
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    </body>
    </html>
<?php } ?>