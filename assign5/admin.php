#!/usr/local/bin/php
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
    <link rel="stylesheet" href="../index.css">

</head>
<body>

<h3>Quiz Statistics</h3>
All Tests:
<?php
echo "<table>\n\n";
echo "<tr>
    <th>First Name:</th>
    <th>Last Name:</th>
    <th>Question 1:</th>
    <th>Question 2a:</th>
    <th>Question 2b:</th>
    <th>Question 2c:</th>
    <th>Question 2d:</th>
    <th>Question 2e:</th>
    <th>Question 3:</th>
    <th>Score</th>
  </tr>";
$f = fopen("data.csv", "r");
while (($line = fgetcsv($f)) !== false) {
    echo "<tr>";
    foreach ($line as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>\n";
}
fclose($f);
echo "\n</table>";
echo "<hr>Item Difficulty";
$q1diff = 0;
$q2adiff = 0;
$q2bdiff = 0;
$q2cdiff = 0;
$q2ddiff = 0;
$q2ediff = 0;
$q3diff = 0;
$avgScore = 0;
$numLines = 0;
$minScore = 100;
$maxScore = 0;
$f = fopen("data.csv", "r");
while (($line = fgetcsv($f)) !== false) {
   if ($line[2] == "Correct"){
       $q1diff += 100;
   }
   if ($line[3] == "Correct"){
        $q2adiff += 100;
   }
   if ($line[4] == "Correct"){
        $q2bdiff += 100;
   }
   if ($line[5] == "Correct"){
        $q2cdiff += 100;
   }
    if ($line[6] == "Correct"){
        $q2ddiff += 100;
    }
    if ($line[7] == "Correct"){
        $q2ediff += 100;
    }
    if ($line[8] == "Correct"){
        $q3diff += 100;
    }
    if ($maxScore < $line[9]){
        $maxScore = $line[9];
    }
    if ($minScore > $line[9]){
        $minScore = $line[9];
    }
    $avgScore += $line[9];
   $numLines++;
}

$q1diff = $q1diff/$numLines;
$q2adiff = $q2adiff/$numLines;
$q2bdiff = $q2bdiff/$numLines;
$q2cdiff = $q2cdiff/$numLines;
$q2ddiff = $q2ddiff/$numLines;
$q2ediff = $q2ediff/$numLines;
$q3diff = $q3diff/$numLines;
$avgScore = $avgScore/$numLines;
echo "<table>\n\n";
echo "<tr>
    <th>Question 1:</th>
    <th>Question 2a:</th>
    <th>Question 2b:</th>
    <th>Question 2c:</th>
    <th>Question 2d:</th>
    <th>Question 2e:</th>
    <th>Question 3:</th>
    <th>Average Score:</th>
    <th>Minimum Score:</th>
    <th>Maximum Score:</th>
    </tr>";
echo "<tr>
    <td>$q1diff%</td>
    <td>$q2adiff%</td>
    <td>$q2bdiff%</td>
    <td>$q2cdiff%</td>
    <td>$q2ddiff%</td>
    <td>$q2ediff%</td>
    <td>$q3diff%</td>
    <td>$avgScore%</td>
    <td>$minScore%</td>
    <td>$maxScore%</td>
    </tr>";
fclose($f);
echo "\n</table>";
?>

</body>
</html>
