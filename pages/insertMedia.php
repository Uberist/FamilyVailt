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
      <div class="row">
        <div class="rounded-3 col-md-3" style="margin-top:5%;margin-left:5%;background-color:#5B5561">
          <br>
          <h1 class="styleTextForH1">Здесь вы можете выбрать какие характеристики будут у вашей фотографии</h1>
          <div class="container">
            <form method="POST">
              <div class="row">
                <div class="col-sm">
                  <label for="InputCountPerson"class="form-label styleForLabel">
                    ведите количество людей на фото
                  </label>
                  <input type="email" class="form-control" id="InputCountPerson" name="CountPerson" value=""></input>
                </div>
                <div class="col-sm">
                  <label for="InputNameMedia" class="form-label styleForLabel">
                    введите название фото<br><br>
                  </label>
                  <input type="text" class="form-control" id="InputNameMedia" name="NameMedia" value=""></input>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label for="InputDescriptionMedia" class="form-label styleForLabel">
                    <br>введите описание фото
                  </label>
                  <input type="text" class="form-control" id="InputDescriptionMedia" name="DescriptionMedia" value=""></input>
                </div>
                <div class="col-sm">
                  <label class="form-check-label styleForLabel" for="checkboxForFiltr">
                    <br>Фильтр
                  </label><br><br>
                  <input class="form-check-input" type="checkbox" value="" id="checkboxForFiltr" name="Filtr">
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <label class="form-label styleForLabel" for="InputFilmingFrom" name="FilmingFrom">
                    <br>Снято от
                  </label>
                  <input class="form-control" type="date" value="" id="InputFilmingFrom">
                </div>
                <div class="col-sm">
                  <label class="form-label styleForLabel" for="InputFilmingTo">
                    <br>Снято до
                  </label>
                  <input class="form-control" type="date" value="" id="InputFilmingTo" name="FilmingTo">
                </div>
              </div>
              <div class="row">
                <label class="form-label styleForLabel">
                  <br>выберете членов семьи на фото
                </label>
                <div class="col-sm">
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                </div>
                <div class="col-sm">
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                  <input class="form-check-input" type="checkbox" value="" name="personNumber">
                  <label class="styleForLabel">name name name</label><br>
                </div>
              </div>
              <div class="d-flex justify-content-center" style="margin-top:5%;">
                <button type="submit" class="mainBtn">Добавить медиа</button>
              </div>
            </form>
          </div>
          <br>
        </div>
        <div class="offset-md-1 col-md-6 rounded-3 d-flex justify-content-center align-self-start" style="height:528px; margin-top:5%; background-color:#5B5561;align-items:center; ">
          <a class="" href="#">
            <img src="../icons/addmedia.png">
          </a>
        </div>
      </div>
      <br><br><br><br><br><br><br><br>
    </header>
  </body>
</html>