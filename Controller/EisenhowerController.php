<?php

namespace Kanboard\Plugin\Eisenhower\Controller;

use Kanboard\Controller\BaseController;

class EisenhowerController extends BaseController
{
    public function show()
    {
        echo '<script>console.log("✅ Controlador Eisenhower funciona desde PHP");</script>';
        exit;
    }
}
