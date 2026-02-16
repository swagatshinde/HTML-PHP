<?php
session_start();
if (isset($_POST['submit'])) {
$p_name = $_POST['p_name'];
$qty = $_POST['qty'];
$rate = $_POST['rate'];
$_SESSION["p_name"] = $p_name;
$_SESSION["qty"] = $qty;
$_SESSION["rate"] = $rate;
header('Location: customer3.php');
}
?>

<form method="post">
<label for="basic">Product Name:</label>
<input type="text" id="p_name" name="p_name" required><br><br>
<label for="Product Quantity">Enter Qyantity:</label>
<input type="qty" id="qty" name="qty" required><br><br>
<label for="Rate">Rate :</label>
<input type="number" id="rate" name="rate" required><br><br>
<input type="submit" name="submit" value="submit">
</form>
