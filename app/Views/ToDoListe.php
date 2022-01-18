
    <title>ToDo-Liste</title>
</head>
<body>

<div class="container-fluid">

    <div class="jumbotron">
        <h1>Aufgabenplaner: ToDo's (Aktuelles Projekt)</h1>
    </div>


    <div class="row">

        <!----    Navbar    ---->
        <?php include "templates/Navbar.html" ?>


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
