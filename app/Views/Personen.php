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
                            echo(" <th> ");
                            echo($key);
                            echo("</th>");
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
                            echo(" <td> " . $personen[$i][$key] . ("</td>"));
                        }
                        echo(("<td><div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\">
                            </div></td>"));

                        echo(("<td> 

                                <button class='btn'> <i class=\"far fa-edit\"></i></button>
                                <button class='btn' > <i class=\"far fa-trash-alt\" ></i></button>
                                </td>"
                        ));
                        echo("</tr>");
                    }
                }
                ?>
                </tbody>
            </table>


            <h2>Erstellen</h2>

            <form>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control form-control-lg" id="username"
                           placeholder="Username"/>
                </div>

                <!-- email input -->
                <div class="form-group">
                    <label>Email-Adresse:</label>
                    <input type="email" class="form-control form-control-lg" id="email"
                           placeholder="Email-Adresse eingeben"/>
                </div>

                <!-- Password input -->
                <div class="form-group">
                    <label>Passwort:</label>
                    <input type="password" class="form-control form-control-lg" id="passwort"
                           placeholder="Passwort"/>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label">
                        Dem Projekt zugeordnet
                    </label>
                </div>

                <div class="button-group mt-2">
                    <button type="submit" class="btn btn-primary ">Speichern</button>
                    <button type="reset" class="btn btn-info ">Reset</button>
                </div>
            </form>

        </div>

    </div>

</div>
