<?php
print "<form method=post action=SortArray.php>";
    for ($index=0;$index<5;$index++)
    {
    print "<input type=text name=txt$index size='10'/>";
    }
    print "<input type=submit value=submit />";
    print "</form>";
$arr=array();
if(isset($_POST['txt0']))
{
for ($index=0;$index<5;$index++)
{
$arr[$index]=$_POST['txt'.$index];
}
    print "<pre>";
    print_r($arr);
    print "</pre>";
    sort($arr);
    print "<pre>";
    print_r($arr);
    print "</pre>";
}
