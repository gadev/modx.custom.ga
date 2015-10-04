<?php
define('MODX_API_MODE', true);
include_once(dirname(__FILE__)."/index.php");
$modx->db->connect();
if (empty ($modx->config)) {
    $modx->getSettings();
}
$modx->invokeEvent("OnWebPageInit");

if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest')){
        $modx->sendRedirect($modx->config['site_url']);
}

$out = $modx->runSnippet('ajax');


if(isset($_REQUEST['json'])){
   $out = json_encode(array('message' => $out));
}
echo $out;