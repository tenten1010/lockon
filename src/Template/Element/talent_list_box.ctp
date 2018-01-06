<div class="talent-box">
	<?php foreach ($talents as $talent){ ?>
		<a href="/talents/<?= $talent->name?>">
			<div class="thumb">
				<img src="<?= $talent->thumb?>">
			</div>
			<h4><?= $talent->name_jp?></h4>
		</a>
	<?php } ?>
</div>