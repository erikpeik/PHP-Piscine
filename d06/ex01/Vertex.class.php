<?PHP

class Vertex {
	private	$_x;
	private	$_y;
	private	$_z;
	private	$_w = 1.0;
	private $_color;
	public static $verbose = false;

	public function	__construct(array $info) {
		$this->_x = $info['x'];
		$this->_y = $info['y'];
		$this->_z = $info['z'];
		if (isset($info['color'])) {
			$this->_color = $info['color'];
		} else {
			$this->_color = new Color(array('rgb' => 0xffffff));
		}

	}
}

?>
