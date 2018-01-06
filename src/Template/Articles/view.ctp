<?php $this->layout = 'lockon'; 
$this->start('meta');
$option = [
    "title" => 'ロックオン芸能事務所｜'.$article->title,
    "description" => $article->body,
];
echo $this->element('meta',$option);
$this->end();?>
<article>
	<div class="title">
		<h2><?= $article->title?></h2>
		<p><?=$article->modified?></p>
		<?php if($authUser&&$authUser['username']=='admin'){?>
		<a href="/articles/edit/<?=$article->id?>" class="btn">編集</a>
		<?php } ?>
	</div>
	<div class="contents">
		<?= $article->body?>
	</div>
</article>