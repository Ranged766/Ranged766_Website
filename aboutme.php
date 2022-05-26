<?php
    include 'assets/php/functionam.inc';
    $libera=0;
    $libera=libera($libera,$selection);
    redirect($libera,$selection);
?>
<!doctype html>
<html lang="it">
    <?php include 'assets/headerfooter/meta.php';?>
    <body>
        <?php include 'assets/headerfooter/header1.php';?><br>
        <p class="menu">
            R:\> About_me.txt<br><br>
            <img src="assets/img/profilepic.jpg" class="left">
            <br><br>
            User: Ranged766<br>
            Age: 19<br>
            Job: Coder<br>
            Hobbies: Coding, Gaming, Modding, "Hacking", Air-Soft<br>
            Description: pending<label class="loader"><span class="loader__dot">.</span><span class="loader__dot">.</span><span class="loader__dot">.</span></label>
            <br><br><br><br>
                1)  My_projects.txt<br>
                2)  My_Social.txt<br>
                3)  Main_menu.txt<br><br>
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