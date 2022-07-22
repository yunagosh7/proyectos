<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleRegister.css">
</head>
<body>
    <header class="head">
        <div class="header">
            <img src="images/logo.png" alt="" class="header__img">
            <h1 class="header__title">Empresa</h1>
        </div>
    </header>
    <main>
    <div class="form">
            <form action="saveuser.php" method="post" class="form__form">
                <input name="name" type="text" class="form__username form__input" placeholder="Nombre y Apellido" required>
                <input type="email" placeholder="Correo electronico" class="form__email form__input" name="email" required>
                <input type="text" class="form__phone form__input " placeholder="Celular" name="phone" required>
                <input name="password" type="password" class="form__pd form__input" placeholder="Password" required>
                <input name="saveuser" type="submit" class="form__submit form__input" value="Log in">
            </form>

            </div>
            
                <a href="qwerqwer" class="form__cwgoogle">
                    <img src="images/google.png" class="form__cwgoogle--img" alt="">
                <strong class="form__cwgoogle--txt">Registrate con Google</strong>
                </a>
                <a href="afopasif" class="form__cwapple">
                    <img src="images/appleblanco.png" class="form__cwapple--img" alt="">
                    <strong class="form__cwapple--txt">Registrate Con Apple</strong>
                </a>
            
            <span class="form__register">¿Tenes cuenta?<a href="register.php" class="form__register--createaccount">Inicia sesión</a></span>
        </div>
    </main>
</body>
</html>