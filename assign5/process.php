#!/usr/local/bin/php
<html>
<body>

Welcome <?php echo $_POST["fName"]; ?> <?php echo $_POST["lName"];?><br>

<?php
$score = 100;
$q1 = $_POST["capital"];
echo "<hr> Question 1: ";
if ((isset($q1) && $q1!="tallahassee")){
    $score = $score - 33;
    echo "Incorrect <br> Tallahassee is the capital of Florida.";
    $q1 = "Incorrect";
}
else{
    echo "Correct!";
    $q1 = "Correct";
}
echo "<hr> Question 2: ";
echo "<br> UF: ";
if (!isset($_POST["uf"])) {
    $score = $score - 6.6;
    echo "Incorrect. The University of Florida is located in Gainesville, Florida.";
    $q2a = "Incorrect";
}
else{
    $q2a = "Correct";
    echo "Correct!";
}
echo "<br> FSU: ";
if (!isset($_POST["fsu"])) {
    $score = $score - 6.6;
    echo "Incorrect. Florida State University is located in Tallahassee, Florida.";
    $q2b = "Incorrect";
}
else{
    $q2b = "Correct";
    echo "Correct!";
}
echo "<br> LSU: ";
if (isset($_POST["lsu"])) {
    $score = $score - 6.6;
    echo "Incorrect. Louisiana State University is located in Baton Rouge, Louisiana.";
    $q2c = "Incorrect";
}
else{
    $q2c = "Correct";
    echo "Correct!";
}
echo "<br> Yale: ";
if (isset($_POST["yale"])) {
    $score = $score - 6.6;
    echo "Incorrect. Yale is located in New Haven, Connecticut.";
    $q2d = "Incorrect";
}
else{
    echo "Correct!";
    $q2d = "Correct";
}
echo "<br> UCF: ";
if (!isset($_POST["ucf"])) {
    $score = $score - 6.6;
    echo "Incorrect. The University of Central Florida is located in Orlando, Florida.";
    $q2e = "Incorrect";
}
else{
    $q2e = "Correct";
    echo "Correct!";
}
$year = $_POST["year"];
echo "<hr> Question 3: ";
if ($year != 1845){
    $score = $score - 33;
    echo "Incorrect.<br> Florida joined the  union in 1845,";
    $q3 = "Incorrect";
}
else{
    echo "Correct!";
    $q3 = "Correct";
}
echo "<hr>You scored a $score%.";

$file = fopen("data.csv","a");
$row = [$_POST["fName"],$_POST["lName"],$q1,$q2a,$q2b,$q2c,$q2d,$q2e,$q3,$score];
fputcsv($file, $row);
?>
<a href="../index.html" class="btn btn-link" role="button" aria-pressed="true">Home</a>
<a href="./index.php" class="btn btn-link" role="button" aria-pressed="true">Back</a>
<a href="./admin.php" class="btn btn-link" role="button" aria-pressed="true">Admin</a>


</body>
</html>
