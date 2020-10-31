<?php
    $n = (isset($_POST['n'])?$_POST['n']:0);
    if($n==0)
    {
        die("Error: There must be a valid input.");
    }
    $sum=0;
    for ($i=1;$i<=$n;$i++)
    {
        $sum += $i;
    }
    print("<h3>sum of all natural numbers from 1 to $n is : $sum</h3>")
?>