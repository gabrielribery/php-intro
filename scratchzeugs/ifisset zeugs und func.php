<?php
session_start(); // session starten >!!!!!!falls noch nicht geschehen!!!!!!!!

// func überprüfen und ausgeben werte
function printSessionValues() {
    $fields = ['name', 'vorname', 'email', 'telefon', 'datum'];

    foreach($fields as $field) {
        if(isset($_SESSION[$field])) {
            echo "<p><strong>" . ucfirst($field) . ":</strong> <span class=\"data\">" . $_SESSION[$field] . "</span></p>";
        } else {
            echo "<p><strong>" . ucfirst($field) . ":</strong> " . ucfirst($field) . " fehlt</p>";
        }
    }
}

// daten aus dem post-array erhalten und in sessionvariablen saven
$_SESSION['name'] = $_POST['name'];
$_SESSION['vorname'] = $_POST['vorname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['telefon'] = $_POST['telefon'];
$_SESSION['datum'] = $_POST['datum'];
//print_r($_SESSION); //ausgabe in error log in console in browser

/* if(isset($_POST['nummer'])){
    if(isset($_SESSION[nummer])){
        $_SESSION['nummer'] = $_SESSION['nummer'] + $_POST['nummer'];
    }else{
        $_SESSION['nummer'] = $_POST['nummer'];
    }
}*/ //simpler kalkulator-> Aktuelle nummer im cache + neue nummer = neue nummer im cache

// setzen der zusätzlichen werte die für den user unsichtbar sein müssen da er nicht sehen soll das ich seine ip grabbe
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR']; // IP-Adresse des Users
$_SESSION['session_id'] = session_id(); // Session-ID
$_SESSION['speicherungsdatum'] = date('Y-m-d H:i:s'); // Aktuelles Datum und Uhrzeit // Uhrzeit nicht aktuell geht 2h nach

// TXT-Dateiname erstellen aktuell mit Session ID evtl besser mit IP?
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
    <link rel="stylesheet" href="starwars.css">
    <title>Bestätigung</title>
</head>
<body>
<?php include 'footer-header/header.php';?>

    <h3>Vielen Dank für Ihre Eingabe! Ihre Daten:</h3>
    
    <?php printSessionValues(); ?>
    

    <?php include 'footer-header/footer.php'; ?>
   
  
        


</body>
</html>
