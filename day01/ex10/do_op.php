#!/usr/bin/php
<?PHP

	function	do_op($argc, $argv)
	{
		if ($argc != 4)
		{
			echo "Incorrect Parameters\n";
			return;
		}
		$argv = array_map('trim', $argv);
		if ($argv[2] == "+")
			echo $argv[1] + $argv[3]."\n";
		if ($argv[2] == "-")
			echo $argv[1] - $argv[3]."\n";
		if ($argv[2] == "*")
			echo $argv[1] * $argv[3]."\n";
		if ($argv[2] == "/")
			echo $argv[1] / $argv[3]."\n";
		if ($argv[2] == "%")
			echo $argv[1] % $argv[3]."\n";
	}

	do_op($argc, $argv);

?>
