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
    <div class="container">
            <p class="tl-h1">Образец текста</p>
            <p class="tl-h2">Образец текста</p>
            <p class="tl-h3">Образец текста</p>
            <p class="tl-h4">Образец текста</p>
            <p class="tb-h2">Образец текста</p>
            <p class="tb-h3">Образец текста</p>
            <p class="tb-h4">Образец текста</p>
            <input type="text" placeholder="Фамилия">
            <input type="text" placeholder="Фамилия">
            <input type="text" required  pattern="([a-zA-Z0-9]*)" placeholder="Фамилия">
            <input type="text" placeholder="Фамилия" disabled>
        <input type="password" placeholder="Пароль">
        <input type="date" placeholder="Дата">
        <input type="email" placeholder="Email">
        <br>
        <textarea name="" id="" cols="30" rows="10" placeholder="Введите текст"></textarea>
        <br>
        <button class="btn btn-gray">Регистрация</button>
        <button class="btn btn-light">Регистрация</button>
        <button class="btn btn-primary">Регистрация</button>
        <button class="btn btn-link">Регистрация</button>
        <br>
        <input id="check1" type="checkbox" name="check1" value="check1">
        <label for="check1"></label>
        <input id="check2" type="checkbox" name="check2" value="check2" checked>
        <label for="check2"></label>
        <input id="check3" type="checkbox" name="check2" value="check2" disabled>
        <label for="check3"></label>
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