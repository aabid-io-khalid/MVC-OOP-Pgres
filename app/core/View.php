<?php

namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View {
    private static $twig = null;

    private static function init() {
        if (self::$twig === null) {
            $loader = new FilesystemLoader(__DIR__ . '/../views');
            self::$twig = new Environment($loader, [
                'cache' => __DIR__ . '/../cache',
                'auto_reload' => true, 
            ]);
        }
    }

    public static function render($view, $data = []) {
        self::init();
        echo self::$twig->render($view . '.twig', $data);
    }
}
