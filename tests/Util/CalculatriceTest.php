<?php

namespace App\Tests\Util;

use App\Util\Calculatrice;
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{

    public function testCarre()
    {
        $carre = new Calculatrice();
        $this->assertEquals(16, $carre->carre(4));
        $this->assertEquals(4, $carre->carre(2));
        $this->assertEquals(9, $carre->carre(3));
    }
}