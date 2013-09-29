<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener, 
    \ActiveRecord,
	ActiveRecord\Connection;
class Module
{
	public $e;
    public function onBootstrap($e)
    {
    	$this->e=$e;
    	$this->translator = $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $config = $e->getApplication()->getServiceManager()->get('config');
//         $GLOBALS['smarty'] = new \SmartyBC;
//         $smarty->registerPlugin('modifier','_translate', array($this,'translate'));
//         $db = Zend_Db::factory('Pdo_Mysql', array(
//         		'host'     => $config['db']['hostname'],
//         		'username' => $config['db']['username'],
//         		'password' => $config['db']['password'],
//         		'dbname'   => $config['db']['database']
//         ));
//         Zend_Db_ActiveRecord_Abstract::setDefaultAdapter($db);
        $cfg = \ActiveRecord\Config::instance();
        $cfg->set_connections(array('development' => $config['db']['dsn'])); 
        $this->translation();
//         $this->smarty->translator = $this->translator();
//         Connection::instance('development');
    }
    public function translate($word){
//         $this->translator = $this->e->getApplication()->getServiceManager()->get('translator');
    	$GLOBALS['tr'][$word]=$this->translator->translate($word);
    }
    private function translation(){
    	 $this->translate('All rights reserved.');
    	 $this->translate('Follow Development');
    	 $this->translate('Discover Modules');
    	 $this->translate('Skeleton Application');
    	 $this->translate('Home');
    }
   
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/../../vendor/ActiveRecord/autoload_classmap.php',
                __DIR__ . '/../../vendor/Custom/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
