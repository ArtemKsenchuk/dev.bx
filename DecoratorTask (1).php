<?php
interface PrinterColoredFigure
{
    public function printColoredFigure();
}
abstract class FigureDecorator implements PrinterColoredFigure
{
    protected $decoratedFigure;
    public function __construct(PrinterColoredFigure $decoratedFigure)
    {
        $this ->decoratedFigure = $decoratedFigure;
    }
    public function printColoredFigure()
    {
        $this ->decoratedFigure->printColoredFigure();
    }
}

public class Square implements PrinterColoredFigure
{
	public function printColoredFigure(): void
	{
		echo "Shape Square ";
	}
}

public class Circle implements PrinterColoredFigure
{
	public function printColoredFigure(): void
	{
		echo "Shape Circle ";
	}
}

class ColorDecorator extends FigureDecorator
{
	protected $decoratedFigure;

	public function __construct(PrinterColoredFigure $decoratedFigure)
	{
		parent::__construct($decoratedFigure);
	}

	private function Red()
	{
		echo 'colored Red';
	}

	private function Green()
	{
		echo 'colored Green';
	}

	public function printColoredFigure()
	{
		$this->decoratedFigure->printColoredFigure();
		$this->Red();
		$this->Green();
	}
}


/*class PrintFigureUser
{
	protected $figure;
	public function someMethod(): void
	{
		$this->figure->printColoredFigure();
	}
}
$decoratedFigure = new FigureDecorator();

*/

/*
	Необходимо воспользоваться шаблоном проектирования "Декоратор" для того, чтобы иметь возможность
	"получать" в итоге фигуры разных цветов, например вызов декоратора:
	$redShape->draw();
	должен вывести:
	"Red colored Shape Square" либо "Red colored Shape Circle"
	в зависимости от того, какую фигуру мы оборачиваем декоратором.
 */

