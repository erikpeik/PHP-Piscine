<?PHP

$file = 'list.csv';
if (file_exists($file)) {
	$elements = array();
	$lines = preg_split('/\s+/', file_get_contents($file), -1, PREG_SPLIT_NO_EMPTY);
	foreach ($lines as $line) {
		$parts = explode(';', $line);
		if (isset($parts[0]) && isset($parts[1]))
			$elements[$parts[0]] = $parts[1];
	}
	echo json_encode($elements);
}

?>
