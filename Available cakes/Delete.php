<?php
include_once 'connection.php';
$sql = "DELETE FROM  available_cakes WHERE Cake_Type='" . $_GET["Cake_Type"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'disp.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>