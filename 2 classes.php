<?php
/**
 * 
 */
class First
{
	
	function getClassname()
	{
		echo get_class($this); 
	}
	function getLetter()
	{
		echo "A";
	}
}

/**
 * 
 */
class Second extends First
{
	function getLetter()
	{
		echo "B";
	}

}
$a = new First();
$a -> getClassname();
echo "<br/>";
$b = new Second();
$b -> getClassname();
echo "<br/>";
$a -> getLetter();
echo "<br/>";
$b -> getLetter();
?>