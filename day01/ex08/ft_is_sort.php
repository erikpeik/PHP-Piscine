<?PHP

function	ft_is_sort($tab)
{
	if (!$tab)
		return (true);
	$sorted = array_replace([], $tab);
	sort($sorted);
	if ($tab === $sorted)
		return (true);
	return (false);
}

?>
