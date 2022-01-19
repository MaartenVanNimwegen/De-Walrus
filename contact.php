<?php 
if(isset($_POST['submit'])){
    $to = "projectschoolsneek@gmail.com";
    $from = $_POST['email'];
    $naam = $_POST['naam'];
    $tel = $_POST['tel'];
    $subject = "Nieuw bericht";
    $message = "naam: " . $naam . "\n" . "e-mailadres: " . $from . "\n" . "telefoon: " . $tel . "\n" . "Schreef het volgende bericht: " . "\n\n\n" . $_POST['message'];
    $bericht = $_POST['message'];
    include 'databaseconn.php';
    $conn = new mysqli($servername, $username, $password, $dbname);

    $headers = "Van: " . $from;
    mail($to,$subject,$message,$headers);
    echo '<script language="javascript">';
    echo 'alert("Bericht met succes verzonden!")';
    echo '</script>';

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contact (naam, email, telefoon, bericht)
    VALUES ('$naam', '$from', '$tel', '$bericht')";
    if ($conn->query($sql) === TRUE) {
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="fotos/icon32x32.png">
    <title>Neem contact op met De Walrus</title>
</head>
<body>

    <div id="header-placeholder"></div>
    <script>
    $(function(){
    $("#header-placeholder").load("header.html");
    });
    </script>

    <div class="contactIndeling">
        <div class="contactFormGrid">
            <div class="contactForm">
            <form class="form" action="" method="post">
            <h2>Via het onderstaande formulier kunt u een e-mail naar ons sturen. Wij zullen hier zo spoedig mogelijk op reageren.</h2>
                <input class="inputField" type="text" name="naam" placeholder="Uw naam" required><br>
                <input class="inputField" type="email" name="email" placeholder="Uw e-mailadres" required><br>
                <input class="inputField" minlength="10" type="tel" name="tel" placeholder="Uw telefoonnummer" required><br>
                <br><textarea class="textareaField" rows="5" name="message" cols="30" placeholder="Uw bericht" required></textarea><br>
                <input class="contactBtn" type="submit" name="submit" value="Verzenden">
            </form>
            </div>
        </div>
        <div class="contactGridRechts">
            <h1>Openingstijden</h1>
            <br>
            <h2>Sneek/Leeuwarden</h2>
            <table class="contactTable">
              <tr>
                <th class="dag">Dag</th>
                <th class="openingSluit">Opening</th>
                <th class="openingSluit">Sluit</th>
              </tr>
              <tr>
                <td>Maandag</td>
                <td class="contactTijden">10:00</td>
                <td class="contactTijden">00:00</td>
              </tr>
              <tr>
                <td>Dinsdag</td>
                <td class="contactTijden">10:00</td>
                <td class="contactTijden">00:00</td>
              </tr>
              <tr>
                <td>Woensdag</td>
                <td class="contactTijden">10:00</td>
                <td class="contactTijden">00:00</td>
              </tr>
              <tr>
                <td>Donderdag</td>
                <td class="contactTijden">10:00</td>
                <td class="contactTijden">00:00</td>
              </tr>
              <tr>
                <td>Vrijdag</td>
                <td class="contactTijden">10:00</td>
                <td class="contactTijden">00:00</td>
              </tr>
              <tr>
                <td>Zaterdag</td>
                <td class="contactTijden">10:00</td>
                <td class="contactTijden">00:00</td>
              </tr>
              <tr>
                <td>Zondag</td>
                <td class="contactTijden">10:00</td>
                <td class="contactTijden">00:00</td>
              </tr>
            </table>
        <br>
        <br>
        <h2>Sneek</h2>
        <p>Leeuwenburg 11
            <br>Sneek
            <br>8601 CG</p>
            <br>
        <h2>Leeuwarden</h2>
        <p>Gouverneursplein 37
            <br>Leeuwarden
            <br>8911 HH</p>
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