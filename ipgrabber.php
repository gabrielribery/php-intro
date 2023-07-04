<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/textstyle.css">
    <title>Document</title>
</head>
<body>
<?php include 'footer-header/header.php';?>

<?php

$accessKey = 'a7464c45ab142254bd7fa4cc5590fd90'; // Deinen ipstack API-Schlüssel hier eintragen

// IP-Adresse des Besuchers auslesen
$ip = $_SERVER['REMOTE_ADDR'];

// API-Aufruf an ipstack
$url = "http://api.ipstack.com/$ip?access_key=$accessKey";
$response = file_get_contents($url);
$data = json_decode($response, true);

if ($data && isset($data['latitude']) && isset($data['longitude']) && isset($data['city'])) {
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
    $city = $data['city'];

    // Datum und Uhrzeit
    $dateTime = date('Y-m-d H:i:s');

    // Ergebnis in Textdatei speichern
    $log = "IP-Adresse: $ip\nOrt: $city\nKoordinaten: $latitude, $longitude\nDatum und Uhrzeit: $dateTime\n\n";
    file_put_contents('log.txt', $log, FILE_APPEND | LOCK_EX);

    // Ausgabe des Ergebnisses
    echo "Deine IP-Adresse: $ip<br>";
    echo "Ort: $city<br>";
    echo "Koordinaten: $latitude, $longitude<br>";
    echo "Datum und Uhrzeit: $dateTime<br>";
} else {
    echo "Fehler beim Abrufen des Orts.";
}
?>
<?php include 'footer-header/footer.php'; ?>
</body>
</html>
