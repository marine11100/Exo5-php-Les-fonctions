<?php
    function numbers($nombre1,$nombre2){
        if ($nombre1>$nombre2){
            echo 'Le premier nombre ( '.$nombre1.' ) est plus grand que '.$nombre2.'';
        }
        elseif ($nombre1<$nombre2){
            echo 'Le premier nombre ( '.$nombre1.' ) est plus petit que '.$nombre2.'';
        }
        else{
            echo 'Les deux nombre sont identiques';
        }
    }
    numbers(2,4)
?>