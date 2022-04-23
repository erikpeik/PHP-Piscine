<?PHP

$file = 'list.csv';
if (isset($_GET['date_id']) && isset($_GET['input']) && file_exists($file)) {
	$data = $_GET['date_id'] . ";" . rawurlencode($_GET['input']) . PHP_EOL;
	file_put_contents($file, $data, FILE_APPEND);
}

?>
