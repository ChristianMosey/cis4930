#!/usr/local/bin/php

<?php
$servername = "mysql.cise.ufl.edu";
$username = "christianmosey";
$password = "Buddy2020";
$changeID = $_POST["updateID"];
$rating = $_POST["rating"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$sName = $_POST["sName"];
$bev = isset($_POST["bev"]);
if ($bev == ""){
    $bev = 0;
}
$country = $_POST["country"];
$comments = $_POST["comments"];

if (isset($rating)){
    switch($rating){
        case "1star":
            $rating = 1;
            break;
        case "2star":
            $rating = 2;
            break;
        case "3star":
            $rating = 3;
            break;
        case "4star":
            $rating = 4;
            break;
        case "5star":
            $rating = 5;
            break;
    }

}
$conn = new mysqli($servername, $username, $password, "CMreviews");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



//echo "Connected successfully";
$sql = "UPDATE Reviews
SET First_name=?,Last_Name=?,Beverage=?,Country=?,Snack=?,Rating=?,Comments=?
WHERE id=?";
$res = $conn->prepare($sql);
$res->bind_param("ssissisi",$fName,$lName,$bev,$country,$sName,$rating,$comments,$changeID);
$res->execute();
$res->close();
header("Location: ./index.php");
exit();
