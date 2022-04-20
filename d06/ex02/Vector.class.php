<?PHP

require_once 'Vertex.class.php';

class Vector {
	private	$_x;
	private	$_y;
	private	$_z;
	private	$_w = 0.0;
	public static $verbose = False;

	public function __toString() {
		return sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )",
		$this->getX(), $this->getY(), $this->getZ(), $this->getW());
	}

	public function	__construct( array $values ) {
		if (isset($values['orig'])) {
			$orig = $values['orig'];
		} else {
			$orig = new Vertex( array( 'x' => 0, 'y' => 0, 'z' => 0 ) );
		}
		$this->_x = $values['dest']->getX() - $orig->getX();
		$this->_y = $values['dest']->getY() - $orig->getY();
		$this->_z = $values['dest']->getZ() - $orig->getZ();
		if (isset($values['w']))
			$this->_w = $values['w'];
		if (self::$verbose)
			echo $this." constructed".PHP_EOL;
		return ;
	}

	public function __destruct() {
		if (self::$verbose)
			echo $this." destructed".PHP_EOL;
		return ;
	}

	public function magnitude() {
		return sqrt(pow($this->getX(), 2) + pow($this->getY(), 2) + pow($this->getZ(), 2));
	}

	public function	normalize() {
		$mag = $this->magnitude();
		$dest = new Vertex (
			array( 'x' => $this->getX() / $mag,
			'y' => $this->getY() / $mag,
			'z' => $this->getZ() / $mag ) );
		return new Vector ( array( 'dest' => $dest ) );
	}

	public function	add( Vector $rhs ) {
		$dest = new Vertex ( array(
			'x' => $this->getX() + $rhs->getX(),
			'y' => $this->getY() + $rhs->getY(),
			'z' => $this->getZ() + $rhs->getZ() ) );
		return new Vector ( array( 'dest' => $dest ) );
	}

	public function	sub( Vector $rhs ) {
		$dest = new Vertex ( array(
			'x' => $this->getX() - $rhs->getX(),
			'y' => $this->getY() - $rhs->getY(),
			'z' => $this->getZ() - $rhs->getZ() ) );
		return new Vector ( array( 'dest' => $dest ) );
	}

	public function opposite() {
		$dest = new Vertex ( array(
			'x' => -$this->getX(),
			'y' => -$this->getY(),
			'z' => -$this->getZ() ) );
		return new Vector ( array( 'dest' => $dest ) );
	}

	public function	scalarProduct( $k ) {
		$dest = new Vertex ( array(
			'x' => $this->getX() * $k,
			'y' => $this->getY() * $k,
			'z' => $this->getZ() * $k ) );
		return new Vector ( array( 'dest' => $dest ) );
	}

	public function	dotProduct( Vector $rhs ) {
		return ($this->getX() * $rhs->getX()) + ($this->getY() * $rhs->getY()) + ($this->getZ() * $rhs->getZ());
	}

	public function cos( Vector $rhs ) {
		$dot_product = $this->dotProduct($rhs);
		$magnitudes = $this->magnitude() * $rhs->magnitude();
		return ($dot_product / $magnitudes);
	}

	public function crossProduct( Vector $rhs ) {
		$dest = new Vertex ( array(
			'x' => $this->getY() * $rhs->getZ() - $this->getZ() * $rhs->getY(),
			'y' => $this->getZ() * $rhs->getX() - $this->getX() * $rhs->getZ(),
			'z' => $this->getX() * $rhs->getY() - $this->getY() * $rhs->getX()
		) );
		return new Vector( array( 'dest' => $dest ) );
	}

	public static function	doc() {
		return file_get_contents('Vector.doc.txt');
	}

	public function getX() { return $this->_x; }
	public function getY() { return $this->_y; }
	public function getZ() { return $this->_z; }
	public function getW() { return $this->_w; }
}

?>
