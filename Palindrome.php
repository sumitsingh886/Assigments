<?php
echo "<h3>Check a string is palindrome</h3>";
print "<form method=post action=Palindrome.php>";
print "<input type=text name='str' />";
print "<input type=submit value=check name='palindrome' />"."<br><br>";
if(isset($_POST['palindrome']))
{
    function palindrome($string)
    {
        echo "$string"."<br>";
        if ($string == strrev($string)) {
            echo "Yes";
        } else {
            echo "No";
        }
    }
    palindrome($_POST['str']);
}