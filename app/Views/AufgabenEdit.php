<title>AufgabenEdit</title>
</head>
<body>
<div class="container-fluid">

    <div class="jumbotron">
        <h1 style="text-align: center">Aufgabenplaner: Aufgaben</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <?php include "templates/Navbar.php" ?>


        <!------ Tabelle   ----->
        <div class="col-md-8">


            <h2>Löschen/Bearbeiten:</h2>

            <form action="<?= base_url('Aufgaben/submit_edit') ?>" method="post">

                <div class="form-group">
                    <label>Aufgabenbezeichnung:</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name"
                           placeholder="name" value="<?= $aufgaben['Name'] ?>"/>
                </div>


                <div class="form-group">
                    <label>Beschreibung der Aufgabe:</label>
                    <input type="text" class="form-control form-control-lg" id="beschreibung" name="beschreibung"
                           placeholder="Beschreibung" value="<?= $aufgaben['Beschreibung'] ?>"/>
                </div>

                <div class="form-group">
                    <label>Erstellungsdatum:</label>
                    <input type="date" class="form-control form-control-lg" id="date" name="date"
                           value="<?= $aufgaben['Erstellungsdatum'] ?>"/>
                </div>

                <div class="form-group">
                    <label>fällig bis:</label>
                    <input type="date" class="form-control form-control-lg" id="date_end" name="date_end"
                           value="<?= $aufgaben['Fälligkeitsdatum'] ?>"/>
                </div>

                <div class="form-group">
                    <label>Zugehöriger Reiter:</label>
                    <input type="text" class="form-control form-control-lg" id="reiter" name="reiter"
                           value="<?= $aufgaben['reiterid'] ?>"/>
                </div>

                <div class="form-group">
                    <label>Zuständig:</label>
                    <input type="text" class="form-control form-control-lg" id="ersteller" name="ersteller"
                           value="<?= $aufgaben['Mitglieder'] ?>"/>
                </div>


                <div class="form-group">
                    <input type="hidden" class="form-control form-control-lg" id="id" name="id"
                           placeholder="id" value="<?= $aufgaben['id'] ?>" />
                </div>


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
