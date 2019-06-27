<?php
    require __DIR__ . '/../bdd/sqlInsertDatasToBdd.php'; 
    
    // https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/forms.md
    
    // $familyname = '';

    if(isset($_POST['familyname']) && empty($_POST['familyname'])) {

        header('Location: ../views/inscription.php');

    } elseif(!empty($_POST)){

        // permet d'attribuer la valeur saisie dans le champ 'familyname' à la variable '$familyname',
        // pour être réutilisé dans l'attribut 'value' de l'input 'familyname' du formulaire,
        // afin de re-remplir le champ concerné avec la valeur saisie.
        $familyname = htmlspecialchars($_POST['familyname']);

        $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : '';
        $age = !empty($_POST['age']) ? htmlspecialchars($_POST['age']) : 0;             
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ; 

        // requete d'insertion sql
        insertDataBdd($pdo, $familyname, $firstname, $age, $email);        

        require __DIR__ .'/../views/listMembers.php';

    }

    