<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
	public function testAdd(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2, 2));
	}
	public function testSub(): void
	{
		$calculator = new Calculator();
		self::assertEquals(1, $calculator->subtract(3, 2));
	}
	public function testMult(): void
	{
		$calculator = new Calculator();
		self::assertEquals(12, $calculator->multiply(3, 4));
	}
	public function testDiv(): void
	{
		$calculator = new Calculator();
		self::assertEquals(3, $calculator->divide(12, 4));
	}
	public function testDivOnZero(): void
	{
		$calculator = new Calculator();
		$this->expectException(InvalidArgumentException::class);
		$this->expectExceptionMessage('Divider cant be a zero');
		$calculator->divide(12, 0);
	}
	public function testExp(): void
	{
		$calculator = new Calculator();
		self::assertEquals(16, $calculator->exp(2, 4));
	}
	public function testSqrt(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->extract_sqrt(16));
	}
}
