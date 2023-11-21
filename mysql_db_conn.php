<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_crud";

$conn = mysqli_connect($servername, $username, $dbname, $password);

if (!conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection success";
}

?>