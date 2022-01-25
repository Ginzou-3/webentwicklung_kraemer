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

                <!-- Tabellenkopf -->
                <thead>
                <tr>
                    <?php
                    if (isset($reiter[0])) {
                        foreach ($reiter[0] as $key => $value) {
                            if($key != "id") {
                                echo(" <th> ");
                                echo($key);
                                echo("</th>");
                            }
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
                if (isset($reiter) && !(empty($reiter))) {
                    for ($i = 0; $i < count($reiter); $i++) {
                        echo("<tr>");
                        foreach ($reiter[0] as $key => $value) {
                            if($key != "id")
                                echo(" <td> " . $reiter[$i][$key] . ("</td>"));
                        }
                        ?>
                        <td></td>
                        <td>

                            <a href="<?= base_url('/Reiter/ced_edit/' . $reiter[$i]['id'] . '/1/') ?>">
                                <button type="submit" name="edit" id="edit" class='btn'><i class="far fa-edit"></i>
                                </button>
                            </a>

                            <a href="<?= base_url('/Reiter/ced_edit/' . $reiter[$i]['id'] . '/2/') ?>">
                                <button type='submit' id="delete " name='delete' class='btn'>
                                    <i class="far fa-trash-alt"></i>
                                </button>
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

            <form action="<?= base_url('Reiter/submit_edit') ?>" method="post">
                <h4>
                    Bearbeiten/Erstellen
                </h4>


                <!-- input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="reiter">Bezeichnung des Reiters:</label>
                    <input type="text" id="reiter" name="reiter" class="form-control" placeholder="Reiter"/>
                </div>

                <!-- text -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="beschreibung">Beschreibung:</label>
                    <textarea class="form-control" id="beschreibung" name="beschreibung" rows="4" placeholder="Beschreibung"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary" id="save" name="save" >Speichern</button>
                <button type="submit" class="btn btn-info" id="reset" name="reset" >Reset</button>
            </form>


        </div>

    </div>