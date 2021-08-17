<?php
require_once ("conn.php");

// Surname 'Jones' stored in $dbCustRecords
$strSurname = "Smith";
$sql_select_cust = "SELECT * FROM customers WHERE Surname='$strSurname'";
$dbCustRecords = mysqli_query($con, $sql_select_cust)
    or die("Problem reading table: " . mysqli_error($con));

//Fetches each of these customer records and displays the customer details
//Cusomter ID stored $intId  ==> 8 Jones has no records
//Cusomter ID stored $intId  ==> 8 Jones has no records

while ($arrCustRecords = mysqli_fetch_array($dbCustRecords)){
    $intId = $arrCustRecords["Id"];
    echo "<p>Customer: ";
    echo $arrCustRecords["Title"] . " ";
    echo $arrCustRecords["Surname"] . " ";
    echo $arrCustRecords["Firstname"] . "</p>";

// Within the while loop, another query selects all purchases which match the customer Id
$sql_select_pur = "SELECT * FROM purchases WHERE customers_Id='$intId'";
$dbPurRecords = mysqli_query($con, $sql_select_pur)
or die("Problem reading purchases table: " . mysqli_error($con));

//This loop fetches these purchases and displays when they were purchased.
// Purchase ID is stored in $intPurId
    while ($arrPurRecords = mysqli_fetch_array($dbPurRecords)){
        $intPurId = $arrPurRecords["Id"];
        echo "<p>Purchased On: ";
        echo $arrPurRecords["Day"] . "/";
        echo $arrPurRecords["Month"] . "/";
        echo $arrPurRecords["Year"] . "</p>";

        // Another query selects all purchaseproducts which match the purchase Id
        $sql_select_purpro = "SELECT * FROM purchaseProducts WHERE purchases_Id = '$intPurId'";
        $dbProRecords = mysqli_query($con, $sql_select_purpro)
        or die("Problem reading purchaseProducts table: " . mysqli_error($con));
        //This loop fetches these purchase products and displays them.
        // Also stores products_Id field in $intProductId
        while ($arrProRecords = mysqli_fetch_array($dbProRecords)){
            $intProductId = $arrProRecords["products_Id"];
            echo "<p>" . $arrProRecords["Quantity"] . " ";
            $sql_prd = "SELECT * FROM products WHERE Id = '$intProductId'";
            $dbProductRecords = mysqli_query($con, $sql_prd)
            or die("Problem reading products Table: " . mysqli_error($con));
            $arrProductRecord = mysqli_fetch_array($dbProductRecords);
            echo $arrProductRecord["Name"] . " " . $arrProductRecord["Description"] . "at &#36;";
            echo $arrProRecords["Cost"] . " each.</p>";

        }
        echo "<p>========================================================</p>";
    }
}
mysqli_close($con);
?>
