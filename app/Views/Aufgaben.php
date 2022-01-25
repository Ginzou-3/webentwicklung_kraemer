
    <title>Aufgaben</title>
</head>
<body>

<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Aufgaben</h1>
    </div>

    <div class="row">


        <!----    Navbar    ---->
        <?php include "templates/Navbar.html" ?>


        <!----   Tabelle   ---->
        <div class="col-8">
            <table class="table table-hover">

                <!-- Aufgaben Array --->

                <!-- Tabellenkopf -->
                <table class="table table-responsive table-bordered table-striped table-hover d-table"
                       data-show-columns="true"
                       data-show-toggle="true"
                       data-toggle="table"
                       data-search="true"
                       data-toolbar="#toolbar">
                <thead>
                <tr id="tableHeader">
                    <?php
                    if (isset($personen[0])&& !(empty($personen))) {
                        foreach ($personen[0] as $key => $value) {
                            if($key != 'id'){
                                echo(" <th> ");
                                echo($key);
                                echo("</th>");
                            }
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
                            if($key != 'id') {
                                echo(" <td> " . $personen[$i][$key] . ("</td>"));
                            }
                        }


                ?>


                <td>


                    <a href="<?= base_url('/Aufgaben/ced_edit/' . $personen[$i]['id'] . '/1/')?>">
                        <button type="submit" name="edit" id="edit" class='btn'><i class="far fa-edit"></i>
                        </button>
                    </a>

                    <a href="<?= base_url('/Aufgaben/ced_edit/' . $personen[$i]['id'] . '/2/') ?>">
                        <button type='submit' id="delete " name='delete' class='btn'
                        <!--onclick="return confirmDelete();" --> <i
                                class="far fa-trash-alt"></i></button>
                    </a>


                </td>

                </tr>

                <?php
                    }
                }

                ?>

                </tbody>
            </table>


            <!-- Formular -->
            <h4>
                Bearbeiten/Erstellen
            </h4>

                <form action="<?= base_url('Aufgaben/submit_edit') ?>" method="post">

                <!-- input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="aufgabe">Aufgabenbezeichnung:</label>
                    <input type="text" id="aufgabe" name="aufgabe" class="form-control" placeholder="Aufgabe"/>
                </div>

                <!-- text -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="beschreibung">Beschreibung der Aufgabe:</label>
                    <textarea class="form-control" id="beschreibung" name="beschreibung" rows="4" placeholder="Beschreibung"></textarea>
                </div>

                <!-- create date -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="createDate">Erstellungsdatum:</label>
                    <input type="date" id="createDate" name="createDate" class="form-control" />
                </div>

                <!-- due date -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="dueDate">fällig bis:</label>
                    <input type="date" id="dueDate" name="dueDate" class="form-control"/>
                </div>

                <!-- dropdown reiter  -->
                <div class="form-group">
                    <label class="form-label" for="selectReiter">Zugehöriger Reiter:</label>
                    <select class="custom-select" id="selectReiter" name="selectReiter">
                        <option>- bitte auswählen -</option>
                        <?php
                        if (isset($reiter) && !(empty($reiter))) {
                            for ($i = 0; $i < count($reiter); $i++) {
                                echo("<option>");
                                foreach ($reiter[0] as $key => $value) {
                                    if ($key == 'id') {
                                        echo( $reiter[$i][$key]);
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

                <!-- dropdown zustaendig -->
                <div class="form-group">
                    <label class="form-label" for="selectPerson">Zuständig:</label>
                    <select class="custom-select" id="selectPerson" name="selectPerson">
                        <option>- bitte auswählen -</option>
                        <?php
                        if (isset($mitglieder) && !(empty($mitglieder))) {
                            for ($i = 0; $i < count($mitglieder); $i++) {
                                echo("<option>");
                                foreach ($mitglieder[0] as $key => $value) {
                                    if ($key == 'id') {
                                        echo( $mitglieder[$i][$key]);
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

                <div class="form-group">
                    <input type="hidden" class="form-control form-control-lg" id="id" name="id"
                           placeholder="id" value="1"/>
                </div>

                <!-- button -->
                    <div class="button-group mt-2">
                        <button type="submit" class="btn btn-primary " name="submit">Speichern</button>
                        <button type="reset" class="btn btn-info " name="reset">Reset</button>
                    </div>
            </form>


        </div>

    </div>

</div>