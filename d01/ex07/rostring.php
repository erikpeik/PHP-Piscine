#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$argv[1] = trim($argv[1]);
	$splits = preg_split("/\s+/", $argv[1]);
	$splits = array_filter($splits);
	array_push($splits, $splits[0]);
	array_shift($splits);
	$i = 1;
	foreach ($splits as $word)
	{
		echo $word;
		if ($i < count($splits))
			echo " ";
		$i++;
	}
	echo "\n";
}

?>
