<?php
session_start(); // Session starten, falls noch nicht geschehen

// Daten aus dem POST-Array erhalten und in Session-Variablen speichern
$_SESSION['name'] = $_POST['name'];
$_SESSION['vorname'] = $_POST['vorname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['telefon'] = $_POST['telefon'];
$_SESSION['datum'] = $_POST['datum'];
//print_r($_SESSION); //ausgabe in error log in console in browser

// Setzen der zusätzlichen Werte die für den User unsichtbar sein sollten
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR']; // IP-Adresse des Users
$_SESSION['session_id'] = session_id(); // Session-ID
$_SESSION['speicherungsdatum'] = date('Y-m-d H:i:s'); // Aktuelles Datum und Uhrzeit // Uhrzeit nicht aktuell geht 2h nach

// TXT-Dateiname erstellen
$dateiname = 'session_data_' . $_SESSION['session_id'] . '.txt';

// Inhalt der TXT-Datei erstellen
$inhalt = "Name: " . $_SESSION['name'] . "\n";
$inhalt .= "Vorname: " . $_SESSION['vorname'] . "\n";
$inhalt .= "E-Mail-Adresse: " . $_SESSION['email'] . "\n";
$inhalt .= "Telefonnummer: " . $_SESSION['telefon'] . "\n";
$inhalt .= "Datum: " . $_SESSION['datum'] . "\n";
$inhalt .= "IP-Adresse: " . $_SESSION['ip'] . "\n";
$inhalt .= "Session-ID: " . $_SESSION['session_id'] . "\n";
$inhalt .= "Speicherungsdatum: " . $_SESSION['speicherungsdatum'] . "\n";


// TXT-Datei speichern
file_put_contents($dateiname, $inhalt);
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/textstyle.css">
    <title>Bestätigung</title>
</head>
<body>
    <?php include 'footer-header/header.php'; ?>

    <h3>Vielen Dank für Ihre Eingabe! Ihre Daten:</h3>
    <p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
    <p><strong>Vorname:</strong> <?php echo $_SESSION['vorname']; ?></p>
    <p><strong>E-Mail-Adresse:</strong> <?php echo $_SESSION['email']; ?></p>
    <p><strong>Telefonnummer:</strong> <?php echo $_SESSION['telefon']; ?></p>
    <p><strong>Datum:</strong> <?php echo $_SESSION['datum']; ?></p>
  
    
    <?php include 'footer-header/footer.php'; 
        
   /* if(isset($_SESSION['name'])){
        echo $_SESSION['name'];
    } else {
        echo 'Name fehlt'
    } */ //echo wenn leer Namefehlt ansonsten Input echo


?>

</body>
</html>