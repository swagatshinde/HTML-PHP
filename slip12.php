<?php

$a=$_POST['a'];
$b=$_POST['b'];
$op=$_POST['operation'];

if($op==1)
{
    $c=$a+$b;
    echo" $c";
}

else if($op==2)
{
    $d=$a-$b;
    echo" $d";
}
else if($op==3)
{
    $e=$a*$b;
    echo" $e";
}

else if($op==4)
{
    $f=$a/$b;
    echo" $f";
}

?>