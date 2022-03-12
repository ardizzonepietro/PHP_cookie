<?php

echo "<html>
<form method=post action=index.php>
ciao dimmi un valore:<input type=text name=num>
<input type=submit value=invia!> 
</form>
</html>";
if(!empty($_POST['num'])){
    //prendo il valore
    $n = $_POST['num'];
    $name= "numero"; //esenziale
    if(!empty($_COOKIE['numero'])){
    $value= $n."-".$_COOKIE['numero']; //esenziale
    }else{
    $value= $n;
    }
    $expire=8600;
    $path="/";
    $domain="";
    $secure="";
    $httpOnly= true;
    setcookie($name,$value, time()+$expire,$path, $domain, $secure,$httpOnly);
    
    $cok = $_COOKIE['numero'];
    $array = explode("-", $cok);
    echo "totale: ".count($array);
    $somma=0;
    for ($i=0; $i <count($array) ; $i++) { 
    $somma = $somma + $array[$i];
    }
    for ($i=0; $i < count($array); $i++) { 
       echo "numero: ".$array[$i]."</br>";
    }
    echo "somma: ".$somma;
    echo "media: ".($somma)/count($array);
    }

?>