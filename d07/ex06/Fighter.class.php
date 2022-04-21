<?PHP

class Fighter {
	public function __construct($type) {
		$this->type = $type;
	}

	public function	__toString() {
		return $this->type;
	}
}

?>
