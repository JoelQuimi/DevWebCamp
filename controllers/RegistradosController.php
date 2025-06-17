<?php

namespace Controllers;

use MVC\Router;

class RegistradosController {
    public static function index(Router $router) {

        $router->render('admin/registrado/index', [
            'titulo' => 'Registrados',
        ]);
    }

}