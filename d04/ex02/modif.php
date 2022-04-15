<?PHP

function	login_in_array($data, $old_pass)
{
	for ($i = 0; $data[$i]; $i++)
	{
		if ($data[$i]["login"] == $_POST["login"])
		{
			if ($data[$i]["passwd"] == hash("whirlpool", $old_pass))
				return ($i);
		}
	}
	return (false);
}

$path = "../private/passwd";
if ($_POST["submit"] != "OK" || !$_POST["newpw"] || !$_POST["login"])
{
	echo "ERROR\n";
	return ;
}
if (($data = file_get_contents($path)) === false)
{
	echo "ERROR\n";
	return ;
}
$data = unserialize($data);
if ($data)
{
	$index = login_in_array($data, $_POST["oldpw"]);
	if ($index === false)
	{
		echo "ERROR\n";
		return ;
	}
}
else
{
	echo "ERROR\n";
	return ;
}
$data[$index]["passwd"] = hash("whirlpool", $_POST["newpw"]);
file_put_contents($path, serialize($data));
echo "OK\n";

?>
