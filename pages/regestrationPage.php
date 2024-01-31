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
  </div>
    <div class="row">
      <div class="rounded-4 col-md-4 offset-md-4" style="background-color:#5B5561;">
        <form>
          <label class="styleTextForH1">Регистрация</label><br>
          <label class="styleForLabel" style="margin-top:1%; margin-left:2%;">Придумайте логин</label>
          <input class="form-control" name="login" type="text" style="margin-left:2%; margin-top:3%;width:90%"></input>
          <label class="styleForLabel" style="margin-top:1%; margin-left:2%;">Придумайте пароль</label>
          <input class="form-control" name="password" type="password" style="margin-left:2%; margin-top:3%;width:90%;">
          <label class="styleForLabel" style="margin-top:1%; margin-left:2%;">Ваш телеграм ID</label>
          <input class="form-control" name="telegramID" type="text" style="margin-left:2%; margin-top:3%;width:90%;"></input>

          <div class="form-check" style="margin-left:3%; margin-top:1%">
            <input class="form-check-input" type="radio" name="status" id="gostId">
            <label class="form-check-label styleForLabel" for="gostId">
              Я гость
            </label>
          </div>
          <div class="form-check" style="margin-left:3%;">
            <input class="form-check-input" type="radio" name="status" id="familyMemberId">
            <label class="form-check-label styleForLabel" for="familyMemberId">
              Я член семьи
            </label>
          </div>
          <div class="form-check" style="margin-left:3%; margin-bottom:2%;">
            <input class="form-check-input" type="radio" name="status" id="adminId">
            <label class="form-check-label styleForLabel" for="adminId">
              Я хочу быть админом
            </label>
          </div>


          <div class="d-flex justify-content-center"> 
          <button class="mainBtn" type="submit" style="">Зарегестрироваться</button>
          </div><br>
        </form>
      </div>
    </div>
  </body>
</html>