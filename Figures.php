<?php

interface CreateColoredFigure{
	public function getFigure();
}
abstract class FigureDecorator implements CreateColoredFigure{
	protected $decoratedFigure;
	public function __construct(CreateColoredFigure $decoratedFigure){
		$this->decoratedFigure = $decoratedFigure;
	}
	public function getFigure(){
		$this->decoratedFigure->getFigure();
	}
}

class RedDecorator extends FigureDecorator{
	public function __construct(CreateColoredFigure $decoratedFigure){
		parent::__construct($decoratedFigure);
	}
	private function red(){
		echo  ' colored red' .PHP_EOL;
	}
	public function getFigure(){
		$this->decoratedFigure->getFigure();
		$this->red();
	}
}
class GreenDecorator extends FigureDecorator{
	public function __construct(CreateColoredFigure $decoratedFigure){
		parent::__construct($decoratedFigure);
	}
	private function green(){
		echo  ' colored green' .PHP_EOL;
	}
	public function getFigure(){
		$this->decoratedFigure->getFigure();
		$this->green();
	}
}
class Square implements CreateColoredFigure {

	public function getFigure(){
		echo 'this is square';
	}
}
class Circle implements CreateColoredFigure{
	public function getFigure(){
		echo 'this is circle';
	}
}

$redSquare = new RedDecorator(new Square);
echo $redSquare->getFigure();

$redCircle = new RedDecorator(new Circle);
echo $redCircle->getFigure();

$greenSquare = new GreenDecorator(new Square);
echo $greenSquare->getFigure();

$greenCircle = new GreenDecorator(new Circle);
echo $greenCircle->getFigure();
