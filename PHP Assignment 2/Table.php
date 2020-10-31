<?php
    $n = (isset($_POST['n'])?$_POST['n']:0);
    if($n==0)
    {
        die("Error: There must be a valid input.");
    }
    echo "<b>Table of $n</b><br><br>";
    for ($i=1;$i<=10;$i++)
    {
        echo $n." * ".$i." = ".$n*$i;
        echo "<br>";
    }
?>