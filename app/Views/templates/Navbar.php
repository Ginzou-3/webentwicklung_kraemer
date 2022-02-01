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
                    <?=(isset($_SESSION["projekt"])) ? $_SESSION["projekt"] : "Aktuelles Projekt"  ?>
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