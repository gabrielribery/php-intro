<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="form-style.css">
    <title>Formular</title>
    
</head>
<body>
    
    <?php include 'footer-header/header.php';?>
    

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="errorContainer" class="error"></div>
            </div>
            <div class="col-md-4">
                <form id="myForm" method="post" action="bestaetigung.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="vorname" class="form-label">Vorname:</label>
                        <input type="text" id="vorname" name="vorname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail-Adresse:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefon" class="form-label">Telefonnummer:</label>
                        <input type="tel" id="telefon" name="telefon" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="datum" class="form-label">Datum:</label>
                        <input type="date" id="datum" name="datum" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Absenden" onmouseover="validateForm()" class="btn btn-primary">
                        <input type="button" value="Löschen" onclick="clearForm()" class="btn btn-default">
                    </div>
                </form>
            </div>
            <h1 id="errorContainer">test</h1>
            <div class="col-md-4">
                <!-- Leerer Platzhalter rechts -->
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var vorname = document.getElementById('vorname').value;
            var email = document.getElementById('email').value;
            var telefon = document.getElementById('telefon').value;
            var datum = document.getElementById('datum').value;

            var errorMessages = [];

            if (name === '') {
                errorMessages.push('Bitte geben Sie Ihren Namen ein.');
            }

            if (vorname === '') {
                errorMessages.push('Bitte geben Sie Ihren Vornamen ein.');
            }

            if (email === '') {
                errorMessages.push('Bitte geben Sie eine gültige E-Mail-Adresse ein.');
            }

            if (telefon === '') {
                errorMessages.push('Bitte geben Sie Ihre Telefonnummer ein.');
            }

            if (datum === '') {
                errorMessages.push('Bitte geben Sie ein Datum ein.');
            }

            var errorContainer = document.getElementById('errorContainer');
            errorContainer.innerHTML = ''; // Vorherige Fehlermeldungen löschen

            if (errorMessages.length > 0) {
                var errorList = document.createElement('ul');

                for (var i = 0; i < errorMessages.length; i++) {
                    var errorItem = document.createElement('li');
                    errorItem.innerText = errorMessages[i];
                    errorList.appendChild(errorItem);
                }

                errorContainer.appendChild(errorList);
                errorContainer.style.display = 'block';

                return false; // Formularübermittlung verhindern
            }
            else {
                errorContainer.style.display = 'none';
            }
        }

        function clearForm() {
            document.getElementById('name').value = '';
            document.getElementById('vorname').value = '';
            document.getElementById('email').value = '';
            document.getElementById('telefon').value = '';
            document.getElementById('datum').value = '';

            var errorContainer = document.getElementById('errorContainer');
            errorContainer.innerHTML = ''; // Fehlermeldungen löschen
            errorContainer.style.display = 'none';
        }
    </script>

    <?php include 'footer-header/footer.php'; ?>
</body>
</html>
