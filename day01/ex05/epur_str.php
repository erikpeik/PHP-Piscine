#!/usr/bin/php
<?PHP

function epur_str($argv)
{
	if (count($argv) == 2)
	{
		$result = trim(preg_replace('/\s+/', ' ', $argv[1]));
		echo "$result\n";
	}
}

epur_str($argv);

?>
