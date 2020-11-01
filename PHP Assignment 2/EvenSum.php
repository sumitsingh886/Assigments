<?php
    $n = (isset($_POST['n'])?$_POST['n']:0);
    if($n==0)
    {
        die("Error: There must be a valid input.");
    }
    $sum=0;
    for ($i=2;$i<=$n;$i+=2)
    {
        $sum += $i;
    }
    print("<h3>sum of all even numbers from 1 to $n is : $sum</h3>")
?>