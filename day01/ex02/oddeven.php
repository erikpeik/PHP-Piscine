#!/usr/bin/php
<?PHP

while (true)
{
	echo "Enter a number: ";
	$input = rtrim(fgets(STDIN));
	if ($input == EOT)
		return;
	if (!is_numeric($input))
		print("'$input' is not a number\n");
	else if ($input % 2 == 0)
		print("The number $input is even\n");
	else
		print("The number $input is odd\n");
}

?>
