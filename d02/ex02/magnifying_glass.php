#!/usr/bin/php
<?PHP

function	magnifying_glass($argc, $argv)
{
	if ($argc == 2)
	{
		$file =file_get_contents($argv[1]);
		$patterns = array();
		
		print($file);
	}
}

magnifying_glass($argc, $argv);

?>
