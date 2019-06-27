<?php

    // permet d'attribuer la valeur saisie dans le champ 'family name' à la variable '$familyname',
    // pour être réutilisé dans l'attribut 'value' de l'input 'familyname' du formulaire,
    // afin de re-remplir le champ concerné avec la valeur saisie.

    // https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/forms.md
    
    $familyname = '';

    if(!empty($_POST['familyname'])){

        $familyname = $_POST['familyname'];

    }