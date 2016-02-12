<?php

namespace Shapes;


class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shape
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{
		$total=0;
		$totalVolume=0;
		for($i=0;$i<count($shapes);$i++){
			$total = $shapes[$i]->area()+$total;
		}

		return $total;
		// return $shapes[0]->area().'-'.$shapes[1]->area().'-'.$shapes[2]->area().'-'.$shapes[3]->area().'-';
		// return $shapes[3]->area();
		
		// return $total+$shapes[2]->area();
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{

		$cube =0;
		$sphere =0;
		for($i=0;$i<count($shapes);$i++){
				// $total = $total + $shapes[$i];
			if($i == 2){
				//cube
				$cube = pow(sqrt($shapes[$i]->area()/6),3);
			}
			if($i == 3){
				//sphere
				$sphere = 4/3 * pi () * pow(sqrt($shapes[$i]->area()/pi())/2,3);
			}
		}
		$total= $cube + $sphere;
		return $sphere;
	}

}
