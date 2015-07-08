<<<<<<< HEAD
<?php defined('InShopNC') or exit('Access Invalid!');?>
=======
<?php defined('IN_OS') or exit('Access Invalid!');?>
>>>>>>> 467667b4415dab752ffe27b4111586efecff99c1

<div class="eject_con">
  <div id="warning"></div>
  <form action="index.php?act=cut&op=pic_cut" id="form_cut" method="post">
    <input type="hidden" name="form_submit" value="ok" />
    <input type="hidden" id="x" name="x" value="<?php echo $_GET['x'];?>" />
    <input type="hidden" id="x1" name="x1" />
    <input type="hidden" id="y1" name="y1" />
    <input type="hidden" id="x2" name="x2" />
    <input type="hidden" id="y2" name="y2" />
    <input type="hidden" id="w" name="w" />
    <input type="hidden" id="h" name="h" />
    <input type="hidden" id="url" name="url" value="<?php echo $_GET['url'];?>" />
    <div class="pic-cut-100">
      <div class="work-title"><?php echo $lang['nc_comm_workarea'];?></div>
      <div class="work-layer">
        <p><img id="nccropbox" src="<?php echo $_GET['url'];?>"/></p>
      </div>
      <div class="thumb-title"><?php echo $lang['nc_comm_cut_view'];?></div>
      <div class="thumb-layer">
        <p><img id="preview" src="<?php echo $_GET['url'];?>"/></p>
      </div>
      <div class="cut-help">
        <h4><?php echo $lang['nc_comm_op_help'];?></h4>
        <p><?php echo $lang['nc_comm_op_help_tip'];?></p>
      </div>
      <div class="cut-btn">
        <input class="submit"  type="button" id="pic_submit" value="<?php echo $lang['nc_submit'];?>">
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
function showPreview(coords)
{
	if (parseInt(coords.w) > 0){
		var rx = <?php echo $_GET['x'];?> / coords.w;
		var ry = <?php echo $_GET['y'];?> / coords.h;
		$('#preview').css({
			width: Math.round(rx * <?php echo $output['width'];?>) + 'px',
			height: Math.round(ry * <?php echo $output['height'];?>) + 'px',
			marginLeft: '-' + Math.round(rx * coords.x) + 'px',
			marginTop: '-' + Math.round(ry * coords.y) + 'px'
		});
	}
	$('#x1').val(coords.x);
	$('#y1').val(coords.y);
	$('#x2').val(coords.x2);
	$('#y2').val(coords.y2);
	$('#w').val(coords.w);
	$('#h').val(coords.h);
}
$(function(){
	$('.dialog_head').css('margin-top','0px');
	$('.page').css('padding-top','0px');
	$('.dialog_close_button').remove();
    $('#nccropbox').Jcrop({
		aspectRatio:1,
		setSelect: [ 0, 0, <?php echo $_GET['x'];?>, <?php echo $_GET['y'];?> ],
		minSize:[50, 50],
		allowSelect:0,
		onChange: showPreview,
		onSelect: showPreview
    });

    $('#pic_submit').click(function(){
		var x1 = $('#x1').val();
		var y1 = $('#y1').val();
		var x2 = $('#x2').val();
		var y2 = $('#y2').val();
		var w = $('#w').val();
		var h = $('#h').val();
		if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
			alert("You must make a selection first");
			return false;
		}
		var d=$('#form_cut').serialize();
		$.post('index.php?act=cut&op=pic_cut',d,function(data){
			call_back(data);
			DialogManager.close('cutpic');
		});
	});
});
</script>