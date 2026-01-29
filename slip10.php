<?php

$a=$_POST['a'];
$b=$_POST['b'];
$ch=$_POST['ch'];

 echo "First Number=$a.<br>";
 echo "Second Number=$b";

 switch($ch)
 {
  case 1:function mod($a,$b)
        {
          $c=$a%$b;
          echo "MOD OF TWO NUMBERS : $c<br>";
          break;
       }

 case 2:function power($a,$b)
	{
	  $d=$a**$b;
          echo "POWER OF $a by $b IS : $d<br>";
          break;
        }

case 3:function sum($a)
       {
         $sum=0;
         for($i=0;$i<=$a;$i++)
         {
           $sum=$sum+$i;
         }
        echo "SUM OF NUMBERS TILL $a is : $sum<br>";
        break;
      }
      
case 4:function factorial($b)
       {
         $fact=1;
         for($i=1;$i<=$b;$i++)
         {
           $fact=$fact*$i;
         }
        echo "FACTORIAL OF $b is : $fact<br>";
        break;
      }

default: echo "Invalid Choice";
}

mod($a,$b);
power($a,$b);
sum($a);
factorial($b);

?>
