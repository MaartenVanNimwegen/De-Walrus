<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="fotos/icon32x32.png">
    <title>Arrangementen - De Walrus</title>
</head>
<body>

  <div id="header-placeholder"></div>
  <script>
  $(function(){
    $("#header-placeholder").load("header.html");
  });
  </script>
<div class="arrangementInhoud">
<?php

    $naamBier = "Bier arrangement";
    $naamLive = "Live cooking";
    $naamLunch = "Lunchbuffet voor groepen";
    $naamDinner = "Dinermenu voor groepen";
    $naamWalkingDiner = "Walking diner";
    $naamBios = "Bioscoop arrangement";
    $naamHightea = "High tea arrangement";
    $naamWine = "High wine arrangement";

    $locatieSneekLeeuwarden = "Sneek/Leeuwarden";
    $locatieSneek = "Sneek";
    $locatieLeeuwarden = "Leeuwarden";

    $tekstjeBier = "Ontdek 10 soorten bier uit de omgeving. Allemaal gebrouwen in Friesland.<br>Wij hebben een mooi programma samen gesteld waar kennis word gemaakt met allerlij verschillende smaken.";
    $tekstjeLive = "Bij ons live cooking arrangement word er live gekookt aan de bakplaat.<br>Dit is te boeken voor maximaal 6 personen.";
    $tekstjeLunch = "Geniet van een verzorgt lunchbuffet, inclusief koffie, thee, en verse sinasappelsap.<br>Te boeken vanaf 10 personen.";
    $tekstjeDiner = "Een compleet verzordt diner vanaf 10 personen.<br>Keuze uit 2 voorgerechten, 3 hooftgerechten en 2 desserts";
    $tekstjeWalkingDiner = "Je kunt bij ons ook terrecht voor een waling diner arrangement. Wij verzorgen een volledig buffet voor het aantal mensen waarmee u wenst te komen.";
    $tekstjeBios = "Wij werken ook samen met de bioscoop om een geweldige avond te verzorgen. Na de uitgekozen film word een 2 gangen diner verzorgt.";
    $tekstjeHightea = "Bij het High Tea arrangement verzorgen wij een High Tea voor max 10 personen. Dit is te reserveren voor 10:00 / 13:00. Er is keuze tussen een vlees en een vis diner.";
    $tekstjeWine = "Het High wine arrangement is een door een wijnkenner verzorgde wijnproeverij waarbij een heerkijk diner word verzorgt.";

    $prijsBier = "\xE2\x82\xAc36.50,- p.p.";
    $prijsLive = "\xE2\x82\xAc42.95,- p.p.";
    $prijsLunch = "\xE2\x82\xAc 10.75,- p.p.";
    $prijsDiner = "\xE2\x82\xAc 27.50,- p.p.";
    $prijsWalkingDiner = "\xE2\x82\xAc36.50,- p.p.";
    $prijsBios = "\xE2\x82\xAc 22.75,- p.p.";
    $prijsHightea = "\xE2\x82\xAc 28.95,- p.p.";
    $prijsWine = "\xE2\x82\xAc 26.50,- p.p.";

    $arrangementen = array (
        array(
        "naam"=> "<span class='arrangementTitle'><img class='img1' src='fotos/bier.png'></img>$naamBier</span>",
        "locatie"=> "<span class='arrangementLocatie'>$locatieSneekLeeuwarden</span>" . "<br>",
        "tekstje"=> "<span class='arrangementTekstje'>$tekstjeBier</span>" . "<br>",
        "prijs"=> "<span class='arrangementPrijs'>$prijsBier</span>" . "<br>",
        "reserveren"=> "<a class='arrangementenBtn' href='arrangementenReserveren.php'>Direct boeken</a>"),
        array(
        "naam"=> "<br><span class='arrangementTitle'><img class='img1' src='fotos/live.png'></img>$naamLive</span>",
        "locatie"=> "<span class='arrangementLocatie'>$locatieSneek</span>" . "<br>",
        "tekstje"=> "<span class='arrangementTekstje'>$tekstjeLive</span>" . "<br>",
        "prijs"=> "<span class='arrangementPrijs'>$prijsLive</span>" . "<br>",
        "reserveren"=> "<a class='arrangementenBtn' href='arrangementenReserveren.php'>Direct boeken</a>"),
        array(
        "naam"=> "<br><span class='arrangementTitle'><img class='img1' src='fotos/lunch.png'></img>$naamLunch</span>",
        "locatie"=> "<span class='arrangementLocatie'>$locatieSneekLeeuwarden</span>" . "<br>",
        "tekstje"=> "<span class='arrangementTekstje'>$tekstjeLunch</span>" . "<br>",
        "prijs"=> "<span class='arrangementPrijs'>$prijsLunch</span>" . "<br>",
        "reserveren"=> "<a class='arrangementenBtn' href='arrangementenReserveren.php'>Direct boeken</a>"),
        array(
        "naam"=> "<br><span class='arrangementTitle'><img class='img1' src='fotos/loper.png'></img>$naamDinner</span>",
        "locatie"=> "<span class='arrangementLocatie'>$locatieSneekLeeuwarden</span>" . "<br>",
        "tekstje"=> "<span class='arrangementTekstje'>$tekstjeDiner</span>" . "<br>",
        "prijs"=> "<span class='arrangementPrijs'>$prijsDiner</span>" . "<br>",
        "reserveren"=> "<a class='arrangementenBtn' href='arrangementenReserveren.php'>Direct boeken</a>"),
        array(
        "naam"=> "<br><span class='arrangementTitle'><img class='img1' src='fotos/walkingdiner.png'></img>$naamWalkingDiner</span>",
        "locatie"=> "<span class='arrangementLocatie'>$locatieSneekLeeuwarden</span>" . "<br>",
        "tekstje"=> "<span class='arrangementTekstje'>$tekstjeWalkingDiner</span>" . "<br>",
        "prijs"=> "<span class='arrangementPrijs'>$prijsWalkingDiner</span>" . "<br>",
        "reserveren"=> "<a class='arrangementenBtn' href='arrangementenReserveren.php'>Direct boeken</a>"),
        array(
        "naam"=> "<br><span class='arrangementTitle'><img class='img1' src='fotos/bios.png'></img>$naamBios</span>",
        "locatie"=> "<span class='arrangementLocatie'>$locatieSneekLeeuwarden</span>" . "<br>",
        "tekstje"=> "<span class='arrangementTekstje'>$tekstjeBios</span>" . "<br>",
        "prijs"=> "<span class='arrangementPrijs'>$prijsBios</span>" . "<br>",
        "reserveren"=> "<a class='arrangementenBtn' href='arrangementenReserveren.php'>Direct boeken</a>"),
        array(
        "naam"=> "<br><span class='arrangementTitle'><img class='img1' src='fotos/high.png'></img>$naamHightea</span>",
        "locatie"=> "<span class='arrangementLocatie'>$locatieSneekLeeuwarden</span>" . "<br>",
        "tekstje"=> "<span class='arrangementTekstje'>$tekstjeHightea</span>" . "<br>",
        "prijs"=> "<span class='arrangementPrijs'>$prijsHightea</span>" . "<br>",
        "reserveren"=> "<a class='arrangementenBtn' href='arrangementenReserveren.php'>Direct boeken</a>"),
          array(
        "naam"=> "<br><span class='arrangementTitle'><img class='img1' src='fotos/wine.png'></img>$naamWine</span>",
        "locatie"=> "<span class='arrangementLocatie'>$locatieSneekLeeuwarden</span>" . "<br>",
        "tekstje"=> "<span class='arrangementTekstje'>$tekstjeWine</span>" . "<br>",
        "prijs"=> "<span class='arrangementPrijs'>$prijsWine</span>" . "<br>",
        "reserveren"=> "<a class='arrangementenBtn' href='arrangementenReserveren.php'>Direct boeken</a>"),
    );

    $aantal = count($arrangementen);

    for( $i=0; $i<$aantal; $i++){
        echo $arrangementen[$i]["naam"] . " ";
        echo $arrangementen[$i]["locatie"] . " ";
        echo $arrangementen[$i]["tekstje"] . " ";
        echo $arrangementen[$i]["prijs"] . " ";
        echo $arrangementen[$i]["reserveren"] . "<br>";
    }

?>
</div>
  <div id="footer-placeholder"></div>
  <script>
  $(function(){
    $("#footer-placeholder").load("footer.html");
  });
  </script>

</body>
</html>