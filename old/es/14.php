<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $parola=array("p","i","a","n","e","t","a");
      $parolac="pianeta";
    ?>
    <form>
      <input name="q" type="text" value="">
      <input type="submit" value="Invia">
    </form>
    <?php
      $c=0;
      if(isset($_GET["q"])){
        $te=htmlspecialchars($_GET["q"]);
    //    print_r ($_GET["q"]);

        //if()
        $l=strlen($te);
        //echo $l;
        if($l==1){
          for($i=0;$i<7;$i++){
            if($te==$parola[$i]){
              $c++;
              echo"<br>";
              echo "posto:".$i;

            }
          }
          echo"<br>";
          echo"NOPE";

          if($c>0){
            echo"<br>";
            echo"wow hai trovato la lettera:    ".$te;
            echo"<br>";

            echo"quantita:    ".$c;
          }
      //  echo "$te";
    }else{
          if($te==$parolac){
            echo"<br>";
            echo"si";
            echo"<br>";
          }else{
            echo"<br>";
            echo"puoi sempre riprovare";
            echo"<br>";
          }
      }
      }
    ?>



    <?php
//      include "footer.php"
    ?>
  </body>
</html>
