<?php
$filepath = '.\seat.txt';
$filename = '席順.txt';

header('Content-Type: application/octet-stream');
header('Content-Disposition:filename="'.$filename.'"');
readfile($filepath);
exit;

include('./list.php');
?>
