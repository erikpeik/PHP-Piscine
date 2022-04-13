#!/usr/bin/php
<?PHP

function ssap($argv)
{
	$result = array();
	for ($i = 1; $argv[$i]; $i++)
	{
		$argv[$i] = trim($argv[$i]);
		$parts = preg_split("/\s+/", $argv[$i]);
		$result = array_merge($result, $parts);
	}
	sort($result);
	return ($result);
}

function	compare($a, $b)
{
	$A = strtolower($a);
	$B = strtolower($b);
	$heystack = "abcedfghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	$i = 0;
	while ($A[$i] || $B[$i])
	{
		if ($A[$i] == NULL)
			return (1);
		if ($B[$i] == NULL)
			return (-1);
		$pos1 = strpos($heystack, $A[$i]);
		$pos2 = strpos($heystack, $B[$i]);
		if ($pos1 < $pos2)
			return (-1);
		if ($pos1 > $pos2)
			return (1);
		$i++;
	}
	return (0);
}

function	main($argv)
{
	$words = ssap($argv);
 	usort($words, 'compare');
	foreach ($words as $word)
		echo "$word\n";
}

main($argv)

?>
