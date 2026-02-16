<?php
session_start();
if(isset($_POST['submit'])){
$number=$_POST['number'];
$name=$_POST['name'];
$address=$_POST['address'];
$_SESSION["number"]=$number;
$_SESSION["name"]=$name;
$_SESSION["address"]=$address;
header('Location: customer2.php');
exit;
}
?>
<form method="post">
<label for="name">Customer Name :</label>
<input type="text" id="name" name="name" required><br><br>
<label for="address">Customer Address:</label>
<input type="text" id="address" name="address" required><br><br>
<label for="mob_no">Customer Mobile number :</label>
<input type="number" id="number" name="number" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
