<?php
require_once ("conn.php");
//$sql = "SELECT Surname FROM customers";
//$sql = "SELECT * FROM customers  WHERE Title='Mr' and Surname='Smith'";
$sql = "INSERT INTO products VALUES (null, 'Stein', '800 ml Beef Mug', '40', '8.99')";
$res = mysqli_query($con, $sql);
$sql_select = "SELECT * FROM products";
$res = mysqli_query($con, $sql_select);

while ($arrProdRecords = mysqli_fetch_array($res)){
    echo "<p>" . $arrProdRecords["Id"] . " ";
    echo $arrProdRecords["Name"] . " ";
    echo $arrProdRecords["Description"] . " ";
    echo $arrProdRecords["Quantity"] . " ";
    echo $arrProdRecords["Cost"] . " ";
}

mysqli_free_result($res);
mysqli_close($con);
?>
