<?php
namespace App\Util;

class WelcomeMessage {
    public function welcome($name, $gender): string
    {
        if($gender === "Homme") {
            return 'Bienvenue M. ' . $name;
        } else {
            return 'Bienvenue Mme ' . $name;
        }
    }
}