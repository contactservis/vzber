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
        .message-container{
            height: 500px;
            overflow-y: scroll;
            padding: 10px 5px 0 15px;
        }
        .message-members{
            height: 500px;
            overflow-y: scroll;
        }
        .date-divider{
            display: block;
            text-align: center;
            font-size: 14px;
            color: #a9a9a9;
            margin-bottom: 23px;
        }
        .send-message-container form{
            display: flex;
            margin-top: 20px;
            border-top: 1px solid #e8e8e8;
            padding: 10px 10px 0;
        }
        .send-message-container textarea{
            flex-grow: 1;
            border: none;
            resize: none;
            padding: 5px 10px;
        }
        .send-message, .received-message{
            display: flex;
            margin-bottom: 23px;
        }
        .send-message time, .received-message time{
            font-size: 14px;
            color: #a9a9a9;
            margin-left: 10px;
        }
        .send-message{
            justify-content: flex-end;
        }
        .received-message{
            justify-content: flex-start;
        }
        .message-container .h6{
            position: relative;
        }
        .received-message.unread .h6::before, .send-message.unread .h6:before{
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #8e26b8;
            left: -15px;
            top: 8px;
        }
        .single-members{
            display: flex;
            margin-bottom: 21px;
            padding: 4px 0 24px;
            border-bottom: 1px solid #e8e8e8;
            position: relative;
        }
        .single-members:last-child{
            border-bottom: none;
        }
        .single-members-avatar-container{
            position: relative;
            width: 67px;
            min-width: 67px;
            height: 67px;
            margin-right: 15px;
        }
        .single-members-avatar{
            background-color: #2f2f2f;
            border-radius: 50%;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        .single-members-avatar img{
            width: 100%;
            height: 100%;
            object-fit: cover;
         }
        .single-message-counter{
            position: absolute;
            right: 0;
            top: -4px;
            min-width: 26px;
            height: 26px;
            border-radius: 50%;
            color: #ffffff;
            background-color: #8e26b8;
            font-size: 14px;
            text-align: center;
            line-height: 1.9;
        }
        .single-members-name{
            display: block;
        }
        .single-members-description{
            display: block;
            font-size: 14px;
            color: #a9a9a9;
        }
        .single-members-info{
            padding-top: 15px;
        }
        .btn-close{
            position: relative;
            right: 15px;
            opacity: 0;
            transition: all .1s ease;
            background-color: transparent;
        }
        .single-members .btn-close{
            position: absolute;
            top: 0;
        }
        .send-message:hover .btn-close, .received-message:hover .btn-close, .single-members:hover .btn-close {
            right: 0;
            opacity: 1;
        }
        .btn-close:focus{
            outline: none;
        }
        .btn-close::before, .btn-close::after{
            content: '';
            position: absolute;
            width: 1px;
            height: 12px;
            border-left: 1px solid #a9a9a9;
            top: 0;
            left: 50%;
        }
        .btn-close::before{
            transform: rotate(45deg);
        }
        .btn-close::after{
            transform: rotate(-45deg);
        }
    </style>

    <!--Содержание-->
    <div class="lichny-schet mt-5">
        <div class="container">
            <h1>Сообщения</h1>
            <div class="row">
                <div class="col-md-8">
                    <div class="message-container">
                        <time class="date-divider" datetime="2019-01-08">08.01.2019</time>
                        <div class="send-message">
                            <div class="w-75">
                                <span class="h6">ФИО аккаунта</span>
                                <time datetime="17:15">17:15</time>
                                <button  class="btn btn-close" data-toggle="tooltip" data-placement="right" title="Удалить сообщение"></button>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet ligula nec mi aliquet feugiat ut a velit.</p>
                            </div>
                        </div>
                        <div class="received-message">
                            <div class="w-75">
                                <span class="h6">Лупенко Владимир Владимирович</span>
                                <time datetime="17:15">17:15</time>
                                <button  class="btn btn-close" data-toggle="tooltip" data-placement="right" title="Удалить сообщение"></button>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet ligula nec mi aliquet feugiat ut a velit. Mauris varius nisi in est consectetur, a euismod velit ornare.</p>
                            </div>
                        </div>
                        <div class="send-message unread">
                            <div class="w-75">
                                <span class="h6">ФИО аккаунта</span>
                                <time datetime="17:15">17:15</time>
                                <button  class="btn btn-close" data-toggle="tooltip" data-placement="right" title="Удалить сообщение"></button>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet ligula nec mi aliquet feugiat ut a velit. Mauris varius nisi in est consectetur, a euismod velit ornare. Nullam sagittis justo vel velit ultricies, et imperdiet turpis auctor. Integer tempus sed nisi at tempor.</p>
                            </div>
                        </div>
                        <time class="date-divider" datetime="2019-01-10">10.01.2019</time>
                        <div class="received-message unread">
                            <div class="w-75">
                                <span class="h6">Лупенко Владимир Владимирович</span>
                                <time datetime="17:15">17:15</time>
                                <button  class="btn btn-close" data-toggle="tooltip" data-placement="right" title="Удалить сообщение"></button>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet ligula nec mi aliquet feugiat ut a velit. Mauris varius nisi in est consectetur, a euismod velit ornare. Nullam sagittis justo vel velit ultricies, et imperdiet turpis auctor. Integer tempus sed nisi at tempor. Vivamus semper egestas erat a dignissim. In at volutpat sapien. Duis non lacus porttitor, elementum metus sit amet, porttitor orci. Duis ac ornare purus. </p>
                            </div>
                        </div>
                    </div>
                    <div class="send-message-container">
                        <form action="">
                            <textarea name="" id="" rows="2" placeholder="Напишите сообщение"></textarea>
                            <button type="submit" class="btn btn-link"><img src="img/send-message.png" alt=""></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 order-first order-md-last">
                    <div class="message-members">
                        <div class="single-members">
                            <button  class="btn btn-close" data-toggle="tooltip" data-placement="bottom" title="Удалить сообщение"></button>
                            <div class="single-members-avatar-container">
                                <div class="single-members-avatar">
                                    <img src="img/sample-portret-man.jpg" alt="">
                                </div>
                                <div class="single-message-counter">10</div>
                            </div>
                            <div class="single-members-info">
                                <span class="single-members-name">Лупенко Владимир Владимирович</span>
                                <span class="single-members-description">Генеральный директор ООО “КарФикс”</span>
                            </div>
                        </div>
                        <div class="single-members">
                            <button  class="btn btn-close" data-toggle="tooltip" data-placement="bottom" title="Удалить сообщение"></button>
                            <div class="single-members-avatar-container">
                                <div class="single-members-avatar">
                                    <img src="img/sample-portret-man.jpg" alt="">
                                </div>
                            </div>
                            <div class="single-members-info">
                                <span class="single-members-name"><a href="#">Лупенко Владимир Владимирович</a></span>
                                <span class="single-members-description">Генеральный директор ООО “КарФикс”</span>
                            </div>
                        </div>
                        <div class="single-members">
                            <button  class="btn btn-close" data-toggle="tooltip" data-placement="bottom" title="Удалить сообщение"></button>
                            <div class="single-members-avatar-container">
                                <div class="single-members-avatar">
                                </div>
                                <div class="single-message-counter">10</div>
                            </div>
                            <div class="single-members-info">
                                <span class="single-members-name">Лупенко Владимир Владимирович</span>
                                <span class="single-members-description">Генеральный директор ООО “КарФикс”</span>
                            </div>
                        </div>
                        <div class="single-members">
                            <button  class="btn btn-close" data-toggle="tooltip" data-placement="bottom" title="Удалить сообщение"></button>
                            <div class="single-members-avatar-container">
                                <div class="single-members-avatar">
                                </div>
                                <div class="single-message-counter">10</div>
                            </div>
                            <div class="single-members-info">
                                <span class="single-members-name">Лупенко Владимир Владимирович</span>
                                <span class="single-members-description">Генеральный директор ООО “КарФикс”</span>
                            </div>
                        </div>
                        <div class="single-members">
                            <button  class="btn btn-close" data-toggle="tooltip" data-placement="bottom" title="Удалить сообщение"></button>
                            <div class="single-members-avatar-container">
                                <div class="single-members-avatar">
                                </div>
                                <div class="single-message-counter">10</div>
                            </div>
                            <div class="single-members-info">
                                <span class="single-members-name">Лупенко Владимир Владимирович</span>
                                <span class="single-members-description">Генеральный директор ООО “КарФикс”</span>
                            </div>
                        </div>
                        <div class="single-members">
                            <button  class="btn btn-close" data-toggle="tooltip" data-placement="bottom" title="Удалить сообщение"></button>
                            <div class="single-members-avatar-container">
                                <div class="single-members-avatar">
                                </div>
                                <div class="single-message-counter">10</div>
                            </div>
                            <div class="single-members-info">
                                <span class="single-members-name">Лупенко Владимир Владимирович</span>
                                <span class="single-members-description">Генеральный директор ООО “КарФикс”</span>
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