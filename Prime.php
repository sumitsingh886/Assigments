<?php
echo "<h3>Check prime or not</h3>";
print "<form method=post action=Prime.php>";
print "<input type=text name='str' />";
print "<input type=submit value=check name='prime' />"."<br><br>";
if(isset($_POST['prime']))
{
    function prime($input)
    {
        for ($i = 2; $i <= $input - 1; $i++) {
            if ($input % $i == 0) {
                $value = True;
            }
        }
        if (isset($value) && $value) {
            echo 'The Number ' . $input . ' is not prime';
        } else {
            echo 'The Number ' . $input . ' is prime';
        }
    }
    prime($_POST['str']);
}