<?php
$a = array("a","b","c");
$b = array("a");

foreach ($a as $value) {
if (in_array($value, $b)) {
echo "Data Sama <br>";
}else{
echo $value."<br>";
}
}