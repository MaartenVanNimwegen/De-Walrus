<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
include 'databaseconn.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET["deletePost"])){
	$sql = "DELETE FROM contact WHERE id = $_GET[deletePost]";
	
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
    	echo 'alert("Bericht met succes verwijderd!")';
    	echo '</script>';
	} else {
		echo '<script language="javascript">';
    	echo 'alert("Verwijderen mislukt!")';
    	echo '</script>';
	}
}
if(isset($_GET["deletePost2"])){
	$sql = "DELETE FROM reserveringen WHERE id = $_GET[deletePost2]";
	
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
    	echo 'alert("Reservering met succes verwijderd!")';
    	echo '</script>';
	} else {
		echo '<script language="javascript">';
    	echo 'alert("Verwijderen mislukt!")';
    	echo '</script>';
	}
	$conn->close();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dashboard</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="icon" type="image/png" sizes="32x32" href="fotos/icon32x32.png">
	</head>
	<body>
		<nav class="dashboardTopnav">
			<div class="dashboardGrid">
                <h1>Beheerders dashboard de Walrus</h1>
            </div>
            <div class="dashboardGridRechts">
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log uit</a>
            </div>
		</nav>
		<div class="dashboardInhoud">
			<h1>Beheerders dashboard</h1><br>
			<h2>Welkom terug, <?=$_SESSION['name']?>!</h2>
			<br><br>

			<div class="dashboardContactFormulieren">
			<?php
			echo "<h2>Dit zijn de ingevulde contact formulieren</h2>";
			include 'databaseconn.php';
			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT id, naam, email, telefoon, bericht FROM contact";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<table class='tableContact'><tr><th>Naam</th><th>Email</th><th>Telefoon</th><th>Bericht</th></tr>";
				while($row = $result->fetch_assoc()) {
				  echo "<tr><td>".$row["naam"]."</td><td>".$row["email"]."</td><td>".$row["telefoon"]."</td><td>".$row["bericht"]."</td><td><a href='home.php?deletePost=".$row['id']."'><span class='fa fa-trash prullenbak'></a></td>";
				}
				echo "</table>";
			} else {
				echo "Geen ingevulde formulieren.";
			}
			$conn->close();
			?>
			<?php
			echo "<br><br><h2>Dit zijn de ingediende reserveringen</h2>";
			include 'databaseconn.php';
			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT id, locatie, aantal, tijd, datum, naam, tel, email, bericht FROM reserveringen";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<table class='tableContact'><tr><th>Locatie</th><th>Aantal</th><th>Tijd</th><th>Datum</th><th>Naam</th><th>Telefoon</th><th>Email</th><th>Bericht</th></tr>";
				while($row = $result->fetch_assoc()) {
				  echo "<tr><td>".$row["locatie"]."</td><td>".$row["aantal"]."</td><td>".$row["tijd"]."</td><td>".$row["datum"]."</td><td>".$row["naam"]."</td><td>".$row["tel"]."</td><td>".$row["email"]."</td><td>".$row["bericht"]."</td><td><a href='home.php?deletePost2=".$row['id']."'><span class='fa fa-trash prullenbak'></a></td>";
				}
				echo "</table>";
			} else {
				echo "Geen gemaakte reserveringen.";
			}
			$conn->close();
			?>
			</div>
		</div>
		<footer class="dashboardStickyFooter">
        <p>© 2021 - Maarten en Jesper - Alle rechten voorbehouden.</p>
    </footer>
	</body>
</html>