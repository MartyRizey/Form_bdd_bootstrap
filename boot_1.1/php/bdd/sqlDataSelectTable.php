<?php 

require __DIR__ . '/connexBdd.php'; 
    
function selectDataTable($pdo) {    

    $selectTable = "SELECT * FROM identity";
    $pdoStmt = $pdo->prepare($selectTable);
    $pdoStmt->execute();

    if($pdoStmt === false) {

        echo '<h1 style="color:red;"><strong>Un problème est survenu, merci de rééssayer.</strong></h1>';

    } else {
        
        $results = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);

        // print_r($results); die();

    }

    return $results;
}

   


    
