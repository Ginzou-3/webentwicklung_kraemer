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

            <!-- Personen Array --->

            <!-- Tabellenkopf -->
            <table class="table table-responsive table-bordered table-striped table-hover d-table"
                   data-show-columns="true"
                   data-show-toggle="true"
                   data-toggle="table"
                   data-search="true"
                   data-toolbar="#toolbar">
                <thead>
                <tr>
                    <?php
                    if (isset($personen[0]) && !(empty($personen))) {
                        foreach ($personen[0] as $key => $value) {
                            if ($key != "id") {
                                echo(" <th> ");
                                echo($key);
                                echo("</th>");
                            }
                        }
                    }
                    ?>
                    <th scope="col">Im Projekt</th>
                    <th scope="col">Aktionen</th>
                </tr>
                </thead>

                <!------ Tabelleninhalt ----->
                <tbody>
                <?php
                if (isset($personen) && !(empty($personen))) {
                    for ($i = 0; $i < count($personen); $i++) {
                        echo("<tr>");
                        foreach ($personen[0] as $key => $value) {
                            if($key != 'id') {
                                echo(" <td> " . $personen[$i][$key] . ("</td>"));
                            }
                        }
                        ?>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </td>

                        <td>


                            <a href="<?= base_url('/Personen/ced_edit/' . $personen[$i]['id'] . '/1/')?>">
                                <button type="submit" name="edit" id="edit" class='btn'><i class="far fa-edit"></i>
                                </button>
                            </a>

                            <a href="<?= base_url('/Personen/ced_edit/' . $personen[$i]['id'] . '/2/') ?>">
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
                <!--
                <script type="text/javascript">
                    function confirmDelete() {
                        return confirm('Are you sure you want to delete this category?');
                    }
                </script>
                -->
                </tbody>
            </table>


            <h2>Erstellen</h2>

            <form action="<?= base_url('Personen/submit_edit') ?>" method="post">

                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control form-control-lg"
                        <?=(isset($error['username']))?'is-invalid':''?>
                           id="username" name="username"
                           placeholder="Username"/>
                    <div class="ivalid-feedback">
                        <?=(isset($error['username']))?$error['username']:''?>
                    </div>
                </div>

                <!-- email input -->
                <div class="form-group">
                    <label>Email-Adresse:</label>
                    <input type="email" class="form-control form-control-lg"
                           <?=(isset($error['email']))?'is-invalid':''?>
                           id="email" name="email"
                           placeholder="Email-Adresse eingeben"/>
                    <div class="ivalid-feedback">
                        <?=(isset($error['email']))?$error['email']:''?>
                    </div>
                </div>

                <!-- Password input -->
                <div class="form-group">
                    <label>Passwort:</label>
                    <input type="password" class="form-control form-control-lg"
                        <?=(isset($error['password']))?'is-invalid':''?>
                           id="password" name="password"
                           placeholder="Passwort"/>
                    <div class="ivalid-feedback">
                        <?=(isset($error['password']))?$error['password']:''?>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                        Dem Projekt zugeordnet
                    </label>
                </div>

                <div class="button-group mt-2">
                    <button type="submit" class="btn btn-primary " name="submit">Speichern</button>
                    <button type="reset" class="btn btn-info " name="reset">Reset</button>
                </div>
            </form>

        </div>

    </div>

</div>