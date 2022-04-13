#!/usr/bin/php
<?PHP

function another_world($argc, $argv)
{
	if ($argc > 1)
	{
		$result = trim(preg_replace('/\s+/', ' ', $argv[1]));
		echo "$result\n";
	}
}

another_world($argc, $argv);

?>
