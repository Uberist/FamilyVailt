<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Vailt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../styles/style.css" rel="stylesheet">
  </head>
  <body style="background-color:#9D8D8E">
    <?php include('../component/navbar.php') ?>
    <div style="margin-left:28%;">
      <?php include('../component/bigLogo.php') ?>
    </div>
    <div class="row">
      <div class="rounded-4 col-md-4 offset-md-4" style="background-color:#5B5561;">
        <form>
          <label class="styleTextForH1">Вход</label><br>
          <label class="styleForLabel" style="margin-top:1%; margin-left:2%;">Введите логин</label>
          <input class="form-control" name="login" type="text" style="margin-left:2%; margin-top:3%;width:90%"></input>
          <label class="styleForLabel" style="margin-top:1%; margin-left:2%;">Введите пароль</label>
          <input class="form-control" name="password" type="password" style="margin-left:2%; margin-top:3%;width:90%;">
          <a class="styleTextForCard" href="regestrationPage.php" style="margin-left:2%; text-decoration:none;" >Регестрация</a>
          <div class="d-flex justify-content-center">
            <button class="btn" type="submit" style="margin-top:3%;margin-bottom:3%;background-color:#46344E; color:white; border:none;">Войти</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>