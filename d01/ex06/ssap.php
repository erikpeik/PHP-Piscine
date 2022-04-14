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

$result = ssap($argv);
foreach ($result as $word)
	echo "$word\n";
?>
