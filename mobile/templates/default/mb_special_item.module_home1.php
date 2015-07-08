<<<<<<< HEAD
<?php defined('InShopNC') or exit('Access Invalid!'); ?>
=======
<?php defined('IN_OS') or exit('Access Invalid!'); ?>
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

<div class="index_block home1">
    <?php if(!empty($vv['title'])) {?>
    <div class="title"><?php echo $vv['title']; ?></div>
    <?php } ?>
    <div class="content">
        <div nctype="item_image" class="item">
            <a nctype="btn_item" href="javascript:;" data-type="<?php echo $vv['type']; ?>" data-data="<?php echo $vv['data']; ?>">
                <img nctype="image" src="<?php echo $vv['image']; ?>" alt="">
            </a>
        </div>
    </div>
</div>
