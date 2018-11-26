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
                                <a class="nav-link" href="projekt.php"><span class="active">О ПРОЕКТЕ</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="investor.php">ИНВЕСТОРУ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="emitent.php">ЭМИТЕНТУ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="help.php">ПОМОЩЬ</a>
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
                    <h2>ZBEROPOLIS</h2>
                    <h3>Удобная площадка для успешного инвестирования</h3>
                    <p>это сервис, который предоставляет людям возможность вкладывать свои сбережения в различные направления: от предприятий малого и среднего бизнеса под ставку свыше 30% годовых до государственных облигаций, дающих высочайший уровень защиты капитала. Это также механизм, позволяющий небольшим компаниям быстро и эффективно привлекать финансирование для своих проектов.</p>
                    <p>Инвесторами могут быть физические или юридические лица, получателями финансирования (эмитентами) – коммерческие организации или индивидуальные предприниматели, зарегистрированные на территории Российской Федерации. Посредником между инвесторами и эмитентами выступает брокер – профессиональный участник рынка ценных бумаг.</p>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <img src="img/pr_30.jpg">
                    <p>Брокерское обслуживание в рамках сервиса ZBEROPOLIS осуществляет Акционерное общество «Инвестиционная компания «НФК-Сбережения», работающее на финансовом рынке с 2003 года. Компания имеет лицензии Банка России на осуществление брокерской, дилерской, депозитарной деятельности, а также деятельности по управлению ценными бумагами.</p>
                </div>
            </div>
            <div class="row" style="margin-top:80px;">
                <div class="col-xl-6 col-lg-6">
                    <h2>АО "НФК-Сбережения"</h2>
                    <p>АО «НФК-Сбережения» оказывает широкий спектр услуг физическим и юридическим лицам во всех основных сегментах финансового рынка и обеспечивает возможность инвестирования средств: </p>                    
                </div>
                <div class="col-xl-6 col-lg-6">                    
                </div>
            </div>
            <div class="row" style="margin-top:80px;">
                <div class="col-xl-6 col-lg-6">
                    <img src="img/zagl_pr.jpg">
                </div>
                <div class="col-xl-6 col-lg-6">
                    <ul class="color_dot">
                        <li>в краткосрочные инструменты денежного рынка (от  одного дня);</li>
                        <li>в долговые инструменты, обеспеченные лизинговыми активами;</li>
                        <li>в акции и облигации российских и зарубежных эмитентов;</li>
                        <li>в иностранную валюту с возможностью перечисления на собственный счет клиента в его банке, как для личных нужд физических лиц, так и для нужд юридических лиц, в том числе в целях проведения экспортно-импортных операций;</li>
                        <li>в драгоценные металлы с хранением на обезличенных металлических счетах.</li>
                    </ul>
                    <p>Также компания осуществляет финансирование физических и юридических лиц на любые цели под обеспечение в форме биржевых ценных бумаг.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                  <p>АО «НФК-Сбережения» является одним из крупнейших операторов на рынке ценных бумаг в Поволжье по размеру собственных средств (по состоянию на 01.05.2018 из числа некредитных организаций – профессиональных участников рынка ценных бумаг, зарегистрированных на территории Приволжского федерального округа). Общая величина активов компании за 2017 год превысила 1,2 миллиарда рублей.</p>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <p>Компания имеет прямой доступ к Московской и Санкт-Петербургской Биржам. На текущий момент в списке Московской Биржи насчитывается всего 34 российских банка и инвестиционные компании, которые предоставляют своим клиентам услуги по совершению операций на валютном рынке, и всего 7 – на рынке драгоценных металлов, при этом АО «НФК-Сбережения» входит в оба этих числа.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                  <p>Инвестиционная компания «НФК-Сбережения» оказывает финансовые услуги на всей территории Российской Федерации как физическим, так и юридическим лицам посредством удаленного заключения договоров с использованием электронной подписи. В настоящее время любой гражданин РФ может стать клиентом компании и начать работать на финансовых рынках, заключив договор через интернет, не выходя из дома или офиса.</p>
                  <p>Для того, чтобы получить возможность размещать средства, нужно оформить стандартный комплект документов на брокерское обслуживание в АО «НФК-Сбережения». Это можно сделать удаленно, на сайте www.nfksber.ru, при условии, что у Вас имеется подтвержденная учетная запись сайта www.gosuslugi.ru. Независимо от места проживания, Вы можете оформить соответствующую учетную запись в любом Многофункциональном центре Госуслуг Вашего населенного пункта, а также во множестве других государственных и муниципальных учреждений и организаций. Однако даже если у Вас нет учетной записи на сервисе Госуслуг, и Вы не желаете ее заводить, у Вас по-прежнему остается возможность заключить договор удаленно, предоставив нам онлайн данные трех документов: паспорта, ИНН, СНИЛС – и подтвердив эту информацию посредством СМС-идентификации на сайте <a href="https://www.nfksber.ru">www.nfksber.ru.</a></p>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <img src="img/karta.png" />
                </div>
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