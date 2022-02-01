<title>Reiter</title>
</head>
<body>
<div class="container-fluid">

    <div class="jumbotron">
        <h1 style="text-align: center">Aufgabenplaner: Reiter</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <?php include "templates/Navbar.php" ?>


        <!------ Tabelle   ----->
        <div class="col-md-8">


            <h2>Löschen/Bearbeiten:</h2>

            <form action="<?= base_url('Reiter/submit_edit') ?>" method="post">

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control form-control-lg" id="reiter" name="reiter"
                           placeholder="Username" value="<?= $reiter['Name'] ?>"/>
                </div>

                <!-- email input -->
                <div class="form-group">
                    <label>Beschreibung:</label>
                    <input type="text" class="form-control form-control-lg" id="beschreibung" name="beschreibung"
                           placeholder="Email-Adresse eingeben" value="<?= $reiter['Beschreibung'] ?>"/>
                </div>


                <div class="form-group">
                    <input type="hidden" class="form-control form-control-lg" id="id" name="id"
                           placeholder="id" value="<?= $reiter['id'] ?>"/>
                </div>

                <div class="button-group mt-2">

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
