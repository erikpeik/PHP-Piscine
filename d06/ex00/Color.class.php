<?php

Class Color {
	public	$red;
	public	$green;
	public	$blue;
	public static $verbose = false;

	public function __toString() {
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}

	public function	__construct(array $color) {
		if (isset($color['rgb'])) {
			$this->red = (int)$color['rgb'] >> 16 & 0xFF;
			$this->green = (int)$color['rgb'] >> 8 & 0xFF;
			$this->blue = (int)$color['rgb'] & 0xFF;
		}
		else {
			$this->red = $color['red'];
			$this->green = $color['green'];
			$this->blue = $color['blue'];
		}
		if (self::$verbose)
			echo $this." constructed.".PHP_EOL;
		return ;
	}

	public function __destruct() {
		if (self::$verbose)
			echo $this." destructed.".PHP_EOL;
		return ;
	}

	public function add($add) {
		$color = new Color(array('red' => $this->red + $add->red,
			'green' => $this->green + $add->green,
			'blue' => $this->blue + $add->blue));
		return $color;
	}

	public function sub($sub) {
		$color = new Color(array('red' => $this->red - $sub->red,
			'green' => $this->green - $sub->green,
			'blue' => $this->blue - $sub->blue));
		return $color;
	}

	public function mult($mult) {
		$color = new Color(array('red' => $this->red * $mult,
			'green' => $this->green * $mult,
			'blue' => $this->blue * $mult));
		return $color;
	}

	public static function	doc() {
		return file_get_contents('Color.doc.text');
	}
}

?>
