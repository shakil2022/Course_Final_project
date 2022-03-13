<?php
include_once 'connection.php';
$sql = "DELETE FROM message WHERE Order_No='" . $_GET["Order_No"] . "'";

if (mysqli_query($conn, $sql)) {
    include 'disp.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>