<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 10/12/17
 * Time: 22:11
 */

use App\Calculadora;
use PHPUnit;

class CalculadoraTest extends PHPUnit\Framework\TestCase
{
    function testSuma(){
        $resultado = Calculadora::suma(3,5);
        $this->assertEquals(8,$resultado);
    }
}