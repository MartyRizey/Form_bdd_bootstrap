<?php

require __DIR__ . '/connexBdd.php';

// requête de selection en fonction du tri demandé
function selectOrderColumn($pdo, $order){

    $orderByColumn = "SELECT * FROM identity ORDER BY $order";
    $pdoStatement = $pdo->query($orderByColumn);

    if($pdoStatement === false){

        echo '<h1 style="color:red;"><strong>Un problème est survenu, merci de rééssayer.</strong></h1>';

    } else {

        $results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

    }

    return $results;
}
