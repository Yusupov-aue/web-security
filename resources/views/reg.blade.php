<!DOCTYPE html>
<html >
  <head>

    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style-2.css">

  </head>

  <body>
<form method="get" action="/registration" id="registration">
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


        <div class="textbox">
          <i class="fas fa-envelope-square"></i>
          <input type="text" name="email_address" placeholder="Введите почту">
        </div>


        <input type="submit" class="btn" value="Зарегистрироваться">

        <div class="retu">
          <i class="fas fa-house-damage"></i>
          <a href="http://127.0.0.1:8000/index">Вернутся</a>
        </div>

      </div>
</form>
  </body>
</html>
