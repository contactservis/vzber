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
        .open-acc {
            text-align: center;
            margin-top: 56px;
            margin-bottom: 70px;
        }
        .open-acc h1, .open-acc h2{
            font-weight: 300;
            font-size: 36px;
            line-height: 42px;
            text-transform: uppercase;
            max-width: 780px;
            margin: 0 auto 25px;
        }
        .open-acc h2{
            margin-top: 60px;
        }
        .open-acc form{
            padding-top: 14px;
        }
        .open-acc form .form-inputs{
            text-align: left;
            max-width: 358px;
            margin: 0 auto;
        }
        .open-acc input[type="text"], .open-acc input[type="email"], .open-acc textarea{
            width: 100%;
            min-height: 60px;
            margin-top: 21px;
            padding: 16px 20px;
            font-weight: 300;
            border-radius: 6px;
            border: 1px solid #d6d6d6;
        }
        .open-acc textarea{
            resize: none;
            min-height: 119px;
            margin-bottom: 6px;
        }
        .open-acc .btn-container{
            max-width: 552px;
            margin: 0 auto;
        }
        .open-acc .btn-light{
            width: 100%;
            min-height: 42px;
        }
        .open-acc .gos-desc{
            display: block;
            font-size: 14px;
            color: #9D9D9D;
            text-align: left;
            margin-top: 18px;
            line-height: 130%;
        }
    </style>
    <!--Содержание-->
    <div class="container">
        <div class="open-acc">
            <h1>Вы можете открыть счет немедленно, не посещая офис компании</h1>
            <span>Заполните заявку на открытие счета</span>
            <form action="">
                <div class="form-inputs">
                    <input type="email" placeholder="Электронная почта">
                    <input type="text" placeholder="Телефон">
                    <input type="text" placeholder="ФИО">
                    <input type="text" placeholder="Населенный пункт">
                    <textarea name="" id="message" placeholder="Сообщение"></textarea>
                    <input id="check1" type="checkbox" name="check1" value="check1">
                    <label for="check1">Я даю согласие на обработку моих персональных данных.</label>
                    <input id="check2" type="checkbox" name="check2" value="check2">
                    <label for="check2">Подтверждаю своё согласие на коммуникацию.</label>
                </div>
                <h2>Выберите способ открытия счета:</h2>
                <div class="btn-container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <button class="btn btn-light">Через ГОСУСЛУГИ</button>
                            <span class="gos-desc">Необходима подтвержденная учетная запись на портале gosuslugi.ru</span>
                        </div>
                        <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                            <button class="btn btn-light">Через СМЕВ</button>
                        </div>
                    </div>
                </div>
            </form>
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