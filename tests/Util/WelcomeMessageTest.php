<?php

namespace App\Tests\Util;

use App\Util\WelcomeMessage;
use PHPUnit\Framework\TestCase;

class WelcomeMessageTest extends TestCase {
    /**
     * @dataProvider welcomeProvider
     */
    public function testWelcome($name, $gender, $expected) {
        $welcomeMessage = new WelcomeMessage();
        $this->assertSame($expected, $welcomeMessage->welcome($name, $gender));
    }

    public function welcomeProvider(): array
    {
        return [
            ["Chris", "Homme", "Bienvenue M. Chris"],
            ["Fanny", "Femme", "Bienvenue Mme Fanny"]
        ];
    }
}