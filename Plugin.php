<?php

namespace Kanboard\Plugin\Eisenhower;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:project:sidebar:actions', function () {
            echo '<div style="color:red">PLUGIN ACTIVO</div>';
            echo '<script>console.log("Plugin Eisenhower activo");</script>';
        });

        file_put_contents('/tmp/plugin_eisenhower.log', "Plugin cargado en initialize()\n", FILE_APPEND);
    }

    public function getPluginDescription()
    {
        file_put_contents('/tmp/plugin_eisenhower.log', "Plugin cargado en descripción\n", FILE_APPEND);
        return 'Plugin Eisenhower activo';
    }

    public function getPluginName() { return 'Eisenhower'; }
    public function getPluginVersion() { return '1.1.0'; }
    public function getCompatibleVersion() { return '>=1.2.7'; }
    public function getPluginAuthor() { return 'Andrés Silva'; }
    public function getPluginHomepage() { return 'https://github.com/iamandressr/eisenhowerplugin'; }
}
