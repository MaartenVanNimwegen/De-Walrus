<?php
    if (isset($_POST["submit"])) {      
        $Location = $_POST["locatie"];
        $Attendees = $_POST["personen"];
        $Time = $_POST["time"];
        $Date = $_POST["date"];
        $Name = $_POST["name"];
        $PhoneNumber = $_POST["phonenumber"];
        $Email = $_POST["email"];
        $Note = $_POST["note"];
        
        $Subject = "Nieuwe reservering";
        $Message = "
          Nieuwe reservering van $Name in $Location voor $Attendees personen op $Date om $Time.
          Telefoonnummer: $PhoneNumber.
          E-Mail: $Email.
          Notitie: $Note
        ";
    
        $To = "projectschoolsneek@gmail.com";
        $From = $Email;
        $Headers = "From: $From";
        mail($To,$Subject,$Message,$Headers);
        echo '<script language="javascript">';
        echo 'alert("Reservering met succes verzonden!")';
        echo '</script>';

        include 'databaseconn.php';
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO reserveringen (locatie, aantal, tijd, datum, naam, tel, email, bericht)
        VALUES ('$Location', '$Attendees', '$Time', '$Date','$Name', '$PhoneNumber', '$Email', '$Note')";
        if ($conn->query($sql) === TRUE) {
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" type="image/png" sizes="32x32" href="fotos/icon32x32.png">
      <title>Reserveren - De Walrus</title>
  </head>
  <body>

    <div id="header-placeholder"></div>
    <script>
    $(function(){
      $("#header-placeholder").load("header.html");
    });
    </script>

    <div class="PageBgImg">
      <h1 class="PageTitle">Reserveren</h1>
      <h2 class="PageInfo">Je kunt hier online reserveren.</h2>
      <img class="HomeBacgroundImage" src="fotos/ReserverenBG.png" alt="Home image">
    </div>

<div class="contactIndeling">
  <div class="contactFormGrid">
    <div class="contactForm">
      <form class="form" action="" method="post">
        <h2>Informatie over uw reservering</h2>
          <select class="inputField2" id="locatie" name="locatie" required>
            <option value="" disabled selected hidden>Locatie</option>
            <option value="Leeuwarden">Leeuwarden</option>
            <option value="Sneek">Sneek</option>
          </select>
          <br>
          <input class="inputField" id="personen" name="personen" type="text" placeholder="Aantal personen" maxlength="2" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"> <br>
          <input class="inputField" id="time" name="time" type="time" required> <br>
          <input class="inputField" id="datePickerId" name="date" type="date" required>
          <br></br>
          <h2 class="ReserveringsTekst">Persoonlijke informatie</h2>
          <input class="inputField" id="name" name="name" type="text" placeholder="Volledige naam" required> <br>
          <input class="inputField" id="phonenumber" name="phonenumber" type="tel" placeholder="Telefoon nr." maxlength="20" required> <br>
          <input class="inputField" id="email" name="email" type="email" placeholder="E-Mail" required> <br>
          <input class="inputField" class="ReserverenNotitie" id="note" name="note" type="text" placeholder="Notitie (optioneel)">
          <br></br>
          <input class="contactBtn" class="Button" type="submit" name="submit" id="submit" value="Reserveer">
      </form>
    </div>
  </div>
  <div class="contactGridRechts">
      <img class="reserverenImg" src="fotos/reserveren.png" alt="reserveren">
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
<script src="parameterReserveren.js"></script>
<script> 
var date= new Date(); 
var year= date.getFullYear(); 
var month= date.getMonth()+1;
var todayDate = String(date.getDate()).padStart(2,'0');
var datePattern = year + '-' + month + '-' + todayDate; document.getElementById("datePickerId").value = datePattern;
datePickerId.min = new Date().toLocaleDateString('en-ca') 
</script>