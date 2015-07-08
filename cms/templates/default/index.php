<<<<<<< HEAD
<?php defined('InShopNC') or exit('Access Invalid!');?>
=======
<?php defined('IN_OS') or exit('Access Invalid!');?>
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
<div class="cms-content">
<?php 
$index_file = BASE_UPLOAD_PATH.DS.ATTACH_CMS.DS.'index_html'.DS.'index.html';
if(is_file($index_file)) {
    require($index_file);
}
?>
</div>
