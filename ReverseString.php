<?php
echo "<h3>Revere a string</h3>";
print "<form method=post action=ReverseString.php>";
print "<input type=text name='str' />";
print "<input type=submit value=reverse name='reverse' />"."<br><br>";
if(isset($_POST['reverse']))
{
    function reverse($string)
    {
        echo "$string"."<br>";
        $reverse = strrev($string);
        echo $reverse;
    }
    reverse($_POST['str']);
}