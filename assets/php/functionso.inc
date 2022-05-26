<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $selection=$_POST["sele"];
    $_SESSION["sele"]=$selection;

    function redirect($libera,$selection){
        if($libera==2){
            switch ($selection) {
              case '1':
                    header('Location: https://github.com/Ranged766');
                    break;
                case '2':
                    header('Location: https://instagram.com/');
                break;
                case '3':
                    header('Location: https://steamcommunity.com/id/Ranged766');
                brak;
                case '4':
                    header('Location: https://twitter.com/ranged766');
                brak;
                case '5':
                    header('Location: https://www.twitch.tv/ranged766');
                brak;
                case '6':
                    header('Location: index.php');
                brak;
            }
        }
    }

    function libera($libera,$selection){
        
        if(is_numeric($selection)){
            $libera=$libera+1;
        }
        if($selection<6||$selection>0){
            $libera=$libera+1;  
        }
        return $libera;
    }
   
?>