<?php $this->layout = 'lockon'; 
$this->start('meta');
$option = [
    "title" => 'タレント編集｜'.$talent->name_jp,
    "description" => $talent->description,
    "robot" => 'noindex,follow'
];
echo $this->element('meta',$option);
$this->end();
$talent = $this->echoEditTalent($talent);
?>
<form id="talent_form" method="post">
	<input type="submit" class="btn" value="保存">
	<img src="<?=$talent->thumb?>">
	<input type="hidden" name="id" value="<?=$talent->id?>">
	<label>名前</label>
	<input type="text" name="name_jp" value="<?=$talent->name_jp?>">
	<label>ローマ字</label>
	<input type="text" name="name" value="<?=$talent->name?>">
	<label>誕生日</label>
	<input type="date" name="birthday" value="<?php if(!empty($talent->birthday)) echo $talent->birthday; ?>"><br>
	<label>年齢</label>
	<input type="text" name="age" value="<?=$talent->age?>"><br>
	<label>出身地</label>
	<input type="text" name="birthplace" value="<?=$talent->birthplace?>">
	<label>血液型</label>
	<input type="text" name="bloodtype" value="<?=$talent->bloodtype?>">
	<label>サイズ</label>
	<input type="text" style="width: 150px;" name="size" value="<?=$talent->size?>"><br>
	<label>サムネ</label>
	<input type="text" style="width: 650px;float: right;" name="thumb" value="<?=$talent->thumb?>"><br><br>
	<label>twitter</label>
	<input type="text" style="width: 650px;" name="twitter" value="<?=$talent->twitter?>"><br>
	<label>facebook</label>
	<input type="text" style="width: 650px;" name="facebook" value="<?=$talent->facebook?>"><br>
	<label>instagram</label>
	<input type="text" style="width: 650px;" name="instagram" value="<?=$talent->instagram?>"><br>
	<label>blog</label>
	<input type="text" style="width: 650px;" name="blog" value="<?=$talent->blog?>"><br>
	<label>status</label>
	<input type="text" name="status" value="<?=$talent->status?>">
	<label>順番</label>
	<input type="text" name="orders" value="<?=$talent->orders?>">
	<label style="display: block;margin-top: 30px;">趣味</label>
	<textarea name="hobby" style="height: 100px;"><?=$talent->hobby?></textarea>
	<label>特技</label>
	<textarea name="skill" style="height: 100px;"><?=$talent->skill?></textarea>
	<label>レギュラー情報</label>
	<textarea name="description"><?=$talent->description?></textarea>
	<label>TV番組</label>
	<textarea name="series"><?=$talent->series?></textarea>
	<label>イベント</label>
	<textarea name="event"><?=$talent->event?></textarea>
	<label>ドラマ</label>
	<textarea name="drama"><?=$talent->drama?></textarea>
	<label>映画</label>
	<textarea name="movie"><?=$talent->movie?></textarea>
	<label>ラジオ</label>
	<textarea name="radio"><?=$talent->radio?></textarea>
	<label>雑誌</label>
	<textarea name="magazine"><?=$talent->magazine?></textarea>
	<label>ムック</label>
	<textarea name="mook"><?=$talent->mook?></textarea>
	<label>その他</label>
	<textarea name="other"><?=$talent->other?></textarea>
</form>