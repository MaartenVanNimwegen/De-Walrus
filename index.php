<!DOCTYPE html>
<html lang="nl">
<head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="fotos/icon32x32.png">
    <title>De Walrus - Grand Café</title>
</head>
<body>

  <div id="header-placeholder"></div>
  <script>
  $(function(){
    $("#header-placeholder").load("header.html");
  });
  </script>

  <div class="PageBgImg">
    <h1 class="PageTitle">Welkom bij De Walrus!</h1>
    <h2 class="PageInfo">Leuk dat je er bent.</h2>
    <img class="HomeBacgroundImage" src="fotos/HomeBG.png" alt="Home image">
  </div>

  <div class="HomeInformatie">
    <h2>Ontspan, geniet en ontmoet</h2>
      <p>
      Welkom bij Grand-Café De Walrus! Bezoek ons in Sneek of in Leeuwarden.
      <br>Beide restaurants zijn gevestigd in een sfeervol pand op een prachtige locatie in het centrum.
      <br>Dé ideale plek voor een lekkere kop koffie, uitgebreide lunch, een heerlijk diner en een gezellige borrel.
      <br>Kom langs of reserveer bij één van onze restaurants en ervaar het zelf! 
      </p>

    <br></br>
    <br></br>
    <h2>Wil je elkaar zakelijk ontmoeten?</h2>
    <p>
      Net als bij elke locatie voor zakelijke evenementen kun je bij ons ook privé-ruimtes reserveren. <br>
      Of, pak met je collega’s een tafel in één van de gezellige hoeken in het restaurant. <br>
      We hebben alvast verschillende arrangementen samengesteld, maar denken ook graag met je mee.
    </p>

    <br></br>
    <br></br>

    <div class="HomeReserveerBox">
      <h2>
        Reserveren voor <br>
        Sneek
      </h2>

      <br>

      <a class="contactBtn" href="reserveren.php?location=sneek">Online reserveren</a>
    </div>

    <div class="HomeReserveerBox">
      <h2>
        Reserveren voor <br>
        Leeuwarden
      </h2>

      <br>

      <a class="contactBtn" href="reserveren.php?location=leeuwarden">Online reserveren</a>
    </div>
  </div>

  <div id="footer-placeholder"></div>
  <script>
  $(function(){
    $("#footer-placeholder").load("footer.html");
  });
  </script>

</body>
</html>