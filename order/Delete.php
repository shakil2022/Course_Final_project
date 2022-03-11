<?php
include_once 'connection.php';
$sql = "DELETE FROM cake_order WHERE Order_No='" . $_GET["Order_No"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'disp.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>