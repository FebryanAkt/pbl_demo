<?php

class Router
{
    public function run()
    {
        // Ambil URL (contoh: /proyek/detail/5)
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';

        $urlParts = explode('/', $url);

        // Nama controller
        $controllerName = ucfirst($urlParts[0]) . "Controller";
        $methodName = $urlParts[1] ?? "index";

        // Path file controller
        $controllerFile = "../app/controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            $controller = new $controllerName;

            if (method_exists($controller, $methodName)) {
                unset($urlParts[0], $urlParts[1]);
                $params = $urlParts ? array_values($urlParts) : [];

                call_user_func_array([$controller, $methodName], $params);
            } else {
                die("Method <b>$methodName</b> tidak ditemukan di controller <b>$controllerName</b>.");
            }
        } else {
            die("Controller <b>$controllerName</b> tidak ditemukan.");
        }
    }
}
