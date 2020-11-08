<?php
echo "<h3>Find factorial</h3>";
print "<form method=post action=Factorial.php>";
print "<input type=text name='str' />";
print "<input type=submit value=check name='factorial' />"."<br><br>";
if(isset($_POST['factorial']))
{
    function factorial($n)
    {
        $fact=1;
        for ($i=1;$i<=$n;$i++)
        {
            $fact = $fact*$i;
        }
        echo "Factorial of $n is :".$fact;
    }
    factorial($_POST['str']);
}