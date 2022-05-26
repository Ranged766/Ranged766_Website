<?php
    include 'assets/php/functionso.inc';
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
            R:\> My_Social.txt<br><br>
            <img src="assets/img/github.png" class="img">
            <br>1) Github.com<br><br><br>
            <img src="assets/img/instagram.png" class="img">
            <br>2) Instagram.com<br><br><br>
            <img src="assets/img/steam.png" class="img">
            <br>3) Steam.com<br><br><br>
            <img src="assets/img/twitter.png" class="img">
            <br>4) Twitter.com<br><br><br>
            <img src="assets/img/Twitch.png" class="img">
            <br>5) Twitch.tv<br><br><br>
            <br>6) Main_Menu.txt<br><br><br>
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