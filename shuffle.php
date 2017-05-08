<?php
$lines = file('./seat.txt');
shuffle($lines);


$a = fopen("./seat.txt", "w");
foreach ($lines as $line) {
  fputs($a,$line);
}
fclose($a);

include('./list.php');
?>
