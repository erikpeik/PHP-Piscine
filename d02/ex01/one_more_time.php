#!/usr/bin/php
<?PHP

function	panic($str, $int)
{
	echo $str;
	exit ($int);
}

function	check_month($month)
{
	$month = lcfirst($month);
	$months = array("janvier", "février", "mars", "avril", "mai", "juin",
		"juillet", "août", "septembre", "octobre", "novembre", "décembre");
	$value = array_search($month, $months);
	if ($value === false)
		return (null);
	return ($value + 1);
}

function	check_day_of_the_week($day)
{
	$day = lcfirst($day);
	$doft = array("lundi", "mardi", "mercredi",
		"jeudi", "vendredi", "samedi", "dimanche");
	$value = array_search($day, $doft);
	if ($value === false)
		return (false);
	return ($value + 1);
}

function	one_more_time($argc, $argv)
{
	if ($argc == 2)
	{
		date_default_timezone_set("Europe/Paris");
		$splits = preg_split("/ /", $argv[1]);
		if (count($splits) != 5)
			panic("Wrong Format\n", 1);
		$month = check_month($splits[2]);
		if ($month === null || check_day_of_the_week($splits[0]) === false)
			panic("Wrong Format\n", 2);
		if (!preg_match('/^\d{4}$/', $splits[3]))
			panic("Wrong Format\n", 3);
		if (!preg_match("/^([01]\d|2\d):[0-5]\d:[0-5]\d$/", $splits[4]))
			panic("Wrong Format\n", 4);
		if (checkdate($month, $splits[1], $splits[3]) === false)
			panic("Wrong Format\n", 5);
		$timestamp = $month."/".$splits[1]."/".$splits[3]." ".$splits[4];
		if (date('w', strtotime($timestamp)) != check_day_of_the_week($splits[0]))
			panic("Wrong Format\n", 6);
		echo strtotime($timestamp), "\n";
	}
}

one_more_time($argc, $argv);

?>
