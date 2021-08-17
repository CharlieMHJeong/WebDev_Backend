<?php
require_once ("conn.php");

$sql_select = "SELECT * FROM products";
$dbProdRecords = mysqli_query($con, $sql_select)
or die("Problem Reading table: " . mysqli_error($con));

$intProductCount = mysqli_num_rows($dbProdRecords);
echo "<p>We currently have $intProductCount products</p>";

$sql_select = "SELECT * FROM products WHERE Name='Shot Glass'";
$dbProdRecords = mysqli_query($con, $sql_select)
or die("Problem Reading table: " . mysqli_error($con));

if ($intProductCount > 0)
    echo "<p> Yes we have a Shot glass</p>";
else
    echo "<p> Yes we have NO Shot glass</p>";


mysqli_close($con);
?>
