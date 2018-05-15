<?php
    function person($age, $genre){
        if ($genre=='Femme' && $age<18){
            echo 'Vous êtes une femme et vous êtes mineure';
        }
        elseif ($genre=='Femme' && $age>=18){
            echo 'Vous êtes une femme et vous êtes majeure';
        }
        elseif ($genre=='Homme' && $age<18){
            echo 'Vous êtes un homme et vous êtes mineur';
        }
        elseif ($genre=='Homme' && $age>=18){
            echo 'Vous êtes un homme et vous êtes majeur';
        }
    }
    person(20,'Femme')
?>