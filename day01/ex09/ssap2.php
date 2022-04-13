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

function add_alphabetic($arr)
{
	$result = array();
	foreach ($arr as $part)
	{
		$a = ord($part);
		if (ctype_alpha($a))
			array_push($result, $part);
	}
	natcasesort($result);
	return ($result);
}

function	add_numeric($arr)
{
	$result = array();
	foreach ($arr as $part)
	{
		if (is_numeric($part))
			array_push($result, $part);
	}
	asort($result, SORT_STRING);
	return ($result);
}

function	add_others($arr)
{
	$result = array();
	foreach ($arr as $part)
	{
		$a = ord($part);
		if (!is_numeric($part) && !ctype_alpha($a))
			array_push($result, $part);
	}
	natcasesort($result);
	return ($result);
}

function	main($argv)
{
	$result = array();
	$words = ssap($argv);
	$result = array_merge($result, add_alphabetic($words));
	$result = array_merge($result, add_numeric($words));
	$result = array_merge($result, add_others($words));
	foreach ($result as $word)
		echo "$word\n";
}

main($argv)

?>
