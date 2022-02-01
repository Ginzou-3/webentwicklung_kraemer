<title>Projekte</title>
</head>
<body>
<div class="container-fluid">

    <div class="jumbotron">
        <h1 style="text-align: center">Aufgabenplaner: Projekte</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <?php include "templates/Navbar.php" ?>


        <!------ Tabelle   ----->
        <div class="col-md-8">


            <h2>Löschen/Bearbeiten:</h2>

            <form action="<?= base_url('Projekte/submit_edit') ?>" method="post">

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name"
                           placeholder="Name" value="<?= $projekt['Name'] ?>"/>
                </div>

                <!-- email input -->
                <div class="form-group">
                    <label>Beschreibung:</label>
                    <input type="text" class="form-control form-control-lg" id="beschreibung" name="beschreibung"
                           placeholder="Beschreibung" value="<?= $projekt['Beschreibung'] ?>"/>
                </div>


                <div class="button-group mt-2">

                    <button type="submit" class="btn btn-primary" name="edit" id="edit">Speichern</button>
                    <button type="submit" class="btn btn-info" name="reset" id="reset">Abbrechen</button>

                </div>
            </form>

        </div>

    </div>

</div>
