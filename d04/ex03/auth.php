<?PHP

function auth($login, $passwd)
{
	if (($data = file_get_contents("../private/passwd")) === false)
		return (false);
	$data = unserialize($data);
	for ($i = 0; $data[$i]; $i++)
	{
		if ($data[$i]["login"] == $login)
		{
			if ($data[$i]["passwd"] == hash("whirlpool", $passwd))
				return (true);
		}
	}
	return (false);
}

?>
