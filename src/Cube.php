<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Cube implements ShapeInterface {

	public $sides;

	/**
	 * Circle constructor.
	 *
	 * @param int $sides
	 */
	public function __construct($sides)
	{
		$this->sides = $sides;
	}

	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area()
	{
		// return pi() * sqrt($this->sides);
		// return 6*($this->sides*$this->sides);
		return 6*(pow($this->sides,2));
	}

	/**
	 * Get the perimeter
	 * NOTE: For a circle/sphere this is also known as circumference
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return 12*$this->sides;
	}

}
