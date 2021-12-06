<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Head.html" ?>
    <title>Aufgaben</title>
</head>
<body>

<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Aufgaben</h1>
    </div>

    <div class="row">


        <!----    Navbar    ---->
        <?php include "Navbar.html" ?>


        <!----   Tabelle   ---->
        <div class="col-8">
            <table class="table table-hover">

                <!-- Aufgaben Array --->
                <?php
                $personen = array(
                    array(
                        "Aufgabenbezeichnung:" => "HTML Datei erstellen",
                        "Beschreibung der Aufgabe:" => "HTML Datei erstellen",
                        "Reiter:" => "ToDo",
                        "Zuständig" => "Max Mustermann"
                    ),
                    array(
                        "Aufgabenbezeichnung:" => "CSS Datei erstellen",
                        "Beschreibung der Aufgabe:" => "CSS Datei erstellen",
                        "Reiter:" => "ToDo",
                        "Zuständig" => "Max Mustermann"
                    ),
                    array(
                        "Aufgabenbezeichnung:" => "PC eingeschaltet",
                        "Beschreibung der Aufgabe:" => "PC einschalten",
                        "Reiter:" => "Erledigt",
                        "Zuständig" => "Petra Müller"
                    ),
                    array(
                        "Aufgabenbezeichnung:" => "Kaffee trinken",
                        "Beschreibung der Aufgabe:" => "Kaffee trinken",
                        "Reiter:" => "Erledigt",
                        "Zuständig" => "Petra Müller"
                    ),
                    array(
                        "Aufgabenbezeichnung:" => "Für die Uni lernen",
                        "Beschreibung der Aufgabe:" => "Für die Uni lernen",
                        "Reiter:" => "Verschoben",
                        "Zuständig" => "Max Mustermann"
                    ),
                );
                ?>

                <!-- Tabellenkopf -->
                <thead>
                <tr id="tableHeader">
                    <?php
                    if (isset($personen[0])&& !(empty($personen))) {
                        foreach ($personen[0] as $key => $value) {
                            echo(" <th> ");
                            echo($key);
                            echo("</th>");
                        }
                    }
                    ?>
                    <th scope="col">Aktion:</th>
                </tr>
                </thead>

                <!-- Tabelleneinträge -->
                <tbody>
                <?php
                if (isset($personen) && !(empty($personen))) {
                    for ($i = 0; $i < count($personen); $i++) {
                        echo ("<tr>");
                        foreach ($personen[0] as $key => $value) {
                            echo(" <td> " . $personen[$i][$key] . ("</td>"));
                        }
                        echo (("<td><i class=\"far fa-edit\"></i> 
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
                    <label class="form-label" for="aufgabe">Aufgabenbezeichnung:</label>
                    <input type="text" id="aufgabe" class="form-control" placeholder="Aufgabe"/>
                </div>

                <!-- text -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="beschreibung">Beschreibung der Aufgabe:</label>
                    <textarea class="form-control" id="beschreibung" rows="4" placeholder="Beschreibung"></textarea>
                </div>

                <!-- create date -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="createDate">Erstellungsdatum:</label>
                    <input type="date" id="createDate" class="form-control"/>
                </div>

                <!-- due date -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="dueDate">fällig bis:</label>
                    <input type="date" id="dueDate" class="form-control"/>
                </div>

                <!-- dropdown reiter  -->
                <div class="form-group">
                    <label class="form-label" for="selectReiter">Zugehöriger Reiter:</label>
                    <select class="custom-select" id="selectReiter">
                        <option>ToDo</option>
                        <option>Erledigt</option>
                        <option>Verschoben</option>
                    </select>
                </div>

                <!-- dropdown zustaendig -->
                <div class="form-group">
                    <label class="form-label" for="selectPerson">Zuständig:</label>
                    <select class="custom-select" id="selectPerson">
                        <option>Max Mustermann</option>
                        <option>Petra Müller</option>
                    </select>
                </div>

                <!-- button -->
                <button type="button" class="btn btn-primary">Speichern</button>
                <button type="button" class="btn btn-info">Reset</button>
            </form>


        </div>

    </div>

</div>
<?php include "Skripte.html" ?>
</body>
</html>
