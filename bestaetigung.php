<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/textstyle.css">
    <title>Bestätigung</title>
</head>
<body>
<?php include 'footer-header/header.php';?>
    <h1>Vielen Dank für Ihre Eingabe!</h1>

    <h2>Ihre Daten:</h2>
    <p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
    <p><strong>Vorname:</strong> <?php echo $_POST['vorname']; ?></p>
    <p><strong>E-Mail-Adresse:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Telefonnummer:</strong> <?php echo $_POST['telefon']; ?></p>
    <p><strong>Datum:</strong> <?php echo $_POST['datum']; ?></p>
    <?php include 'footer-header/footer.php'; ?>
</body>
</html>
