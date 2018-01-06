<script type="text/javascript">
$(function(){
	var show = 0;
	var length = <?= count($images)?>;
	$(".profile-image").on('click',function(){
		if (length > 0){$("#image_viewer").show();}
	});
	$("#image_viewer img[id=0]").show();
	$("#image_viewer label").eq(1).on('click',function(){
		$("#image_viewer div img[id="+show+"]").hide();
		show = (show == length-1) ? 0 : show+1;
		$("#image_viewer div img[id="+show+"]").show();
	});
	$("#image_viewer label").eq(0).on('click',function(){
		$("#image_viewer div img[id="+show+"]").hide();
		show = (show == 0) ? length-1 : show-1;
		console.log(show);
		$("#image_viewer div img[id="+show+"]").show();
	});
	$("#image_viewer label").eq(2).on('click',function(){
		$("#image_viewer").hide();
	});
});
</script>
<div id="image_viewer">
	<div>
		<?php foreach ($images as $key => $image): ?>
			<img id="<?=$key?>" class="hidden" src="<?=$image->url.'?time='.strtotime($talent->modified)?>">
		<?php endforeach ?>
	</div>
	<label><</label>
	<label>></label>
	<label>X</label>
</div>