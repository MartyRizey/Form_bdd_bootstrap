
<header>
    <!-- <h1>header</h1> -->
    <!-- 
        https://getbootstrap.com/docs/4.3/components/navs/ 
    -->
    <nav class="navbar navbar-dark bg-dark">
        <ul class="nav nav-tabs justify-content-start">
            <li class="nav-item"><a class="nav-link active" href="<?= ACCUEIL_PATH ?>">Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= INSCRIPTION_PATH ?>">Inscription</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= ADHERENT_PATH ?>">Adhérents</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
        <!-- 
            Champ de recherche : 
            https://getbootstrap.com/docs/4.3/components/navbar/ 
        -->
        <form class="form-inline">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </nav> 
</header>