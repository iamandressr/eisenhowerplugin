<?php

namespace Kanboard\Plugin\Eisenhower;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        // Añade un enlace en el menú del proyecto
        $this->route->addRoute('eisenhower', 'EisenhowerController', 'show', 'project');
        $this->template->hook->attach('template:board:show:after-columns', 'eisenhower:board/eisenhower-quadrant');
        $this->hook->on('template:layout:css', array('plugins/Eisenhower/Assets/css/eisenhower.css'));
    }

    public function getPluginName()
    {
        return 'Eisenhower';
    }

    public function getPluginDescription()
    {
        return 'Muestra un cuadrante Eisenhower para gestionar tareas según urgencia e importancia.';
    }

    public function getPluginVersion()
    {
        return '0.1.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.7'; // Cambia según la versión mínima de Kanboard que uses
    }

    public function getAuthor()
    {
        return 'Andrés Silva';
    }

    public function getHomepage()
    {
        return 'https://github.com/iamandressr';
    }
}
