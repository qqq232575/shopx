<<<<<<< HEAD
<?php defined('InShopNC') or exit('Access Invalid!'); ?>
=======
<?php defined('IN_OS') or exit('Access Invalid!'); ?>
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

<div class="index_block home3">
    <?php if(!empty($vv['title'])) {?>
    <div class="title"><?php echo $vv['title']; ?></div>
    <?php } ?>
    <div class="content">
    <?php foreach ((array) $vv['item'] as $item) { ?>
        <div nctype="item_image" class="item">
            <a nctype="btn_item" href="javascript:;" data-type="<?php echo $item['type']; ?>" data-data="<?php echo $item['data']; ?>"><img nctype="image" src="<?php echo $item['image']; ?>" alt=""></a>
        </div>
    <?php } ?>
    </div>
</div>
