<?php include("util.php"); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TEST</title>

<style>

</style>
</head>

<body>


<?php


// supose a car park into a space. Now we will write a log to record this event.
$plate_no = "ABC123";
$garage_no = "G01";
$space_no = "S001";

$log  = "Car into a space:".PHP_EOL.
	"Plate_no = $plate_no, garage_no = $garage_no, space_no = $space_no".PHP_EOL;
//Save string to log, use FILE_APPEND to append.
writeAppLog($log);

?>
:)
</body>
</html>