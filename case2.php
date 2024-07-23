<?php
class test{
	public $property;
}

$obj = new test();
$obj -> property = "hallo, kantor";

//menggunakan operator nullsafe
$value = $obj?->property;

echo $value."<br><br>";

$obj = null;
$value =  $obj?->property;
echo $value;


?>
