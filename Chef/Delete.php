<?php
include_once 'connection.php';
$sql = "DELETE FROM chef WHERE Chef_ID='" . $_GET["Chef_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'disp.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>