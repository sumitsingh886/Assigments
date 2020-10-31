<?php
    $n = (isset($_POST['n'])?$_POST['n']:0);
    if($n==0)
    {
        die("Error: There must be a valid input.");
    }
    $c=$n;
    $count = 0;
    while ($n>0)
    {
        $n=floor($n/10);
        $count++;
    }
    echo "<h3>No of digits in $c is :$count</h3>"
?>