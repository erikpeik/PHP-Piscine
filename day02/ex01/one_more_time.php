#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$str = trim($str);
	$parts = preg_split("/\s+/", $str);
	$parts = array_map('trim', $parts);
	$parts = array_filter($parts);
	sort($parts);
	return ($parts);
}

function	one_more_time($argc, $argv)
{
	if ($argc > 1)
	{
		$splits = ft_split($argv[1]);
		if (count($splits) != 5)
		{
			echo "Wrong Format\n";
			exit (-1);
		}
		print_r($splits);
	}
}

one_more_time($argc, $argv);

?>
