<?PHP

Class Color {
	public	$red;
	public	$green;
	public	$blue;
	public static $verbose = false;

	public function	__consturct() {
		echo "Constructor called".PHP_EOL;
		return ;
	}

	public function __toString() {
		return sprintf()
	}
	function get_rgb() {
		return ("rpg(".$this->$red.
		", ".$this->$green.")".PHP_EOL);
	}
	function __destruct() {
		echo "Constructor called".PHP_EOL;
		return ;
	}
}


$split = new Color("404040");
?>
