
    <title>Projekte</title>
</head>
<body>
<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Projekte</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <?php include "templates/Navbar.html" ?>


        <!------ Hauptkontent   ----->
        <div class="col-md-8 ">

            <!-- projekt -->
            <form action="<?= base_url('Projekte/submit_edit') ?>" , method="post">

                <!-- projekt -->
                <div class="form-group">
                    <h2>Projekt Auswählen</h2>
                    <select class="form-control" id="selectfield" name="selectfield">
                        <option>- bitte auswählen -</option>
                        <?php
                        if (isset($aufgaben) && !(empty($aufgaben))) {
                            for ($i = 0; $i < count($aufgaben); $i++) {
                                echo("<option>");
                                foreach ($aufgaben[0] as $key => $value) {
                                    if ($key == 'Name') {
                                        echo( $aufgaben[$i][$key]);
                                    }
                                }
                                ?>
                                </option>

                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>

                <!-- buttons projekt -->
                <div class="button-group mb-2">
                    <button type="submit" class="btn btn-primary " id="choose" name="choose">Auswählen</button>
                    <button type="submit" class="btn btn-primary " id="edit" name="edit">Bearbeiten</button>
                    <button type="submit" class="btn btn-danger " id="delete" name="delete">Löschen</button>
                </div>


            <h2>Projekt bearbeiten/erstellen:</h2>

                <!-- name input -->
                <div class="form-outline mb-4">
                    <label>Projektname:</label>
                    <input class="form-control" rows="1" placeholder="Projekt" id="project" name="project">
                </div>

                <!-- textarea -->
                <div class="form-outline mb-4">
                    <label>Projektbeschreibung:</label>
                    <textarea class="form-control" rows="3" placeholder="Beschreibung" id="description"
                              name="description"></textarea>
                </div>

                <!-- buttons -->
                <div class="form-outline mb-4">
                    <button type="submit" class="btn btn-primary " id="save" name="save">Speichern</button>
                    <button type="submit" class="btn btn-info " id="reset" name="reset">Reset</button>
                </div>

            </form>

        </div>

    </div>

</div>

