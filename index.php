<?php

$nick = "wqf";
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>СЛВ</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Rampart+One&family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="div_logo">
           <img class="logo" src="img/logo.png">
        </div>
          <p class="p_logo">Сделаем лучше вместе</p>
        <div class="switch">
            <p>Пользователь</p>
              <img id="switch" src="img/switch.png" onclick="invis()">
            <p>Админ</p>
            <p>Jopa</p>
        </div>
            <div class="registration">
            <a href="php/registre.php"><p id="p_reg" class="auto">Регистрация</p></a>
                <p id="p_auto" class="auto">Вход</p>
        </div>
             <p class="nick"><?php echo $nick?></p>
    </header>
    <container id="non_user_container">
        <div class="block">

        </div>
        <div class="block">

        </div>
        <div class="block">

        </div>
    </container>
    <container id="auto_admin">
        <form>
            <input type="text" placeholder="login">
            <input type="text" placeholder="password">
        </form>
    </container>
<script src="js/main.js"></script>
</body>
</html>