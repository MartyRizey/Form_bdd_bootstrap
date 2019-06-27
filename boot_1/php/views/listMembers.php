<?php
    require __DIR__ . '/../models/doctype.php';
    require __DIR__ . '/../models/header_nav.php';    
?>

<main>

    <br>
    <h1>Liste des adhérents :</h1>

    <!-- 
    Fil d'Ariane : 
    https://getbootstrap.com/docs/4.3/components/breadcrumb/ 
    -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="accueil.php">Accueil</a></li>
            <li class="breadcrumb-item"><a href="inscription.php">Inscription</a></li>
            <li class="breadcrumb-item"><a href="#">Adhérents</a></li>
        </ol>
    </nav>
    <!-- Fin fil d'Ariane -->

    <hr>

    

</main>

<?php

    require __DIR__ . '/../models/footer.php'; 

?>

   