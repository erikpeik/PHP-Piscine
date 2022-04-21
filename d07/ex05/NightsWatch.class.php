<?PHP

class NightsWatch {
	private $_array = array();

	public function recruit($person) {
		$this->_array[] = $person;
	}

	public function fight() {
		foreach ($this->_array as $person) {
			if ($person instanceof IFighter
				&& method_exists($person,'fight'))
				$person->fight();
		}
	}
}

?>
