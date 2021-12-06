<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Head.html" ?>
    <title>Login</title>
</head>
<body>

<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Login</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <div class="col-sm-2" id = "loginNavbar">
            <?php include "Navbar.html" ?>
        </div>

        <!------ Anmeldung   ----->
        <div class="col-md-8 ">

            <form>
                <!-- Email input -->
                <div class="form-group">
                    <label class="form-label" for="form3Example3">Email-Adresse</label>
                    <input type="email" id="form3Example3" class="form-control form-control-lg "
                           placeholder="Email-Adresse eingeben"/>

                </div>

                <!-- Password input -->
                <div class="form-group ">
                    <label class="form-label" for="form3Example4">Passwort</label>
                    <input type="password" id="form3Example4" class="form-control form-control-lg"
                           placeholder="Passwort"/>
                </div>

                <!-- Checkbox -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                        AGBs und Datenschutzbedingungen akzeptiert
                    </label>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <button type="button" class="btn btn-primary mr-1" id="button">Einloggen</button>
                </div>

                <!-- Text -->
                <p>Noch nicht registriert? <a href=""> Registrieren </a></p>

                <p>Da der Login noch nicht realisiert wurde: <a href="ToDoListe.php"> Überspringen </a></p>

            </form>
        </div>

    </div>

</div>

<?php include "Skripte.html" ?>
</body>
</html>