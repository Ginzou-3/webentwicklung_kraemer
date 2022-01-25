<title>Login</title>
</head>
<body>

<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Login</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <div class="col-sm-2" id="loginNavbar">
        </div>

        <!------ Anmeldung   ----->
        <div class="col-md-8 ">
            <form action="Login" method="post">

            <!-- Email input -->
                <div class="form-group">
                    <label for="email">Email-Adresse</label>
                    <input type="email" id="email" class="form-control <?= (isset($error['email'])) ? 'is-invalid' : '' ?>" name="email"
                           value="<?= (isset($person['email'])) ? $person["email"] : '' ?>" placeholder="Email-Adresse eingeben" />
                    <div class="invalid-feedback">
                        <?= (isset($error['email'])) ? $error['email'] : '' ?>
                    </div>
                </div>


                <!-- Password input -->
                <div class="form-group ">
                    <label for="password">Passwort</label>
                    <input type="password" id="password" class="form-control <?= (isset($error['password'])) ? 'is-invalid' : '' ?>" name="password"
                            " placeholder="Passwort" />
                    <div class="invalid-feedback">
                        <?= (isset($error['password'])) ? $error['password'] : '' ?>
                    </div>
                </div>


                <!-- Checkbox -->
                <div class="form-check mb-3">
                    <input class="form-check-input <?= (isset($error['checkbox'])) ? 'is-invalid' : '' ?>  " type="checkbox" value="<?= (isset($person['checkbox'])) ? '' : '' ?>" id="checkbox" name=checkbox>
                    <label class="form-check-label">
                        AGBs und Datenschutzbedingungen akzeptiert
                    </label>
                    <div class="invalid-feedback">
                        <?= (isset($error['checkbox'])) ? $error['checkbox'] : '' ?>
                    </div>
                </div>


                <!-- Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary mr-1" id="button">Einloggen</button>
            </div>

            <!-- Text -->
            <p>Noch nicht registriert? <a href=""> Registrieren </a></p>

            </form>

        </div>

    </div>

</div>
