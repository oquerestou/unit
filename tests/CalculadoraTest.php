<?php

namespace OQueRestouTest;

use OQueRestou\Calculadora;

include  __DIR__ . '/../application/Calculadora.php';

class CalculadoraTest extends \PHPUnit_Framework_TestCase
{
	public function testSoma()
	{
		$calculadora = new Calculadora();
		$resultado   = $calculadora->soma(1, 2);			
		$this->assertSame(3, $resultado);
	}							
}
