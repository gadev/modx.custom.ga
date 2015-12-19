<?php 
	namespace DL\Prepare;

	class Products {
		public static function prepare(array $data = array(), \DocumentParser $modx, $_DL, \prepare_DL_Extender $_extDocLister) {
			
			$thumbOpt = $_DL->getCFGDef('thumbs');
			$data['img'] = $modx->runSnippet('phpthumb', array(
				'input' => $data['tv.img'],
				'options' => $thumbOpt
			));
			$data['title'] = (!empty($data['menutitle'])) ? $data['menutitle'] : $data['pagetitle'];
			if($data['tv.imgs']) {
				$data['bg'] = $modx->runSnippet('phpthumb', array(
					'input' => $data['tv.imgs'],
					'options' => 'w_300,h_300,zc_1'
				));
			}
			return $data;
		}
		/*
		public static function worksInService(array $data = array(), \DocumentParser $modx, $_DL, \prepare_DL_Extender $_extDocLister) {
			$data['img'] = $modx->runSnippet('phpthumb', array(
				'input' => $data['tv.img'],
				'options' => 'w_270,h_200,zc_1'
			));
			return $data;
		}
		*/
		public static function tabsInWorks(array $data = array(), \DocumentParser $modx, $_DL, \prepare_DL_Extender $_extDocLister) {
			if($_GET['service'] == $data['id']) $data['active'] = 'class="active"';
			else $data['active'] = '';
			if(empty($_GET['service']) && $data['iteration'] == 1) $data['active'] = 'class="active"';
			return $data;
		}
		
	}
