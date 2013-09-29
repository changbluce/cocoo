<?php 
// Create a Zend_Db adapter
namespace Application\Model; 

use Album\Model\Album;

class AlbumModel {
	public function __construct(){
		Album::$table_name='album';
	} 
	public function getAllAlbum(){
		$oAlbum=Album::all();
// 		$albums=array();
// 		$i=0;
// 		foreach($oAlbum as $albre){
// 			$albums[$i]['id']=$albre->id;
// 			$albums[$i]['artist']=$albre->artist;
// 			$albums[$i]['title']=$albre->title;
// 			$i++;
// 		}
// 		return $albums;
		return $oAlbum;
	}
	/**
	 * find bu id
	 * @param unknown $id
	 * @return  boolean Array album
	 */
	public function getById($id){
		if($id>0)
		{
			return $oAlbum=Album::find($id);
		}
		else {
			return false;
		}
	}
	public function addAlbum($album){
		if(is_array($ablum))
		{
			$ablum['created']=time();
			return Album::create($album);
		}
		else 
			return false;
		
	}
	public function updateAlbum($album,$id){
		if(is_array($ablum))
		{
			$ablum['created']=time();
			Album::table()->pk=$id;
			return Album::create($album);
		}
		else
			return false;
	
	}
	public function deleteAlbum($id){
		if($id>0)
		{
			Album::table()->pk=$id;
			Album::delete();
		}
		else
			return false;
	}
	
	
}
