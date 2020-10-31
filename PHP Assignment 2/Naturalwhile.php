<?php
    $n = (isset($_POST['n'])?$_POST['n']:0);
    if($n==0)
    {
        die("Error: There must be a valid input.");
    }
    $i=1;
    echo "<br>For n= $n</b><br>";
    while ($i!=$n+1)
    {
        echo "$i<br>";
        $i++;
    }
?>