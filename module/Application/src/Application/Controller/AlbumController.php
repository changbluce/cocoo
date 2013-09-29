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

class AlbumController extends baseController
{  
	protected $_album;
	public function __construct(){
	    parent::__construct();
        $this->_album = new AlbumModel();  
        $this->intranslate();
    }
    private function intranslate(){
        	$this->_view->home = $GLOBALS['tr']["Home"];
    }
    public function DetailAction()
    {
       $this->_view->test=array("dog");
       $id=isset($_GET['id'])?$_GET['id']:0;
       $this->_view->album = $this->_album->getById($id);
       $this->_view->setTemplate('application/album/detail.tpl');
//     	$indexView = $this->_view; 
//     	$this->_view->albums=$this->getAlbumTable()->fetchAll();
    	return $this->_view;
    }
    public function InsertAction(){
    	$album = array();
    	$album['title']=isset($_POST['title'])?$_POST['title']:'';
    	$album['artist']=isset($_POST['artist'])?$_POST['artist']:'';
    	echo $this->_album->addAlbum($album);
    	
    }
    public function UpdateAction(){
    	$album = array();
    	$album['id']=isset($_POST['id'])?$_POST['id']:'';
    	$album['title']=isset($_POST['title'])?$_POST['title']:'';
    	$album['artist']=isset($_POST['artist'])?$_POST['artist']:'';
    	if($album['id']>0)
    	echo $this->_album->updateAlbum($album, $_POST['id']);
    	else echo 0;
    	
    }
    public function DeleteAction(){
    	$id=isset($_POST['id'])?$_POST['id']:'';
    	if($id>0)
    	echo $this->_album->deleteAlbum($id);
    	else echo 0;
    	
    }
}
