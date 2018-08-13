<?php

function watermark_image($image,$output){
	$info = getimagesize($image);
	
	// print_r($info);
	
	switch($info['mime']){
		
		case 'image/jpeg':
		$main = imagecreatefromjpeg ($image);
		break;
		
		case 'image/png':
		$main = imagecreatefrompng ($image);
		break;
		
		case 'image/gif':
		$main = imagecreatefromgif ($image);
		break;
		
		default:
		return false;
	}
	imagealphablending($main, true);
	
	$overlay = imagecreatefrompng("{$GLOBALS['path']}/mhm.png");
	
	imagecopymerge($main,$overlay, 205, 105, 0,0, imagesx($overlay), imagesy($overlay),50);
	
	imagepng($main, $output);
}
?>