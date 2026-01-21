<!DOCTYPE html>
<html>
<body>
<?php

$a=$_POST['a'];
$b=$_POST['b'];


$len1=strlen($a);
$len2=strlen($b);

$cmp=strncasecmp($a,$b,$len2);

echo "<h2> 1 </h2>";

if($cmp==0)
{
    echo "Small string appears at the start of large string....<br>";
}
else
{
    echo "Small String does not appears at the start of large string...<br>";
}


echo "<br> <h2> 2 </h2><br>";
$pos=strpos($a,$b);

if($pos>0)
{
echo "<br> Small string appers at the $pos position of large String..!<br>";
}
else
{
echo "<br>Small String does not appear in large String<br>";
}
echo "<br> <h2> 3 </h2>";

$ccmp=strncasecmp($a,$b,6);

if($ccmp==0)
{
    echo "<br>Large String and Small String are same till 6th position<br>";
}
else
{
    echo "<br>Large String and Small String are not same till 6th position<br>";
}

?>
</body>
</html>
