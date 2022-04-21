<?PHP

class UnholyFactory {
	private $_soldiers = array();

	public function	absorb($soldier) {
		if (get_parent_class($soldier) != 'Fighter') {
			echo "(Factory can't absorb this, it's not a fighter)".PHP_EOL;
		} else if (in_array($soldier, $this->_soldiers) === true) {
			echo "(Factory already absorbed a fighter of type ".$soldier.")".PHP_EOL;
		} else {
			$this->_soldiers[] = $soldier;
			echo "(Factory absorbed a fighter of type ".$soldier.")".PHP_EOL;
		}
	}

	public function fabricate($rf) {
		foreach ($this->_soldiers as $soldier) {
			if ($soldier == $rf) {
				echo "(Factory fabricates a fighter of type ".$rf.")".PHP_EOL;
				return $soldier;
			}
		}
		echo "(Factory hasn't absorbed any fighter of type ".$rf.")".PHP_EOL;
		return null;
	}
}

?>
