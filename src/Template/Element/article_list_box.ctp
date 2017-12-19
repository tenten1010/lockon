<div class="article-box">
	<?php foreach ($articles as $article): ?>
		<a href="news/<?= $article->title?>">
			<div class="thumb">
				<img src="<?= $article->thumb?>">
			</div>
			<h3><?= $article->title?></h3>
			<p><?= $article->body?></p>
		</a>
	<?php endforeach;?>
</div>