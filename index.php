<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $selection=$_POST["sele"];
    $_SESSION["sele"]=$selection;

    $libera=0;
    if(is_numeric($selection)){
        $libera=$libera+1;
    }
    if($selection<3||$selection>0){
        $libera=$libera+1;  
    }

    if($libera==2){
        switch ($selection) {
          case '1':
              //header('Location: me.php');
                break;
            case '2':
            break;
            case '3':
                header('Location: old/index.html');
            break;
        }
    }
?>
<!doctype html>

<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ranged766</title>
    <meta name="description" content="hello, I'm Ranged766! I'm a streamer,code,gamer etc... no-one would bother to read the page description so... grab a cookie from the cookie jar. There's no jar? OOF that's right i hate java ;)">
    <meta name="keywords" content="Ranged, Ranged766, 766, Coder, Streamer, Gamer, Minecraft, Paladins">
    <meta name="author" content="Ranged766">
    <meta name="software" content="Visual Studio Code">

    <meta property="og:title" content="Ranged766">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Hi! This little place is my website, that i've built with love <3...">
    <meta property="og:image" content="">

    <link rel="icon" href="assets/img/favicon.ico">
    <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">

    <link rel="stylesheet" href="assets/css/style.css?v=1.0">

</head>

    <body>
        <div class="anim">
        </div>
        <script src="js/scripts.js"></script>
        <div class="center, ttext">
        <pre class="unreserved">
        Ranged766 Website [Version 0.4a]
        (c) 2022 Burnt Roses. All rights un-reserved.
        </pre>
            <h1>
                <pre class="offtodx5">
    ____                                       __ _____   _____   _____
   / __ \  ____ _   ____    ____ _  ___   ____/ //__  /  / ___/  / ___/
  / /_/ / / __ `/  / __ \  / __ `/ / _ \ / __  /   / /  / __ \  / __ \ 
 / _, _/ / /_/ /  / / / / / /_/ / /  __// /_/ /   / /  / /_/ / / /_/ / 
/_/ |_|  \__,_/  /_/ /_/  \__, /  \___/ \__,_/   /_/   \____/  \____/  
                         /____/    
<pre class="website">                     
                         __    __  ____ ____   __  __ ______  ____
                         ||    || ||    || )) (( \ || | || | ||   
                         \\ /\ // ||==  ||=)   \\  ||   ||   ||== 
                          \V/\V/  ||___ ||_)) \_)) ||   ||   ||___  V0.4a</pre>
                </pre>

            </h1>
            <p class="menu">
            R:\> menu.txt<br><br>
                1)  About_me.txt<br>   
                2)  My_projects.txt<br>
                3)  School_and_old_stuff.txt<br>
                <br>
                <form method="post" class="menu">
                <label>R:\></label>
                <label class="blink">_</label>
                    <input type="text" id="sele" name="sele" class="inputsele"><br>
                    <input type="submit" hidden />
                </form>
            </p>
            <?php
                $error=$_SESSION['error'];
                $selection=$_SESSION['sele'];
                    if($selection>3||$selection<0){ 
                        echo '<label class="menu errore">'.$selection.' is not recognized as an operable value.</label>';
                        //session_destroy();
                    }
            ?>
            
        </div> 
    </body>
</html>

