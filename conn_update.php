<?php
require_once ("conn.php");

$sql_update = "UPDATE products SET Description='253 ml Tall Glass' WHERE Id='6'";
$dbCustRecords = mysqli_query($con, $sql_update)
or die("Problem updating table: " . mysqli_error($con));

$sql_update = "UPDATE products SET Name='Beer and Lager Glass' WHERE Name='Beer Glass'";
$dbCustRecords = mysqli_query($con, $sql_update)
or die("Problem updating table: " . mysqli_error($con));

$sql_select = "SELECT * FROM products";
$dbProdRecords = mysqli_query($con, $sql_select)
or die("Problem Reading table: " . mysqli_error($con));


while ($arrProdRecords = mysqli_fetch_array($dbProdRecords)){
    echo "<p>" . $arrProdRecords["Id"] . " ";
    echo $arrProdRecords["Name"] . " ";
    echo $arrProdRecords["Description"] . " ";
    echo $arrProdRecords["Quantity"] . " ";
    echo $arrProdRecords["Cost"] . " ";
}

mysqli_free_result($dbProdRecords);
mysqli_close($con);
?>
