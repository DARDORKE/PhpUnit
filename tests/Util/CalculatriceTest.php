<?php

namespace App\Tests\Util;

use App\Util\Calculatrice;
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{

    /**
     * @dataProvider carreProvider
     */
    public function testCarre($value, $expect)
    {
        $calculatrice = new Calculatrice();
        $this->assertSame($expect, $calculatrice->carre($value));
    }

    public function carreProvider(): array
    {
        return [
            [2 , 4],
            [4, 16],
            [5, 25],
        ];
    }
}