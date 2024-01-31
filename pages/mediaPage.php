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
      <div class="d-flex">
        <div class="rounded-3 col-md-3" style="margin-top:5%;margin-left:5%;background-color:#5B5561">
          <br>
          <h1 class="styleTextForH1">Название медиа</h1>
          <label class="styleForLabel" style="margin-left:20px;">Описание медиа:</label>
          <p class="styleTextForCard" style="margin-left:4%;margin-right:2%">mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription 
            mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription
            mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription
            mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription
            mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription mediaDescription
          </p>
          <label class="styleForLabel" style="margin-left:20px;">Событие:</label>
          <p class="styleTextForCard" style="margin-left:20px;">media Event</p>
          <label class="styleForLabel" style="margin-left:20px">Снято:</label>
          <div class="row">
            <div class="col">
                <p class="styleTextForCard" style="margin-left:20px;">От 23.04.2003</p>
            </div>
            <div class="col">
                <p class="styleTextForCard" style="margin-left:20px">До 24.06.2024</p>
            </div>
          </div>
          <label class="styleForLabel" style="margin-left:20px">Загружено:</label>
          <div class="row">
            <div class="col">
                <p class="styleTextForCard" style="margin-left:20px;">От 23.06.2003</p>
            </div>
            <div class="col">
                <p class="styleTextForCard" style="margin-left:20px;">До 25.05.2009</p>
            </div>
          </div>
        </div>
        <div class="offset-md-1 col-md-6 rounded-3 d-flex justify-content-center align-self-start" style="height:528px; margin-top:5%; background-color:#5B5561;align-items:center; ">
            <div class="">
                <button class="btn" style="background-color:transparent;border:none" type="button">
                <img src="../icons/стрелка2.png">
                </button>
            </div>
            <img src="../MediaArchive/home.jpg" class="rounded-3" width="760" height="428">
            <div class="">
                <button class="btn" style="background-color:transparent;border:none" type="button">
                <img src="../icons/стрелка1.png">
                </button>
              </div>
        </div>
    </div>
      <!-- <br><br><br><br><br><br><br><br> -->
  </body>
</html>