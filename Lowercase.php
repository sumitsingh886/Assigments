<?php
echo "<h3>Check string in lowercase</h3>";
print "<form method=post action=Lowercase.php>";
print "<input type=text name='str' />";
print "<input type=submit value=check name='check' />"."<br><br>";
if(isset($_POST['check']))
{
    function lowarecase($string)
    {
        echo "$string" . "<br>";
        if (ctype_lower($string)) {
            echo "Yes";
        } else {
            echo "No";
        }
    }
    lowarecase($_POST['str']);
}