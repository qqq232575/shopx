<?php
/**
 * 系统文章
 *
 *
 *
<<<<<<< HEAD
 **by 好商城V3 www.33hao.com 运营版*/


defined('InShopNC') or exit('Access Invalid!');
=======
 **by shopx www.yywxx.com 运营版*/


defined('IN_OS') or exit('Access Invalid!');
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

class documentControl extends BaseHomeControl {
	public function indexOp(){
		$lang	= Language::getLangContent();
		if($_GET['code'] == ''){
			showMessage($lang['para_error'],'','html','error');//'缺少参数:文章标识'
		}
		$model_doc	= Model('document');
		$doc	= $model_doc->getOneByCode($_GET['code']);
		Tpl::output('doc',$doc);
		/**
		 * 分类导航
		 */
		$nav_link = array(
			array(
				'title'=>$lang['homepage'],
				'link'=>SHOP_SITE_URL
			),
			array(
				'title'=>$doc['doc_title']
			)
		);
		Tpl::output('nav_link_list',$nav_link);
		Tpl::showpage('document.index');
	}
}
