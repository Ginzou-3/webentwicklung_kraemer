
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
            <?php include "templates/Navbar.html" ?>
        </div>

        <!------ Anmeldung   ----->
        <div class="col-md-8 ">
            <?= form_open('Login/index', array('role' => 'form'))?>

                <!-- Email input -->
                <div class="form-group">
                    <label for="email">Email-Adresse</label>
                    <input type="email" id="email" class="form-control form-control-lg " name="email"
                           placeholder="Email-Adresse eingeben"/>

                </div>

                <!-- Password input -->
                <div class="form-group ">
                    <label for="password">Passwort</label>
                    <input type="password" id="password" class="form-control form-control-lg" name="password"
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
                    <button type="submit" class="btn btn-primary mr-1" id="button">Einloggen</button>
                </div>

                <!-- Text -->
                <p>Noch nicht registriert? <a href=""> Registrieren </a></p>

                <p>Da der Login noch nicht realisiert wurde: <a href="ToDoListe"> Überspringen </a></p>

        </form>

        </div>

    </div>

</div>
