<?PHP

require_once 'Color.class.php';

class Vertex {
	private	$_x;
	private	$_y;
	private	$_z;
	private	$_w = 1.0;
	private $_color;
	public static $verbose = false;

	public function __toString() {
		$str = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f", $this->_x, $this->_y, $this->_z, $this->_w);
		if (self::$verbose) {
			$str .= sprintf(", %s", $this->_color);
		}
		$str .= sprintf(" )");
		return $str;
	}

	public function	__construct(array $info) {
		$this->_x = $info['x'];
		$this->_y = $info['y'];
		$this->_z = $info['z'];
		if (isset($info['w'])) {
			$this->_w = $info['w'];
		}
		if (isset($info['color'])) {
			$this->_color = $info['color'];
		} else {
			$this->_color = new Color(array('rgb' => 0xffffff));
		}
		if (self::$verbose)
		echo $this." constructed".PHP_EOL;
		return ;
	}

	public function __destruct() {
		if (self::$verbose)
			echo $this." destructed".PHP_EOL;
		return ;
	}

	public static function	doc() {
		return file_get_contents('Vertex.doc.txt');
	}

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }
	public function getColor() { return $this->_color; }

	public function setX($value) { $this->_x = $value; }
	public function setY($value) { $this->_y = $value; }
	public function setZ($value) { $this->_z = $value; }
	public function setW($value) { $this->_w = $value; }
	public function setColor($value) { $this->_color = $value; }
}

?>
