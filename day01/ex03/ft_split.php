#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$parts = preg_split("/\s+/", $str);
	sort($parts);
	return ($parts);
}

?>
