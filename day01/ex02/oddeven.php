#!/usr/bin/php
<?PHP


$f = fopen( 'php://stdin', 'r' );
while ($line = fgets( $f ) && !feof($f))
{
	echo "Enter a number: ";
	$f = rtrim(fgets(STDIN));
	if (feof($input))
		return;
	if (!is_numeric($input))
		print("'$input' is not a number\n");
	else if ($input % 2 == 0)
		print("The number $input is even\n");
	else
		print("The number $input is odd\n");
}

?>
