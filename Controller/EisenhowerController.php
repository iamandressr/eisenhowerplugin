<?php

namespace Kanboard\Plugin\Eisenhower\Controller;

use Kanboard\Controller\BaseController;

class EisenhowerController extends BaseController
{
    public function show()
    {
        echo '<script>alert("✅ Controlador Eisenhower funciona desde PHP");</script>';
        echo '<h1>Hola desde el plugin Eisenhower aaaa</h1>';
        exit;
    }
}
