<html lang="eng">
<head>
    <title>Calculate electricity bills</title>
</head>
<body><br>
<div style="text-align: center;font-size: x-large;border: 8px double;padding-bottom: 40px;font-style: ">
<?php
$unit=1000;
echo "<h1>Calculate the electricity bill for $unit units</h1><br>";
if($unit>0 && $unit<=100)
{
    $amt=$unit*3.30;
    $totalamt=$amt+(0.1*$amt);
}
elseif ($unit>100 && $unit<=200)
{
    $amt=(100*3.30)+(($unit-100)*4);
    $totalamt=$amt+(0.1*$amt);
}
elseif ($unit>200 && $unit<=300)
{
    $amt=(100*3.30)+(100*4)+(($unit-200)*5.25);
    $totalamt=$amt+(0.1*$amt);
}
else
{
    $amt=(100*3.30)+(100*4)+(100*5.25)+(($unit-300)*6.25);
    $totalamt=$amt+(0.1*$amt);
}
echo "<b>Amount of electricity bills pay:- $amt</b>";
echo "<br><b>Totalamount of electricity bills pay with 10% charge:- $totalamt</b>";
?>
</div>
</body>
</html>