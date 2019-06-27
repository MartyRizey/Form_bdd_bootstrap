<?php 
    
    require __DIR__ . '/../models/doctype.php'; 
    require __DIR__ . '/../models/header_nav.php';
    require __DIR__ . '/../inc/breadcrumb.php';
?>

<main>
    <!-- 
        https://getbootstrap.com/docs/4.3/components/badge/ 
    -->
    <h1>Partie principale <span class="badge badge-warning">Main</span></h1>

    <?php 

        // fil d'ariane :
        // // source : https://openclassrooms.com/forum/sujet/generateur-automatique-de-fil-d-ariane-59766
        // on passe un tableau associatif en argument de l'appel à la fonction.
        // Celui-ci sera récupéré par la fonction dans le fichier 'breadcrump.php' du dossier 'inc'.
        $fil = get_fil_ariane(array('../index.php' => 'Accueil'));
        
        // Permet d'afficher le fil d'ariane
        require __DIR__ . '/../models/breadcrumb_tpl.php';                 

    ?>

    <section class="section_style img_pyramide">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati tempora voluptatibus in eum consequuntur qui alias veniam illo, aliquid, veritatis culpa! Nihil consequatur deserunt neque tenetur sequi hic soluta nulla, quod eligendi adipisci. Velit non voluptates, nemo rem, quidem et hic eum, necessitatibus dolorem enim dolorum! Explicabo, voluptatibus debitis dolor harum ad ducimus minus accusantium incidunt exercitationem repellendus necessitatibus officiis? Perferendis eveniet magnam quae placeat dolor veritatis ullam cum neque fugiat id, velit modi quasi labore, perspiciatis doloremque totam facilis asperiores voluptatibus, ab vitae? Nobis non rerum deserunt temporibus quibusdam laboriosam! Esse quo sunt sapiente veniam quam quis. Sapiente!</p>
        <img src="https://s1.qwant.com/thumbr/0x0/2/d/059502d3b7ef9466d41b0f4741448bc348d124742111b3a0396193b78d9ad4/hqdefault.jpg?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FQJpNOj3Ps3c%2Fhqdefault.jpg&q=0&b=1&p=0&a=1" alt="">
    </section>

    <section class="section_style">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt repudiandae ducimus aliquid repellendus modi a eum, omnis odit voluptas excepturi sequi, nobis maxime natus veniam dolore quod, quas sed ipsa alias similique quo. Labore cum, voluptatibus, et hic blanditiis commodi veniam dignissimos at, consequuntur suscipit possimus. Libero facilis perferendis ex.</p>
    </section>
</main>

    
<?php

    require __DIR__ . '/../models/footer.php'; 
    
?>