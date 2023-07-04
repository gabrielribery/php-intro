<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/textstyle.css">
    <title>Formular</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<?php include 'footer-header/header.php';?>
    <form method="post" action="bestaetigung.php">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="vorname">Vorname:</label>
            <input type="text" id="vorname" name="vorname" required>
        </div>
        <div>
            <label for="email">E-Mail-Adresse:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="telefon">Telefonnummer:</label>
            <input type="tel" id="telefon" name="telefon" required>
        </div>
        <div>
            <label for="datum">Datum:</label>
            <input type="date" id="datum" name="datum" required>
        </div>
        <div>
            <input type="submit" value="Absenden" onmouseover="validateForm()">
            <input type="button" value="Löschen" onclick="clearForm()">
        </div>
    </form>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var vorname = document.getElementById('vorname').value;
            var email = document.getElementById('email').value;
            var telefon = document.getElementById('telefon').value;
            var datum = document.getElementById('datum').value;

            var errorMessages = [];

            if (name === '') {
                errorMessages.push('Did you miss something?');
            }

            if (vorname === '') {
                errorMessages.push('Dont know you Name?');
            }

            if (email === '') {
                errorMessages.push('maybe ask goggle: what is an email adress....');
            }

            if (telefon === '') {
                errorMessages.push('phone number needed for spam calls....');
            }

            if (datum === '') {
                errorMessages.push('https://www.youtube.com/watch?v=-EiX7a2SBeA');
            }

            if (errorMessages.length > 0) {
                alert(errorMessages.join('\n'));
                event.preventDefault();
            }
        }

        function clearForm() {
            document.getElementById('name').value = '';
            document.getElementById('vorname').value = '';
            document.getElementById('email').value = '';
            document.getElementById('telefon').value = '';
            document.getElementById('datum').value = '';
        }
    </script>
    <?php include 'footer-header/footer.php'; ?>
</body>
</html>
