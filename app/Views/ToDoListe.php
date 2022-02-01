
    <title>ToDo-Liste</title>
</head>
<body>

<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: ToDo's (Aktuelles Projekt)</h1>
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
                    <li class="nav-item dropdown" style = <?= (isset($_SESSION["projekt"])) ? "" : "display:none"  ?> >
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <?=(isset($_SESSION["projekt"])) ? $_SESSION["projekt"] : "Projekte"  ?>
                        </a>
                        <?php if(isset($_SESSION["projekt"])) {

                            echo ("
                            <div class=\"dropdown-menu\">
                            <a class=\"dropdown-item\" href=\"<?= base_url('Reiter') ?>\">Reiter</a>
                            <a class=\"dropdown-item\" href=\"<?= base_url('Aufgaben') ?>\">Aufgaben</a>
                            <a class=\"dropdown-item\" href=\"<?= base_url('Personen') ?>\">Mitglieder</a>
                        </div> ");

                        } ?>
                    </li>
                </ul>
            </nav>
        </div>


        <!-- Hauptkontent -->

        <div class="col-10">
            <div class="row" id="cards">
                <div class="col">

                    <div class="card" id="card1">
                        <div class="card-header">
                            ToDo:
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                <ul style="list-style: none">
                                    <li> HTML Datei erstellen (Max Mustermann)</li>
                                </ul>
                            </div>
                            <div class="list-group-item">
                                <ul style="list-style: none">
                                    <li> CSS Datei erstellen (Max Mustermann)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" id="card2">
                        <div class="card-header">
                            Erledigt:
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                <ul style="list-style: none">
                                    <li> PC eingeschaltet (Petra Müller)</li>
                                </ul>
                            </div>
                            <div class="list-group-item">
                                <ul style="list-style: none">
                                    <li> Kaffe trinken (Petra Müller)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" id="card3">
                        <div class="card-header">
                            Verschoben:
                        </div>
                        <div class="list-group">
                            <div class="list-group-item">
                                <ul style="list-style: none">
                                    <li> Für die Uni lernen (Max Mustermann)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
