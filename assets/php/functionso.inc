<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $selection=$_POST["sele"];
    $_SESSION["sele"]=$selection;

    function redirect($libera,$selection){
        if($libera==2){
            switch ($selection) {
              case '1':
                    header('Location: https://github.com/');
                    break;
                case '2':
                    header('Location: https://instagram.com/');
                break;
                case '3':
                    header('Location: https://steam.com/');
                brak;
                case '4':
                    header('Location: https://twitter.com/');
                brak;
                case '5':
                    header('Location: https://twitch.tv/');
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