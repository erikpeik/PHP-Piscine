#!/usr/bin/php
<?PHP

$counter = 0;
$result = array();
foreach ($argv as $arg)
{
	if ($counter != 0)
	{
		$parts = preg_split("/\s+/", $arg);
		foreach ($parts as $part)
			array_push($result, $part);
	}
	$counter++;
}
sort($result);
foreach ($result as $word)
	echo "$word\n";
?>
