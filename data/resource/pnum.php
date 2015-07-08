<?php
/**
<<<<<<< HEAD
好商城V3 33hao.com 提供

网址：www.33hao.com

=======
shopx yywxx.com 提供

网址：www.yywxx.com

>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1
^^^^^^^^^^^^^^^^^^^^^^^^^^^^

 */
$pnum = $_GET['pnum'];
$im = imagecreate(120, 16);
$bg = imagecolorallocate($im, 247, 247, 247);
$textcolor = imagecolorallocate($im, 101, 101, 101);
imagestring($im, 5, 0, 0, $pnum, $textcolor);
header("Content-type: image/png");
imagepng($im);
