<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Head.html" ?>
    <title>Projekte</title>
</head>
<body>
<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Projekte</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <?php include "Navbar.html" ?>


        <!------ Hauptkontent   ----->
        <div class="col-md-8 ">

            <!-- projekt -->
            <div class="form-group">
                <h2>Projekt Auswählen</h2>
                <select class="form-control">
                    <option>- bitte auswählen -</option>
                    <option>Projekt 1</option>
                    <option>Projekt 2</option>
                </select>
            </div>

            <!-- buttons projekt -->
            <div class="button-group mb-2">
                <button type="button" class="btn btn-primary ">Auswählen</button>
                <button type="button" class="btn btn-primary ">Bearbeiten</button>
                <button type="button" class="btn btn-danger ">Löschen</button>
            </div>


            <h2>Projekt bearbeiten/erstellen:</h2>

            <form>

                <!-- name input -->
                <div class="form-outline mb-4">
                    <label>Projektname:</label>
                    <input class="form-control" rows="1" placeholder="Projekt">
                </div>

                <!-- textarea -->
                <div class="form-outline mb-4">
                    <label>Projektbeschreibung:</label>
                    <textarea class="form-control" rows="3" placeholder="Beschreibung"></textarea>
                </div>

                <!-- buttons -->
                <div class="form-outline mb-4">
                    <button type="button" class="btn btn-primary ">Speichern</button>
                    <button type="button" class="btn btn-info ">Reset</button>
                </div>

            </form>

        </div>

    </div>

</div>
</div>

</div>

<?php include "Skripte.html" ?>
</body>
</html>