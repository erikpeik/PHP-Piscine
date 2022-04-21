<?PHP

class NightsWatch {
	private $array = [];

	public function recruit($person) {
		$this->array[] = $person;
	}

	public function fight() {
		foreach ($this->array as $person) {
			if (method_exists($person,'fight'))
				$person->fight();
		}
	}
}

?>
