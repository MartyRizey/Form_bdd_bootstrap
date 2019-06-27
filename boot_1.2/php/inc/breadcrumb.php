<?php

    // source : https://openclassrooms.com/forum/sujet/generateur-automatique-de-fil-d-ariane-59766

    // traitement fil d'ariane
    function get_fil_ariane($array_fil) {

        // Constante 
        define('NOM_SITE', 'Fil d\'ariane', true);

        $fil = '<a href="#">' . NOM_SITE . '</a>';

        // on parcours le tableau associatif passé en argument. Les clés sont les URL 
        // et les valeurs des clés les liens.
        foreach($array_fil as $url => $lien) {
            $fil .= ' <p style="color:gray;"> .\. </p> ';
            if($url == 'final') {
                $fil .= $lien;
                break;
            }
            
            $fil .= '<a href="' . $url . ' "> ' . $lien . '</a>';
           
        }

        // echo $fil;
        return $fil;
    }

    