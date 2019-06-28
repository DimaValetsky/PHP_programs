<?php

$words = array( 'red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato');
$colors = array( 'red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato');

for ($j=0; $j < 5; $j++) { 
	
	$copy_words = $words;
	$copy_colors = $colors;

	for ($i=0; $i < 5 ; $i++) { 
		
		$rand_word = $copy_words[array_rand($copy_words)];
		unset($copy_colors['$rand_word']);
		$rand_color = $copy_colors[array_rand($copy_colors)];

		echo "<span style='color:$rand_color'>$rand_word ";
		$copy_colors[] = $rand_word;
	}
	echo "<br/>";
}
?>