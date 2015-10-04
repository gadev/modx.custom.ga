//<?php
/**
 * adminMenu
 * 
 * правка меню для менеджера
 *
 * @category 	plugin
 * @version 	1.0
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@events OnManagerMenuPrerender 
 * @internal	@modx_category Manager and Admin
 * @internal    @installset base, sample
 * @internal    @disabled 0
 */


$e = &$modx->Event;
switch($e->name){
    case 'OnManagerMenuPrerender':
	//print_r();
	if($modx->getLoginUserID() == 2){
		//переносим файлы в главное меню и убираем все остальные инструменты
		$menu['manage_files']     = array('manage_files','main','Управление файлами','index.php?a=31','Управление файлами','this.blur();','file_manager','main',0,11,'');
		unset($menu['elements']);
		
		//лишнее в сайте
		unset($menu['add_resource']);
		unset($menu['add_weblink']);
		
		//лишнее в модулях
		unset($menu['modules']);
		
		//лишнее у пользователей
		unset($menu['users']);
		//unset($menu['web_user_management_title']);
		//unset($menu['role_management_title']);
		//unset($menu['manager_permissions']);
		//unset($menu['web_permissions']);
		
		//лишнее в инструментах
		//unset($menu['tools']);
		unset($menu['import_site']);
		unset($menu['export_site']);
		
		//доп кнопки
		//$menu['orders']     = array('orders','main','Заказы','#orders','Заказы','new NavToggle(this); return false;','','',0,60, '');
		//$menu['neworders']     = array('neworders','orders','Новые заказы','index.php?a=112&id=4','Новые заказы','this.blur();','','main',0,60, '');
	}
		
        $e->output(serialize($menu));
        break;
}