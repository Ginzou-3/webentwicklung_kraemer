<title>Personen</title>
</head>
<body>
<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Personen</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <?php include "templates/Navbar.html" ?>


        <!------ Tabelle   ----->
        <div class="col-md-8">

            <h2>Erstellen</h2>

            <form>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control form-control-lg" id="username"
                           placeholder="Username"/>
                </div>

                <!-- email input -->
                <div class="form-group">
                    <label>Email-Adresse:</label>
                    <input type="email" class="form-control form-control-lg" id="email"
                           placeholder="Email-Adresse eingeben"/>
                </div>

                <!-- Password input -->
                <div class="form-group">
                    <label>Passwort:</label>
                    <input type="password" class="form-control form-control-lg" id="passwort"
                           placeholder="Passwort"/>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                        Dem Projekt zugeordnet
                    </label>
                </div>

                <div class="button-group mt-2">
                    <button type="submit" class="btn btn-primary ">Speichern</button>
                    <button type="reset" class="btn btn-info ">Reset</button>
                </div>
            </form>

        </div>

    </div>

</div>
