<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $selection=$_POST["sele"];
    $_SESSION["sele"]=$selection;

    function redirect($libera,$selection){
        if($libera==2){
            switch ($selection) {
              case '1':
                    header('Location: projects.php');
                    break;
                case '2':
                    header('Location: social.php');
                break;
                case '3':
                    header('Location: index.php');
                brak;
            }
        }
    }

    function libera($libera,$selection){
        
        if(is_numeric($selection)){
            $libera=$libera+1;
        }
        if($selection<3||$selection>0){
            $libera=$libera+1;  
        }
        return $libera;
    }
   
?>