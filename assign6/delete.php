#!/usr/local/bin/php
<?php
$servername = "mysql.cise.ufl.edu";
$username = "christianmosey";
$password = "Buddy2020";
$deleteID = $_POST["deleteID"];
$conn = new mysqli($servername, $username, $password, "CMreviews");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$sql = "delete from Reviews where id=?";
$res = $conn->prepare($sql);
$res->bind_param("i",$deleteID);
$res->execute();
$res->close();
header("Location: ./index.php");
exit();