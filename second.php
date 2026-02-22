<?php
if(isset($_POST['submit']))
{
$fontstyle=$_POST['fontstyle'];
$fontsize=$_POST['fontsize'];
$fontcolor=$_POST['fontcolor'];
$bgcolor=$_POST['bgcolor'];

Setcookie('fontstyle',$fontstyle,time()+86400);
Setcookie('fontsize',$fontsize,time()+86400);
Setcookie('fontcolor',$fontcolor,time()+86400);
Setcookie('bgcolor',$bgcolor,time()+86400);

Header('Location:thirdpage.php');
Exit();
}
?>

