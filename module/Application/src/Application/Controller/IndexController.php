<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Application\Model\AlbumModel;

class IndexController extends baseController
{  
	protected $_album;
	public function __construct(){
		parent::__construct();
// 		$this->translator = $this->getServiceManager()->get('translator');
        $this->_album = new AlbumModel();
		
	}
	private function intranslate(){
		$this->_view->Home = $GLOBALS['tr']["All rights reserved."];
	}
    public function indexAction()
    {
       $this->_view->test=array("dog");
       $this->_view->albums = $this->_album->getAllAlbum();
//     	$indexView = $this->_view; 
//     	$this->_view->albums=$this->getAlbumTable()->fetchAll();
    	return $this->_view;
    }
}
