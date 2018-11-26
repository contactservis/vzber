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
        <title>Зберополис</title>
        <meta charset="utf-8"/>
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
                                <a class="nav-link" href="index.php">ГЛАВНАЯ</a>
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
                                <a class="nav-link" href="help.php"><span class="active">ПОМОЩЬ</span></a>
                            </li>
                        </ul>
                        <a href="reg.php" class="btn btn-outline-secondary float-right">ВХОД/РЕГИСТРАЦИЯ</a>
                    </div>                
            </div>
        </div>
        <!--Большой рекламный слайдер-->
        <div class="main_slayder">
            <div style="overflow: hidden; width: 100%; text-align: center; position: relative;">
                <img src="img/big_baner_prj.jpg" alt="инвестиционный сервис Зберополис"/> 
                <!--<div class="slayder_text"> 
                    <h1 style="font-size: 3rem;">Инвестируйте</h1>
                    <h3 style="font-size: 2.5rem; font-weight: 100; margin-top: -13px;">с доходностью свыше</h3>
                    <span style="font-size: 9rem; margin-top: -60px; display: inline-block;">30%</span><span style="font-size: 2.5rem; font-weight: 100; margin-top: -18px; display: block; float: right; margin-right: 66px;">годовых</span>
                </div>-->
            </div>
        </div>
        <!--Содержание-->
        <div class="container content_project">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <h2>Помощь</h2>
                    <h3>ZBEROPOLIS</h3>                    
                </div>
                <div class="col-xl-6 col-lg-6"></div>
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