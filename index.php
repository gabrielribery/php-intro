<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
session_set_cookie_params(10800); //sek. also wenn nach 30 sek ein refresh gemacht wird geht der benutzer counter hoch
session_start();
?>

<?php require 'header.php';
echo '<h2>Gratulation. Du bist besucher Nr.:</h2>';
?>
<?php
$counterstand = intval(file_get_contents("counter.txt"));
 
if(!isset($_SESSION['counter_ip']))
   {
   $counterstand++;
   file_put_contents("counter.txt", $counterstand);
 
   $_SESSION['counter_ip'] = true;
   }
 
echo $counterstand;
?>


<?php
echo '<h2>Holla</h2>';
echo "Heute ist " . date("l") . " der " . date("d/m/Y");


function viewVariable($parameterName) {
    echo '<p>Was für ein ' . $parameterName . ' um backend zu lernen.</p>';
}
$argumentVariable = 'opportunity';
$varZwei = "<b>noch ein mimimi</b>";

viewVariable($argumentVariable);
viewVariable($varZwei);
viewVariable($argumentVariable);

?>
<?php
echo 'this';
?>
<?php require 'footer.php'; ?>
</body>
</html>
