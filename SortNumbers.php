<?php
$line = readline("Numbers: ");

$numbers = preg_split("/\s+/", $line);
#print_r($numbers);
$sorted = array();
foreach ($numbers as $element) {
	if (is_numeric($element)){
		$sorted[] = $element;
	}
}
sort($sorted);
print_r($sorted);
?>