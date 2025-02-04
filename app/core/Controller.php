<?php

namespace App\Core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Controller {
    protected $twig;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/../views');
        $this->twig = new Environment($loader, [
            'cache' => false, 
        ]);
    }

    public function render($view, $data = []) {
        $view = $view . '.twig';
        echo $this->twig->render($view, $data);
    }

    public function redirect($url) {
        header("Location: $url");
        exit;
    }

    public function input($key, $default = null) {
        return $_REQUEST[$key] ?? $default;
    }
}
