<?php

namespace OQueRestouTest;

use OQueRestou\Calculadora;

include  __DIR__ . '/../application/Calculadora.php';

class CalculadoraTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider providerSoma
	 */
	public function testSoma($a, $b, $c)
	{
		$calculadora = new Calculadora();
		$resultado   = $calculadora->soma($a, $b);
		$this->assertSame($c, $resultado);
	}

	public function providerSoma()
	{
		return array(
			array(1,2,3),
			array(4,5,9),
			array(2,2,4),
			array(6,9,15)
		);
	}
}
