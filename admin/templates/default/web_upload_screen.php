<<<<<<< HEAD
<?php defined('InShopNC') or exit('Access Invalid!');?>
=======
<?php defined('IN_OS') or exit('Access Invalid!');?>
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
<script type="text/javascript">
    <?php if (is_array($output['pic']) && !empty($output['pic'])) { ?>
	parent.screen_pic("<?php echo $output['pic']['pic_id'];?>","<?php echo $output['pic']['pic_img'];?>");
	<?php } ?>
    <?php if (!empty($output['ap_pic_id'])) { ?>
	parent.screen_ap("<?php echo $output['ap_pic_id'];?>","<?php echo $output['ap_color'];?>");
	<?php } ?>

</script>