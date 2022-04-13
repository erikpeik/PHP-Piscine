
<?PHP
function ft_split($str)
{
	$parts = explode(" ", $str);
	$parts = array_map('trim', $parts);
	$parts = array_filter($parts);
	sort($parts);
	return ($parts);
}

?>
