<<<<<<< HEAD
<?php defined('InShopNC') or exit('Access Invalid!');?>
=======
<?php defined('IN_OS') or exit('Access Invalid!');?>
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
<div id="container_<?php echo $output['stattype'];?>"></div>
<script>
$(function () {
	$('#container_<?php echo $output['stattype'];?>').highcharts(<?php echo $output['stat_json'];?>);
});
</script>