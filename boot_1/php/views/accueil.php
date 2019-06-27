<?php 
    
    require __DIR__ . '/../models/doctype.php'; 
    require __DIR__ . '/../models/header_nav.php';

?>

<main>
    <!-- 
        https://getbootstrap.com/docs/4.3/components/badge/ 
    -->
    <h1>Partie principale <span class="badge badge-warning">Main</span></h1>

    <!-- 
        Fil d'Ariane : 
        https://getbootstrap.com/docs/4.3/components/breadcrumb/ 
    -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>            
        </ol>
    </nav>
    <!-- Fin fil d'Ariane -->

    <section class="section_style">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia obcaecati tempora voluptatibus in eum consequuntur qui alias veniam illo, aliquid, veritatis culpa! Nihil consequatur deserunt neque tenetur sequi hic soluta nulla, quod eligendi adipisci. Velit non voluptates, nemo rem, quidem et hic eum, necessitatibus dolorem enim dolorum! Explicabo, voluptatibus debitis dolor harum ad ducimus minus accusantium incidunt exercitationem repellendus necessitatibus officiis? Perferendis eveniet magnam quae placeat dolor veritatis ullam cum neque fugiat id, velit modi quasi labore, perspiciatis doloremque totam facilis asperiores voluptatibus, ab vitae? Nobis non rerum deserunt temporibus quibusdam laboriosam! Esse quo sunt sapiente veniam quam quis. Sapiente!</p>
    </section>

    <section class="section_style">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt repudiandae ducimus aliquid repellendus modi a eum, omnis odit voluptas excepturi sequi, nobis maxime natus veniam dolore quod, quas sed ipsa alias similique quo. Labore cum, voluptatibus, et hic blanditiis commodi veniam dignissimos at, consequuntur suscipit possimus. Libero facilis perferendis ex.</p>
    </section>
</main>

    
<?php

    require __DIR__ . '/../models/footer.php'; 
    
?>