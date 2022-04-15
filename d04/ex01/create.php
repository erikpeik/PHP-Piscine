<?PHP

$path = "../private/passwd";
if ($_POST["submit"] != "OK" || !$_POST["passwd"] || !$_POST["passwd"])
{
	echo "ERROR\n";
	return ;
}
if (file_exists($path))
{
	$data = unserialize(file_get_contents($path));
	foreach($data as $index)
	{
		if ($index["login"] == $_POST["login"])
		{
			echo "ERROR\n";
			return ;
		}
	}
}
else
	mkdir("../private");
$data[] = array("login" => $_POST["login"], "passwd" => hash("whirlpool", $_POST["passwd"]));
file_put_contents($path, serialize($data));
echo "OK\n";

?>
