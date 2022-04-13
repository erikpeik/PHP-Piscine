#!/usr/bin/php
<?PHP

$input = fopen('php://stdin', 'r');
echo "Enter a number: ";
while ($line = fgets($input))
{
	$line = trim($line);
	if (!is_numeric($line))
		print("'$line' is not a number\n");
	else if ($line % 2 == 0)
		print("The number $line is even\n");
	else
		print("The number $line is odd\n");
	echo "Enter a number: ";
}
echo "\n";
fclose($input);

?>
