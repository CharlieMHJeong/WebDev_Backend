<?php
require_once ("conn.php");
$sql = "SELECT Title, Surname FROM customers";
$res = mysqli_query($con, $sql);

if ($res) {
    while ($row = mysqli_fetch_array($res)){
        echo $row['Title'] . " " . $row['Surname']. "</br>";
    }
} else {
    echo ("Could not retrieve records: ". mysqli_error($res));
}
mysqli_free_result($res);
mysqli_close($con);
?>

