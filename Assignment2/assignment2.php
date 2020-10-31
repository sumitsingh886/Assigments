<html lang="eng">
<head>
    <title></title>
</head>
<body style="background-color: black;padding: 3 0px">
<div style="color: white;border: 6px double green;padding: 50px;font-size: x-large;font-family: Cambria">
<?php
$side=25;
$areaofsquare = pow($side,2);
echo "Area of square with  side $side is : ", $areaofsquare;
echo "<br>";
$radius=35;
$areaofcircle = pi()*pow($radius,2);
echo "Area of circle with  radius $radius is : ", round($areaofcircle,2);
echo "<br>";
$length=128;
$breath=136;
$areaofrectangle = $length*$breath;
echo "Area of rectangle with length $length and breath $breath is : ", $areaofrectangle;
?>
</div>
</body>
</html>