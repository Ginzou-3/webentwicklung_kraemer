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


            <h2>Löschen/Bearbeiten:</h2>

            <form action="<?= base_url('Personen/submit_edit') ?>" method="post">

                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control form-control-lg" id="username" name="username"
                           placeholder="Username" value="<?= $personen['Username'] ?>" <?=($todo==2)? 'disabled' : ''?>/>
                </div>

                <!-- email input -->
                <div class="form-group">
                    <label>Email-Adresse:</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                           placeholder="Email-Adresse eingeben" value="<?= $personen['EMail'] ?>" <?=($todo==2)? 'disabled' : ''?>/>
                </div>

                <!-- Password input -->

                <?php if ($todo == 1) : ?>
                    <div class="form-group">
                        <label>Passwort:</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password"
                               placeholder="Passwort" value="<?= $personen['Password'] ?>" />
                    </div>
                <?php endif ?>

                <div class="form-group">
                    <input type="hidden" class="form-control form-control-lg" id="id" name="id"
                           placeholder="id" value="<?= $personen['id'] ?>" />
                </div>


                <?php if ($todo == 1) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                            Dem Projekt zugeordnet
                        </label>
                    </div>
                <?php endif ?>

                <div class="button-group mt-2">

                    <?php if ($todo == 0) : ?>
                        <button type="submit" class="btn btn-primary" name="submit" id="submit"> Erstellen</button>
                    <?php endif ?>

                    <?php if ($todo == 1) : ?>
                        <button type="submit" class="btn btn-primary" name="edit" id="edit">Speichern</button>
                    <?php endif ?>

                    <?php if ($todo == 2) : ?>
                        <button type="submit" class="btn btn-danger" name="delete" id="delete">Löschen</button>
                    <?php endif ?>

                    <button type="submit" class="btn btn-info" name="reset" id="reset">Abbrechen</button>

                </div>
            </form>

        </div>

    </div>

</div>