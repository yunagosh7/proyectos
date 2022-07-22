<?php include('db.php') ?>
<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleLogin.css">
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
            <form action="login.php" method="post" class="form__form">
                <input name="user" type="text" class="form__username form__input" placeholder="User name, email" required>
                <input name="password" type="password" class="form__pd form__input" placeholder="Password" required>
                <input name="login" type="submit" class="form__submit form__input" value="Log in">
            </form>
            <a href="asflñaskñ" class="form__lostpd">Forgot password?</a>
        </div>
        <div class="sub">
            <div class="sub__separador">
                <div class="form__linea form__linea1"></div>
                <span class="form__or">Or</span>
                <div class="form__linea form__linea2"></div>
            </div>
            
                <a href="qwerqwer" class="form__cwgoogle">
                    <img src="images/google.png" class="form__cwgoogle--img" alt="">
                <strong class="form__cwgoogle--txt">Continue with Google</strong>
                </a>
                <a href="afopasif" class="form__cwapple">
                    <img src="images/appleblanco.png" class="form__cwapple--img" alt="">
                    <strong class="form__cwapple--txt">Continue with Apple</strong>
                </a>
            
            <span class="form__register">Not resgistered?<a href="register.php" class="form__register--createaccount">Create an account</a></span>
        </div>
    </main>
</body>
</html>