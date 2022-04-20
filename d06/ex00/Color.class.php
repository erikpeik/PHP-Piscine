<?php

Class Color {
	public	$red;
	public	$green;
	public	$blue;
	public static $verbose = False;

	public function __toString() {
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}

	public function	__construct( array $color ) {
		if (isset($color['rgb'])) {
			$this->red = intval($color['rgb']) >> 16 & 0xFF;
			$this->green = intval($color['rgb']) >> 8 & 0xFF;
			$this->blue = intval($color['rgb']) & 0xFF;
		}
		else {
			$this->red = intval($color['red']);
			$this->green = intval($color['green']);
			$this->blue = intval($color['blue']);
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

	public function add( Color $rhs ) {
		$color = new Color(array('red' => $this->red + $rhs->red,
			'green' => $this->green + $rhs->green,
			'blue' => $this->blue + $rhs->blue));
		return $color;
	}

	public function sub( Color $rhs ) {
		$color = new Color(array('red' => $this->red - $rhs->red,
			'green' => $this->green - $rhs->green,
			'blue' => $this->blue - $rhs->blue));
		return $color;
	}

	public function mult( $f ) {
		$color = new Color(array('red' => $this->red * $f,
			'green' => $this->green * $f,
			'blue' => $this->blue * $f));
		return $color;
	}

	public static function	doc() {
		return file_get_contents('Color.doc.text');
	}
}

?>
