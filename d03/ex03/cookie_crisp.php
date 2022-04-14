<?PHP

if ($_GET["action"])
{
	$name = $_GET["name"];
	if ($_GET["action"] == "set")
		setcookie($_GET["name"], $_GET["value"], time() + 3600, '/');
	if ($_GET["action"] == "del" && $_GET["name"])
		setcookie($_GET["name"], null, -1, '/');
	if ($_GET["action"] == "get" && $_GET["name"] && $_COOKIE[$name])
		echo $_COOKIE[$_GET["name"]]."\n";
}

?>
