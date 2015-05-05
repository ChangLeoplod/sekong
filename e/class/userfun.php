<?php
//---------------------------用户自定义标签函数文件
function get_imgs($content){
	$img_arr = array();
	//$reg = "/.*src=\"([^^]*?)\".*/i";
	$reg="/<[img|IMG|iframe|IFRAME].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.mp4]))[\'|\"].*?[\/]?>/";
	preg_match_all($reg, $content, $img_arr);
	$img_arr = array_unique($img_arr[1]);
	return $img_arr;
}

?>
