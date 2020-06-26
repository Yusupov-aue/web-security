<!DOCTYPE html>
<html >
  <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style-2.css">

  </head>

  <body>
@if (!Auth::check())
        <form method="get" action="/auth" id="login">
              <div class="login-box">
                    <h1>Регистрация</h1>

                    <div class="textbox">
                      <i class="fas fa-user"></i>
                      <input type="text" name="login" placeholder="Введите логин">
                    </div>

                    <div class="textbox">
                      <i class="fas fa-lock"></i>
                      <input type="password" name="password" placeholder="Введите пароль">
                    </div>

                    <input type="submit" class="btn" value="Вход">

                    <div class="textbox">
                    <span><a href="">забыли пароль?</a></span> | <span><a href="/reg">регистрация<a></span>
                    </div>


                    <div class="retu">
                      <i class="fas fa-house-damage"></i>
                      <a href="http://127.0.0.1:8000/index">Вернутся</a>
                </div>

              </div>
            </form>
            @else
              <a href="/logout">выход</a>
            @endif
  </body>
</html>
