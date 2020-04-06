<?php

use PHPUnit\Framework\TestCase;
use App\Model\Soma;

final class SomaTest extends TestCase
{
    public function test_sum_two_numbers()
    {

        $soma = new Soma();
        $result = $soma->run(10, 10);

        $this->assertEquals(20, $result);
    }
}
