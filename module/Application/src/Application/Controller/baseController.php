<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Helper\Layout;
use Zend\View\Helper\Placeholder;
use Application\Model\AlbumModel;

class baseController extends AbstractActionController
{
	protected $_view;
	public function __construct(){
		$this->_view = new ViewModel();
	    $this->translate();
		
	}
	private function translate(){
		$this->placeholder= new Placeholder();
		$this->_view->all_rights = $GLOBALS['tr']["All rights reserved."];
		var_dump($this->placeholder->getView());
// 		$this->_view->Home = $GLOBALS['tr']["Home"];
	}
}