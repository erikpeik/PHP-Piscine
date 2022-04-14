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

?>
