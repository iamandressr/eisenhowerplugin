<?php

namespace Kanboard\Plugin\Eisenhower;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        //Rutas
        $this->route->addRoute('eisenhower/show/:project_id', 'EisenhowerController', 'show', 'Eisenhower');

        // Insertar algo visual en la barra lateral
        $this->template->hook->attach('template:project:sidebar:actions', function () {
            echo '<div style="color: red; font-weight: bold;">PLUGIN ACTIVO</div>';
            echo '<script>console.log("🚀 Eisenhower Plugin cargado")</script>';
        });

        // Registrar en log que se cargó initialize
        file_put_contents('/tmp/plugin_eisenhower.log', "✅ initialize ejecutado\n", FILE_APPEND);
    }

    public function getPluginDescription()
    {
        file_put_contents('/tmp/plugin_eisenhower.log', "✅ getPluginDescription ejecutado\n", FILE_APPEND);
        return 'Plugin cuadrante Eisenhower en tablero de proyectos';
    }

    public function getPluginName()
    {
        return 'Eisenhower';
    }

    public function getPluginAuthor()
    {
        return 'Andrés Silva';
    }

    public function getPluginVersion()
    {
        return '1.0.6';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.3';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/iamandressr/eisenhowerplugin';
    }
}
