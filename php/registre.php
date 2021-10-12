<?php
require_once('db.php');
$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$check = $_POST['check'];
if (!empty($name) && !empty($login) && !empty($email) && !empty($password) && !empty($password2) && !empty($check) && $password==$password2){
    $query = "INSERT INTO `users` ( `name`, `login`, `email`,`password`) VALUES ('$name', '$login', '$email','$password')";
    $result = mysqli_query($dbc,$query);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>СЛВ</title>
    <link href="../css/registre.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Rampart+One&family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>

<div class="login-box">
    <div class="reg_box">
        <img class="babochka" src="../img/babochka.png">
        <h2>Регистрация</h2>
    </div>
    <form method="post" action="<? echo $_SERVER['PHP_SELF']?>">

        <div class="user-box">
            <input type="text" name="name" required="">
            <label>ФИО</label>
        </div>
        <div class="user-box">
            <input type="text" name="login" required="">
            <label>Логин</label>
        </div>
        <div class="user-box">
            <input type="email" name="email" required="">
            <label>Email</label>
        </div>
        <div class="user-box" >
            <input type="password" name="password" required="" style="  letter-spacing: 5px;">
            <label>Пароль</label>
        </div>
        <div class="user-box">
            <input type="password" name="password2" required="" style="  letter-spacing: 5px;">
            <label>Повтор пароля</label>
        </div>
        <div class="user-box2">
            <input onclick="chesk();" type="checkbox" id="checkbox"  name="check" required="">
            <p id="check_text">Согласие на обработку персональных данных</p>
        </div>

            <input type="submit" value="Зарегистрироваться" class="knopka">


        <a href="" ><p class="have">Уже есть аккаунт?</p></a>
    </form>
</div>
<script src="../js/checkbox.js"></script>
</body>
</html>
