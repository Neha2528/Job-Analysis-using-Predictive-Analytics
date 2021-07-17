<?php

error_reporting(0);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "job_analyser";

// $sql=("SELECT * FROM op");
 
//Database connection
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

$result = mysqli_query($conn,"SELECT op.result, op.tech_result, op.coding_result, op.comm_result FROM op  ORDER BY sr_no DESC
LIMIT 1 ") or die('Invalid query: ' .mysqli_error($conn));

//print values to screen
while ($row = mysqli_fetch_assoc($result)) {
    $a =$row['result'];
    $b =$row['tech_result'];
    $c =$row['coding_result'];
    $d =$row['comm_result'];
    function addNumbers(int $a, int $b, int $c, int $d) {
        return $a + $b + $c + $d;
      }
      echo addNumbers($a,$b,$c,$d);
  
} 

// Free the resources associated with the result set
// This is done automatically at the end of the script
mysqli_free_result($result);

?>