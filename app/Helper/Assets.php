<?php

namespace App\Helper;

class Assets 
{
	
	function __construct()
	{
	
	}

	static function getJs($folder = false){
		if(!$folder){
			$folder = config('assets.js_folder');
		}
		echo "<!-- Js Files -->";
		$js_files = \File::glob($folder.'/*.js',GLOB_NOESCAPE);
		foreach ($js_files as $file) {
			echo "<script type='text/javascript' src='".$file."'></script>";
		}
		echo "<!-- Js Files End-->";
	}

	static function getCss($folder = false){
		if(!$folder){
			$folder = config('assets.js_folder');
		}
		echo "<!-- Css Files -->";
		$js_files = \File::glob($folder.'/*.css',GLOB_NOESCAPE);
		foreach ($js_files as $file) {
			echo "<link href='".$file."' rel='stylesheet'>";
		}
		echo "<!-- Css Files end -->";
	}

}
?>