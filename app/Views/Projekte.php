<title>Projekte</title>
</head>
<body>
<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: Projekte</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <div class="col-sm-2">
            <nav class="navbar bg-light">

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Login/logout') ?>">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Projekte">Projekte</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown" style= <?= (isset($_SESSION["projekt"])) ? "" : "display:none" ?>>
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <?= (isset($_SESSION["projekt"])) ? $_SESSION["projekt"] : "Aktuelles Projekt" ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('Reiter') ?>">Reiter</a>
                            <a class="dropdown-item" href="<?= base_url('Aufgaben') ?>">Aufgaben</a>
                            <a class="dropdown-item" href="<?= base_url('Personen') ?>">Mitglieder</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <!------ Hauptkontent   ----->
        <div class="col-md-8 ">

            <!-- projekt -->
            <form action="<?= base_url('Projekte/submit_edit') ?>" , method="post">

                <!-- projekt -->
                <div class="form-group">
                    <h2>Projekt Auswählen</h2>
                    <select class="form-control" id="selectfield" name="selectfield">
                        <option><?= (isset($_SESSION["projekt"])) ? $_SESSION["projekt"] : "- bitte auswählen -" ?></option>
                        <?php
                        if (isset($aufgaben) && !(empty($aufgaben))) {
                            for ($i = 0; $i < count($aufgaben); $i++) {
                                foreach ($aufgaben[0] as $key => $value) {
                                    if ($key == 'Name' && isset($_SESSION["projekt"]) && $aufgaben[$i][$key] != $_SESSION["projekt"]) {
                                        echo("<option>");
                                        echo($aufgaben[$i][$key]);
                                        echo("</option>");
                                    } elseif ($key == 'Name' && !isset($_SESSION["projekt"])) {
                                        echo("<option>");
                                        echo($aufgaben[$i][$key]);
                                        echo("</option>");
                                    }
                                }
                                ?>

                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>

                <!-- buttons projekt -->
                <div class="button-group mb-2">
                <button type="submit" class="btn btn-primary " id="choose" name="choose">Auswählen</button>

                <form action="<?= base_url('Projekte/submit_edit') ?>" , method="post">
                    <button type="submit" class="btn btn-danger " id="delete" name="delete"
                            onclick="return confirmDelete()">Löschen
                    </button>
                </form>
                </div>


                <?php if (isset($_SESSION["projekt"])): ?>
                    <a href="<?= base_url('/Projekte/ced_edit/' . $_SESSION["projekt"] . '/1/') ?>">
                        <button type="submit" class="btn btn-primary ">Bearbeiten</button>
                    </a>
                <?php endif ?>


                <h2>Projekt erstellen:</h2>

                <form action="<?= base_url('Projekte/submit_edit') ?>" , method="post">
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

                <script>
                    function confirmDelete() {
                        return confirm('Wollen sie das Projekt löschen?');

                    }
                </script>

            </form>

        </div>

    </div>


