<?php

require __DIR__ . '/connexBdd.php';

function insertDataBdd($pdo, $familyname, $firstname, $age, $email) {

    // Evite les injections SQL, pour le hack.
    $stmt = $pdo->prepare("INSERT INTO identity (familyname, firstname, age, email) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $familyname);
    $stmt->bindParam(2, $firstname);
    $stmt->bindParam(3, $age);
    $stmt->bindParam(4, $email); 
    $stmt->execute();
        
    /* OU, mais moins secure */

    // $insertQuery = "INSERT INTO identity (familyname, firstname, age, email)
    //                 VALUES ('$familyname', '$firstname', '$age', '$email')";

    // $pdo->exec($insertQuery);

}