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
	</div>
	<div class="contents">
		<?= $article->body?>
	</div>
</article>