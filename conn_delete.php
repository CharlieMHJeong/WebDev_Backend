<?php
require_once ("conn.php");

$sql_delete = "DELETE FROM customers WHERE Id = '2'";
$dbCustRecords = mysqli_query($con, $sql_delete);

$sql_select = "SELECT * FROM customers";
$dbCustRecords = mysqli_query($con, $sql_select)
or die("Problem reading table: " . mysqli_error($con));

while ($arrCustRecords = mysqli_fetch_array($dbCustRecords)){
    echo "<p>" . $arrCustRecords["Id"] . " ";
    echo $arrCustRecords["Title"] . " ";
    echo $arrCustRecords["Surname"] . " ";
    echo $arrCustRecords["Firstname"] . "</p>";
}
mysqli_close($con);
?>
