<?php $this->layout = 'lockon'; 
$this->start('meta');
$option = [
    "title" => '最新情報編集画面｜'.$article->title,
    "description" => $article->description,
    "robot" => 'noindex,follow'
];
echo $this->element('meta',$option);
$this->end();
?>
<script type="text/javascript">
$(function(){
	$('#article_form textarea').bind('keydown keyup keypress change',function(){
		$('.contents').empty();
		$('.contents').html($(this).val());
	});
});
</script>
<div class="left">
	<form id="article_form" method="post">
		<input type="submit" class="btn" value="保存">
		<label>記事ID</label>
		<input type="text" name="id" value="<?=$article->id?>" disabled>
		<label>タイトル</label>
		<input type="text" name="title" value="<?=$article->title?>">
		<label>description</label>
		<input type="text" name="description" value="<?=$article->description?>">
		<label>サムネ</label>
		<input type="text" name="thumb" value="<?=$article->thumb?>">
		<label>ボディ</label>
		<textarea name="body"><?=$article->body?></textarea>
	</form>
</div>
<div class="right">
	<article><div class="contents">
		<?=$article->body?>
	</div></article>
</div>