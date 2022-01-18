
    <title>Reiter</title>
</head>
<body>

<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Reiter</h1>
    </div>


    <div class="row">


        <!----    Navbar    ---->
        <?php include "templates/Navbar.html" ?>


        <!------ Tabelle   ----->

        <div class="col-md-8">
            <table class="table table-hover">

                <!-- Reiter Array --->
                <?php
                $personen = array(
                    array(
                        "Name" => "ToDo",
                        "Beschreibung" => "Dinge die erledigt werden müssen."
                    ),
                    array(
                        "Name" => "Erledigt",
                        "Beschreibung" => "Dinge die erledigt sind."
                    ),
                    array(
                        "Name" => "Verschoben",
                        "Beschreibung" => "Dinge die später erledigt werden."
                    ),
                );
                ?>

                <!-- Tabellenkopf -->
                <thead>
                <tr>
                    <?php
                    if (isset($personen[0])) {
                        foreach ($personen[0] as $key => $value) {
                            echo(" <th> ");
                            echo($key);
                            echo("</th>");
                        }
                    }
                    ?>
                    <th scope="col"></th>
                    <th scope="col">Aktionen</th>
                </tr>
                </thead>

                <!-- Tabelleneintraege -->
                <tbody>
                <?php
                if (isset($personen) && !(empty($personen))) {
                    for ($i = 0; $i < count($personen); $i++) {
                        echo ("<tr>");
                        foreach ($personen[0] as $key => $value) {
                            echo(" <td> " . $personen[$i][$key] . ("</td>"));
                        }
                        echo (("<td></td><td><i class=\"far fa-edit\"></i> 
                                             <i class=\"far fa-trash-alt\"></i></td></tr>"));
                    }
                }
                ?>
                </tbody>
            </table>

            <!-- Formular -->
            <h4>
                Bearbeiten/Erstellen
            </h4>

            <form>
                <!-- input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="reiter">Bezeichnung des Reiters:</label>
                    <input type="text" id="reiter" class="form-control" placeholder="Reiter"/>
                </div>

                <!-- text -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="beschreibung">Beschreibung:</label>
                    <textarea class="form-control" id="beschreibung" rows="4" placeholder="Beschreibung"></textarea>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary">Speichern</button>
                <button type="button" class="btn btn-info">Reset</button>
            </form>


        </div>

    </div>

</div>