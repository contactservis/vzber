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
    <?php require_once '_navbar.php';?>

    <style>
        .porucheniya table{
            font-size: 14px;
            margin-top: 30px;
        }
        .porucheniya table th{
            font-size: 16px;
            font-weight: 300;
            color: #a9a9a9;
            padding: 0 14px;
        }
        .porucheniya table td{
            padding: 27px 14px 25px;
            border-bottom: 1px solid #e8e8e8;
        }
        .porucheniya table tr td:first-child{
            padding-left: 0;
        }
        .porucheniya table tr td:last-child{
            padding-right: 0;
        }
        .porucheniya table tr:first-child td{
            padding-top: 18px;
        }
        .porucheniya table tr:last-child td{
            border-bottom: none;
        }
        .porucheniya .file-icon{
            display: flex;
            align-items: center;
        }
        .porucheniya .file-icon::before{
            content: "";
            display: block;
            width: 40px;
            height: 40px;
            min-width: 40px;
            min-height: 40px;
            margin-right: 14px;
        }
        .porucheniya .file-icon.file-pdf::before{
            background-image: url(img/file-icon/file-pdf.svg);
        }
        .porucheniya select{
            display: block;
            min-height: 42px;
            min-width: 164px;
            border: 1px solid #d6d6d6;
            border-radius: 6px;
            padding: 10px 30px 10px 8px;
            outline: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none !important;
            background-image: url("data:image/svg+xml,%3Csvg width='11' height='7' viewBox='0 0 11 7' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.89257 6.36755L10.8376 1.4209C11.0541 1.20385 11.0541 0.85218 10.8376 0.634576C10.6211 0.417521 10.2694 0.417521 10.0529 0.634576L5.50025 5.18886L0.947609 0.635125C0.731101 0.418069 0.379436 0.418069 0.16238 0.635125C-0.0541271 0.85218 -0.0541271 1.20439 0.16238 1.42145L5.10734 6.3681C5.32161 6.58182 5.6788 6.58182 5.89257 6.36755Z' fill='black'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-color: #fff;
            background-position: right 13px center;
        }
        .porucheniya select::-ms-expand{
            display: none;
        }
    </style>

    <!--Содержание-->
    <div class="porucheniya mt-5">
        <div class="container">
            <h1>Поручения</h1>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th>Поручение</th>
                        <th>Дата</th>
                        <th>ФИО</th>
                        <th>Договор</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a class="file-icon file-pdf" href="#">Внебиржевой вывод 05 12 2019 10 33 30.pdf</a></td>
                        <td><time>05.12.2019<br>10:33:30</time></td>
                        <td>Бикчантаев Камиль Ярхамович</td>
                        <td>Договор универсальный инвестиционного счета У/511</td>
                        <td>
                            <select name="num1" id="num1">
                                <option value="Принято">Принято</option>
                                <option value="Отклонено">Отклонено</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="file-icon file-pdf" href="#">Внебиржевой вывод 05 12 2019 10 33 30.pdf</a></td>
                        <td><time>05.12.2019<br>10:33:30</time></td>
                        <td>Бикчантаев Камиль Ярхамович</td>
                        <td>Договор универсальный инвестиционного счета У/511</td>
                        <td>
                            <select name="num1" id="num1">
                                <option value="Принято">Принято</option>
                                <option value="Отклонено">Отклонено</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><a class="file-icon file-pdf" href="#">Внебиржевой вывод 05 12 2019 10 33 30.pdf</a></td>
                        <td><time>05.12.2019<br>10:33:30</time></td>
                        <td>Бикчантаев Камиль Ярхамович</td>
                        <td>Договор универсальный инвестиционного счета У/511</td>
                        <td>
                            <select name="num1" id="num1">
                                <option value="Принято">Принято</option>
                                <option value="Отклонено">Отклонено</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
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