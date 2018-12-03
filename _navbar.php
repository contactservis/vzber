<div class="navbar-top ">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="260" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">О проекте</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Инвестору</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Эмитенту</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Помощь</a>
                    </li>
                </ul>
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Личный кабинет</button>
            </div>
        </nav>
    </div>
</div>
<?php

$menu = ["ОБЪЕКТЫ ЗАЙМА"=>"/obekty-zajma.php",
        "РИОБРЕТЕННЫЕ ОБЬЕКТЫ ЗАЙМА"=>"#",
        "ЗАЕМЩИК"=>"/zaemshik.php",
        "ЛИЧНЫЙ СЧЕТ"=>"#",
        "ПОКАЗАТЕЛЬ ИНВЕСТОРА"=>"#",
        "СООБЩЕНИЯ"=>"#",
        "СДЕЛКИ"=>"#"];


?>
<div class="navbar-bottom">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                <?php
                    foreach ($menu as $title=>$url) {
                        $class = strpos($_SERVER["REQUEST_URI"], $url) !== false ? "active" : "";
                        echo "<li class=\"nav-item $class\"><a class=\"nav-link\" href=\"$url\">$title</a></li>";
                    }
                ?>
                </ul>
                <a href="#" class="btn-profile-login my-2 my-sm-0">ПРОФИЛЬ</a>
            </div>
        </nav>
    </div>
</div>