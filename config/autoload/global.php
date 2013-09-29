<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overridding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
   'db' => array(
        'hostname' => '127.0.0.1',
        'driver' => 'mysql',
        'database' => 'album',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',//ÅäÖÃÊý¾Ý¿â×Ö·û¼¯£¬·ÀÖ¹³öÏÖÂÒÂë
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
                    => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);