<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Sphere implements ShapeInterface {

	public $radius;

	/**
	 * Circle constructor.
	 *
	 * @param int $radius
	 */
	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area()
	{
		// return pi() * sqrt($this->radius);
		// return 6*($this->radius*$this->radius);
		// return 4*(pi()*pow($this->radius,2));
		return 4*(pi()*pow($this->radius,2));
	}

	/**
	 * Get the perimeter
	 * NOTE: For a circle/sphere this is also known as circumference
	 *
	 * @return int
	 */
	public function perimeter()
	{
		// return 12*$this->radius;
	}

}
