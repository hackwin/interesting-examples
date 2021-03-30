<?php

// Run the code: https://ideone.com/KTtmoV

function test(){
	echo "Number of arguments: " . func_num_args() . PHP_EOL;
	echo "Arguments: ";
	echo var_dump(func_get_args());
}

test();
test("hello","world");

?>