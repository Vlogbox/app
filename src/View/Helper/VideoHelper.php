<?php 
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Core\Configure;
use MediaEmbed\MediaEmbed;


class VideoHelper extends Helper {

	public function getVedioThumbLink($entity) {
		$path_parts = pathinfo($entity->url);
		$name = $path_parts['filename'].'.jpg';
		$path = str_replace("webroot","",$entity->dir);
		return $path. DS. $name;
	}

	public function getVedioLink($entity) {
		$path = str_replace("webroot","",$entity->dir);
		return $path.$entity->url;
	}
	
}