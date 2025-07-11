<?php

namespace Kanboard\Plugin\Eisenhower;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
{
    // Ruta opcional (puedes eliminarla si no usarás controlador propio)
    $this->route->addRoute('eisenhower', 'EisenhowerController', 'show', 'project');

    // Inserta el cuadrante Eisenhower después de las columnas del tablero
    $this->template->hook->attach('template:project:sidebar:actions', function() {
    echo '<div style="background:#ff0; padding:10px;">Eisenhower plugin activo</div>';
});

    // Carga el CSS del plugin
    $this->hook->on('Template:layout:css', ['plugins/Eisenhower/Assets/css/eisenhower.css']);
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
        return '>=1.2.7'; 
    }

    public function getPluginAuthor()
    {
        return 'Andrés Silva';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/iamandressr/eisenhowerplugin';
    }
}
