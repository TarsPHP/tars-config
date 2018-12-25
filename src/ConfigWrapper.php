<?php
/**
 * Created by PhpStorm.
 * User: liangchen
 * Date: 2018/12/20
 * Time: 22:53
 */

namespace Tars\config;


class ConfigWrapper
{
    public $_configServant;

    public function __construct($tarsClientConf, $socketMode = 2)
    {
        $config = new \Tars\client\CommunicatorConfig();
        $locator = $tarsClientConf['locator'];
        $moduleName = $tarsClientConf['modulename'];

        $config->setLocator($locator);
        $config->setModuleName($moduleName);
        $config->setSocketMode($socketMode);

        $this->_configServant = new ConfigServant($config);
    }

    public function loadConfig($app, $server, $filename, &$config) {
        $this->_configServant->loadConfig($app, $server, $filename, $config);
    }

}