<?PHP

function	ft_is_sort($tab)
{
	if (!$tab)
		return (true);
	$sorted = $tab;
	sort($sorted);
	if ($tab === $sorted)
		return (true);
	return (false);
}

?>
