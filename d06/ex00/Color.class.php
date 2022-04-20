<?php

Class Color {
	public	$red;
	public	$green;
	public	$blue;
	public static $verbose = true;

	public function __toString() {
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}

	public function	__construct(array $color) {
		if (isset($color['rgb']))
		{
			$this->red = (int)$color['rgb'] >> 16 & 0xFF;
			$this->green = (int)$color['rgb'] >> 8 & 0xFF;
			$this->blue = (int)$color['rgb'] & 0xFF;
		}
		else if (isset($color['red']) && isset($color['green']) && isset($color['blue']) )
		{
			$this->red = $color['red'];
			$this->green = $color['green'];
			$this->blue = $color['blue'];
		}
		if (self::$verbose)
			echo $this." constructed.".PHP_EOL;
		return ;
	}

	function __destruct() {
		if (self::$verbose)
			echo $this." destructed.".PHP_EOL;
		return ;
	}
}

$teset = new Color(array('rgb' => 0x30b165));
?>
