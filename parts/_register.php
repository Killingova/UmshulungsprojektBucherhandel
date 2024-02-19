<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container my-5">
    <div class="bg-dark text-white p-4 rounded">
        <h2 class="text-center mb-4">Ich möchte ein Konto anlegen</h2>
        <form action="/logic/registerprozess.php" method="post">
            <div class="mb-3">
                <label for="accountTypeSelect" class="form-label">Art des Kontos</label>
                <select id="accountTypeSelect" class="form-select" name="account_type">
                    <option value="privat">Privat</option>
                    <option value="unternehmen">Unternehmen</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="anredeSelect" class="form-label">Anrede</label>
                <select id="anredeSelect" class="form-select" name="anrede">
                    <option value="Herr">Herr</option>
                    <option value="Frau">Frau</option>
                    <!-- Weitere Optionen hinzufügen -->
                </select>
            </div>
            <div class="mb-3">
                <label for="titelInput" class="form-label">Titel (optional)</label>
                <input type="text" class="form-control" id="titelInput" name="titel">
            </div>
            <div class="mb-3">
                <label for="vornameInput" class="form-label">Vorname</label>
                <input type="text" class="form-control" id="vornameInput" name="vorname" required>
            </div>
            <div class="mb-3">
                <label for="nachnameInput" class="form-label">Nachname</label>
                <input type="text" class="form-control" id="nachnameInput" name="nachname" required>
            </div>
            <div class="mb-3">
                <label for="firmaInput" class="form-label">Firma (optional)</label>
                <input type="text" class="form-control" id="firmaInput" name="firma">
            </div>
            <!-- Weitere Formularfelder entsprechend dem Bild hinzufügen -->
            <div class="row mb-3">
                <div class="col">
                    <label for="strasseInput" class="form-label">Straße</label>
                    <input type="text" class="form-control" id="strasseInput" name="strasse" required>
                </div>
                <div class="col-2">
                    <label for="hausnummerInput" class="form-label">Nr.</label>
                    <input type="text" class="form-control" id="hausnummerInput" name="hausnummer" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="plzInput" class="form-label">PLZ</label>
                    <input type="text" class="form-control" id="plzInput" name="plz" required>
                </div>
                <div class="col">
                    <label for="ortInput" class="form-label">Ort</label>
                    <input type="text" class="form-control" id="ortInput" name="ort" required>
                </div>
            </div>
            <!-- Passwortfelder hinzufügen -->
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Passwort</label>
                <input type="password" class="form-control" id="passwordInput" name="password" required minlength="8">
            </div>
            <div class="mb-3">
                <label for="passwordRepeatInput" class="form-label">Passwort wiederholen</label>
                <input type="password" class="form-control" id="passwordRepeatInput" name="passwordRepeat" required minlength="8">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-Mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <!-- Zustimmungs-Checkbox -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                <label class="form-check-label" for="termsCheck">Hiermit bestätige ich, dass ich das 16. Lebensjahr vollendet habe.</label>
            </div>
            <!-- Registrierungsbutton -->
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-warning">Konto anlegen</button>
            </div>
        </form>
    </div>
</div>
