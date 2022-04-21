<?PHP

Class Tyrion extends Lannister {
	public function	sleepWith($person) {
		if ($person instanceof Sansa)
			echo "Let's do this.".PHP_EOL;
		else
			parent::sleepWith($person);
	}
}

?>
