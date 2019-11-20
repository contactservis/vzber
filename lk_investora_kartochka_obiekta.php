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
    <div class="lichny-schet mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="fotorama" data-width="100%" data-max-width="100%" data-nav="thumbs">
                        <img src="img/proekt1.jpg">
                        <img src="img/proekt3.jpg">
                        <img src="img/proekt4.jpg">
                        <img src="img/proekt1.jpg">
                        <img src="img/proekt3.jpg">
                        <img src="img/proekt4.jpg">
                    </div>
                    <div class="video-frame mt-5">
                        <iframe src="https://www.youtube.com/embed/ciiwTXoPJ5k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="lichny-schet-emitent">
                        <h1 class="mb-1">Little Gentrys</h1>
                        <span class="d-block mb-3">Новый сервис электронных платежей PayPey</span>
                        <button class="btn btn-light w-261 mr-0 mr-md-4">Профиль Компании</button>
                        <button class="btn btn-light w-261 mt-3 mt-lg-0">Написать сообщение</button>
                        <div class="row mt-5">
                            <div class="col-sm-6 col-lg-3">
                                <span class="lichny-schet-stavka gray_text">Ставка<br><span>7,52%</span></span>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <span class="lichny-schet-sum-invest gray_text">Общая сумма займа<br><span>11 300,00 Р</span></span>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <span class="lichny-schet-sum-invest gray_text">Срок займа<br><span>36 мес.</span></span>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <span class="lichny-schet-srok gray_text">Срок погашения<br><span>21.12.2018</span></span>
                            </div>
                            <div class="col-12 mt-2">
                                <div class="lichny-schet-vyplata">
                                    <span class="d-block mb-2">Привлечено:</span>
                                    <span class="float-left mb-2">4 814,00 Р</span>
                                    <span class="float-right mb-2">из 11 300,00 Р</span>
                                </div>
                                <div class="progress lichny-schet-progress-viplacheno">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="d-block gray_text">Минимальная сумма займа</span>
                                <span class="d-block h4">1 000,00 Р</span>
                                <button class="btn btn-light mt-4 w-261">Инвестировать</button>
                            </div>
                            <div class="col-12 mt-5">
                                <h3>Описание:</h3>
                                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor enim in sem at venenatis. At urna, cras elit, varius convallis placerat pretium enim. Sollicitudin enim vitae et facilisis. At eu pellentesque pretium ullamcorper pretium facilisis id. Massa vel hendrerit tellus odio arcu tincidunt interdum vitae. Dapibus bibendum lorem nibh vitae. Turpis eget amet odio rhoncus, nunc. Aliquet non leo aenean commodo pharetra integer.</p>
                                <p class="mt-4">Phasellus nisi, amet ultricies consequat egestas. Suscipit lorem vel aliquam sed elementum massa. Purus quis duis urna tortor. Amet luctus eleifend sit vel condimentum tellus, aliquet felis. Orci erat mauris amet justo. At pretium, gravida urna sagittis pellentesque diam et volutpat tristique. Rhoncus ut amet diam sodales. Urna, morbi convallis mi phasellus proin ut. Porttitor pellentesque lobortis volutpat ante risus egestas lobortis volutpat vestibulum. Consectetur tellus velit at adipiscing ac amet, nunc. Scelerisque imperdiet massa imperdiet lectus nullam sodales ornare viverra. Amet, maecenas accumsan, velit nam odio facilisi sit aliquam egestas. At pretium nunc arcu tellus sodales.</p>
                                <img src="img/graph.png" class="d-block m-auto mw-100" alt="График">
                                <p class="mt-4">Tortor, quam volutpat feugiat condimentum. Auctor pellentesque integer scelerisque aliquam massa elit eget aliquam nunc. Ultrices etiam sit et nullam duis libero donec id. Turpis mauris enim vitae eget facilisis. Sit aliquet pretium amet, egestas volutpat sed. Sit ornare id non tortor egestas posuere pellentesque purus.
                                Volutpat neque risus cursus neque adipiscing. Egestas mauris adipiscing mattis pulvinar nullam venenatis. Sit et sed tincidunt adipiscing hendrerit porttitor. Eget pharetra, egestas massa placerat amet, nec fermentum facilisi. Dui sed augue lectus accumsan duis felis sociis dictum gravida. Elit, turpis quisque fringilla feugiat. Vulputate orci, urna et in. Ut nisl feugiat tempor a non etiam lacinia iaculis.</p>
                                <p class="mt-4">Metus risus, ut egestas enim. Sit tristique fermentum congue turpis pharetra, mi, cursus cursus. A quis vel.</p>
                            </div>
                        </div>
                    </div>

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