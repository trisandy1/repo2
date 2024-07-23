<?php
function foo(int|float $x){
	return $x;

}
echo foo(5); //output 5
echo "\n";
echo foo(5.5); //output 5.5
echo "\n";
?>
