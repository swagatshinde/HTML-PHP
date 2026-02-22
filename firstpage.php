<?php
Session_start();
$_SESSION["username"]="iamswagat";
$_SESSION["userid"]="1";
?>
<html>
<body>
<?php
echo"session variable is set .";
?>
<a href="secondpage.php">Go to second page</a>
</body>
</html>
