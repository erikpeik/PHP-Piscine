<?PHP

if (isset($_GET['date_id'])) {
	$get_file = file_get_contents('list.csv');
	$result = preg_replace('/'.$_GET['date_id'].';.*'.PHP_EOL.'/', '', $get_file);
	file_put_contents('list.csv', $result);
}

?>
