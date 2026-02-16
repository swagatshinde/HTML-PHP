<?php
session_start();
?>
<html>
<?php
echo "Employee name : ".$_SESSION["name"] . "<br>";
echo "Employee address : ".$_SESSION["address"]. "<br>";
echo "Employee Mobile number : " . $_SESSION["number"]. "<br>";


echo "Product name : ".$_SESSION["p_name"] . "<br>";
echo "Quantity : ".$_SESSION["qty"]. "<br>";
echo "Rate : " . $_SESSION["rate"]. "<br>";

?>
</html>
