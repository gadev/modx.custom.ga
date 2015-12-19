<?php
$doc = $modx->documentObject;
$o = '';
$ph = array();
$dl = array();

function parse($chunk, $placeholders) {
	global $modx;
	return $modx->parseChunk($chunk, $placeholders, '[+', '+]');
}
function typo($text){
	global $modx;
	return $modx->runSnippet('ddTypograph', array('text'=>$text));
}
function DocLister($params){
	global $modx;
	return $modx->runSnippet('DocLister', $params);
}
function execIt($list,$class,$ifid=null,$pages=null,$addon=null) {
	global $modx;
	$paging = $pages ? $modx->getChunk('list.pages') : '';
	$theId = $ifid ? 'id="'.$ifid.'"' : '';
	return '<div class="'.$class.'" '.$theId.'>'.$list.'</div>' . $paging . $addon;
}


switch($doc['id']){
	
}

return $o;