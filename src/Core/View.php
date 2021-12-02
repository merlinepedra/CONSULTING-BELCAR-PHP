<?php

namespace App\Core;

class View {
    public function __construct(string $view, array $data = null)
    {
        require_once __DIR__ . "/../Views/Pages/{$view}.php";
    }
}