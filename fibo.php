<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include 'header.php'; ?>
<h2>Fibonacci-folgen abfrage</h2>
<?php
function fibonacci($schritte) {
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $schritte; $i++) {
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    return $a;
}

if (isset($_POST['zahl'])) {
    $eingabe = $_POST['zahl'];
    $ergebnis = fibonacci($eingabe);
    echo "Das Ergebnis ist: " . $ergebnis;
}
?>

<form method="post" action="">
    <label for="zahl">Zahl eingeben:</label>
    <input type="number" name="zahl" id="zahl">
    <input type="submit" value="Berechnen">
</form>

<?php include 'footer.php'; ?>
</body>
</html>