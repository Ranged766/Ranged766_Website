<?php
    include 'assets/php/function.inc';
    $libera=0;
    $libera=libera($libera,$selection);
    redirect($libera,$selection);
?>
<!doctype html>
<html lang="it">
    <?php include 'assets/headerfooter/meta.php';?>
    <body>
        <?php include 'assets/headerfooter/header1.php';?>
        <h1><p class="asciiart offtodx5">
    ____                                       __ _____   _____   _____
   / __ \  ____ _   ____    ____ _  ___   ____/ //__  /  / ___/  / ___/
  / /_/ / / __ `/  / __ \  / __ `/ / _ \ / __  /   / /  / __ \  / __ \ 
 / _, _/ / /_/ /  / / / / / /_/ / /  __// /_/ /   / /  / /_/ / / /_/ / 
/_/ |_|  \__,_/  /_/ /_/  \__, /  \___/ \__,_/   /_/   \____/  \____/  
                         /____/    
            </p><p class="asciiart website">
 __    __  ____ ____   __  __ ______  ____
 ||    || ||    || )) (( \ || | || | ||   
 \\ /\ // ||==  ||=)   \\  ||   ||   ||== 
  \V/\V/  ||___ ||_)) \_)) ||   ||   ||___  V0.4a
        </h1></p><p class="menu">
            R:\> menu.txt<br><br>
                1)  About_me.txt<br>   
                2)  My_projects.txt<br>
                3)  My_Social.txt<br>
                4)  School_and_old_stuff.txt<br><br>
                
                <form method="post" class="menu">
                    <label>R:\></label><label class="blink">_</label><input type="text" id="sele" name="sele" class="inputsele"><br>
                    <input type="submit" hidden />
                </form>
            </p>
            <?php
                $error=$_SESSION['error'];
                $selection=$_SESSION['sele'];
                if($selection>3||$selection<0){ 
                    echo '<label class="menu errore">'.$selection.' is not recognized as an operable value.</label>';
                }
            ?>
    </body>
</html>