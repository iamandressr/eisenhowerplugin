<?php

namespace Kanboard\Plugin\Eisenhower\Controller;

use Kanboard\Controller\BaseController;

class EisenhowerController extends BaseController
{
    public function show()
{
    header('Content-Type: text/plain');
    echo "✅ Controlador Eisenhower funciona\n";
    exit;
}

}
