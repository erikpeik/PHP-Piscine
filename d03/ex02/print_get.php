<?PHP

$param = $_SERVER['QUERY_STRING'];

for ($i = 0; $param[$i]; $i++)
{
	if ($param[$i] =='&')
		echo "\n";
	else if ($param[$i] == "=")
		echo ": ";
	else
		echo $param[$i];
}
echo "\n";

?>
