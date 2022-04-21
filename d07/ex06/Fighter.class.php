<?PHP

class Fighter {
	public $type;

	abstract function fight($target);
	public function __construct($type) {
		$this->type = $type;
	}

	public function	__toString() {
		return $this->type;
	}
}

?>
