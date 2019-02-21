<?php
/* Сделайте класс Rectangle (прямоугольник).
В классе Rectangle сделайте метод getSquare, который будет возвращать площадь любого прямоугольника.
В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр любого прямоугольника. */

class Rectangle
	{
		private $width;
		private $height;
		
		public function getSquare($width, $height){
		
			return $this->width = $width * $this->height = $height;
		}
		
		public function getPerimeter($width, $height){
			
			return 2 * ($this->width = $width + $this->height = $height);			
		}
	}
	
	$rectangle = new Rectangle;
    
	echo $rectangle->getSquare(40, 21);
	echo '<br>';
	echo $rectangle->getPerimeter(40, 21);