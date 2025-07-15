<?php

namespace Kanboard\Plugin\Eisenhower;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
        {
            // Definir ruta para el plugin Eisenhower
            $this->route->addRoute('eisenhower/show/:project_id', 'EisenhowerController', 'show', 'eisenhower');

            // Agregar texto visual simple en la barra lateral (para testear)
            $this->template->hook->attach('template:project:sidebar:actions', function () {
                echo '<div style="color: green; font-weight: bold;">PLUGIN ACTIVO</div>';
            });

            $this->template->hook->attach('template:project:sidebar', 'eisenhower:sidebar/link'); // ✅

            $this->container['EisenhowerController'] = $this->container->factory(function ($c) {
                return new \Kanboard\Plugin\Eisenhower\Controller\EisenhowerController($c);
            });

            // Registrar log para depuración (opcional)
            file_put_contents(__DIR__.'/plugin_test.log', date('Y-m-d H:i:s')." - initialize ejecutado\n", FILE_APPEND);
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
        return '>=1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/iamandressr/eisenhowerplugin';
    }
}
