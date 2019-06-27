<?php

require __DIR__ . '/../bdd/sqlDataSelectTable.php';
require __DIR__ .'/../bdd/sqlSelectOrderColumn.php';

// permet de selectionner une requête en fonction du paramètre 'order' passé en GET dans l'URL.

if(empty($_GET['order'])) {
    
    $results = selectDataTable($pdo);

    // print_r($results); die(); 

} else {

    /* 
        on assigne à '$order', la valeur passé en GET dans l'url de la clé 'order' soit
        - familyname ou firstname ou age ou email.
    */
    $order = $_GET['order'];

    $results = selectOrderColumn($pdo, $order);
}
