<div class="article-box">
	<?php foreach ($articles as $article): ?>
		<a href="news/<?= $article->title?>">
			<div class="thumb">
				<img src="<?= $article->thumb.'?time='.strtotime($talent->modified)?>">
			</div>
			<h3><?= $article->title?></h3>
			<p><?= $article->description?></p>
		</a>
	<?php endforeach;?>
</div>