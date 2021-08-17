<?php
require_once ("conn.php");

$sql_select = "SELECT * FROM products";
$dbProdRecords = mysqli_query($con, $sql_select)
or die("Problem Reading table: " . mysqli_error($con));

$intProductCount = mysqli_num_rows($dbProdRecords);
echo "<p>We currently have $intProductCount products</p>";

mysqli_close($con);
?>
