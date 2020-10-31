<div style="border: 5px double;padding: 50px;padding-left: 600px">
<?php
$first_side=$_POST['fside'];
$second_side=$_POST['sside'];
$third_side=$_POST['tside'];
$s=' ';
$result=' ';

echo "The value of first side is : $first_side";
echo "<br>";
echo "The value of second side is : $second_side";
echo "<br>";
echo "The value of first side is : $third_side";
echo "<br>";
$s = ($first_side + $second_side + $third_side) / 2;
echo "The value of semi-perimeter is : <input type='text' value='$s'>";
echo "<br><br>";
$result = sqrt(abs($s*($s-$first_side)*($s-$second_side)*($s-$third_side)));
echo "The value of area of triangle is : <input type='text' value='$result'>";
?>
</div>
