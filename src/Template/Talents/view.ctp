<?php $this->layout = 'lockon'; 
$talent = $this->echoTalent($talent);
$this->start('meta');
$option = [
    "title" => 'ロックオン芸能事務所｜'.$talent->name_jp,
    "description" => $talent->description,
];
echo $this->element('meta',$option);
$this->end();
?>

<script type="text/javascript">
$(function(){
	$('.event').find('label').first().addClass('selected');
	$('.event-contents').find('p').first().removeClass('hidden');

	$('.event').on('click','label',function(){
		$(this).parent().find('label').removeClass('selected');
		$(this).addClass('selected');
		$('.event-contents').find('p').addClass('hidden');
		$('.event-contents').find('p[name="'+$(this).text()+'"]').removeClass('hidden');
	});
});
</script>
<style type="text/css">
.sns-bar {padding: 0 20px;height: 25px;}
.sp .sns-bar{padding: 20px; height: 65px;}
.sns-bar .sns {display: inline-block;width: 25px; height: 25px; background-repeat: no-repeat;background-size: contain; margin-right: 8px;}
.sns-bar a.twitter {background-image: url('http://www.pyramid.tokyo/resources/images/icon_twitter@2x.png');}
.sns-bar a.instagram {background-image: url('http://www.pyramid.tokyo/resources/images/icon_instagram@2x.png');}
.sns-bar .invalid {opacity: 0.5;cursor: default;}
</style>
<?php 
$tabs = ['series'=>'TV番組','event'=>'イベント','drama'=>'ドラマ','cm'=>'CM','movie'=>'映画','radio'=>'ラジオ','magazine'=>'雑誌','mook'=>'ムック','other'=>'その他'];
echo $this->element('image_viewer',['images'=>$images]);
?>
<div class="title">
	<h2><?= $talent->name_jp?></h2>
	<p><?= $talent->name_en?></p>
	<?php if($authUser&&$authUser['username']=='admin'){?>
		<a href="/talents/edit/<?=$talent->name?>" class="btn">編集</a>
	<?php } ?>
</div>
<div class="talent-profile">
	<div class="left">
		<div class="profile-image">
			<div>写真を見る</div>
			<img src="<?=$talent->thumb."?time=".strtotime($talent->modified)?>">
		</div>
		<div class="profile">
			<dl>
				<dt>生年月日</dt><dd><?=$talent->birthday?></dd>
				<?php if($talent->age){?><dt>年齢</dt><dd><?=$talent->age?>歳</dd><?php }?>
				<dt>出身地</dt><dd><?=$talent->birthplace?></dd>
				<dt>血液型</dt><dd><?=$talent->bloodtype?></dd>
				<dt>サイズ</dt><dd><?=$this->echoThreeSize($talent->size)?></dd>
				<?php if($talent->hobby){?><dt>趣味</dt><dd><?=$talent->hobby?></dd><?php }?>
				<?php if($talent->skill){?><dt>特技</dt><dd><?=$talent->skill?></dd><?php }?>
				<?php if($talent->description){?><dt>レギュラー情報</dt><dd><?=$talent->description?></dd><?php }?>
			</dl>
		</div>
	</div>
	<div class="right">
		<div class="sns-bar">
			<?php foreach (['twitter','instagram'] as $sns) { ?>
				<a href="<?=(($talent->$sns)?$talent->$sns:'javascript:void(0)')?>" class="<?=$sns?> sns <?php if(!$talent->$sns)echo 'invalid'?>"></a>
			<?php } ?>
		</div>
		<div class="event">
			<div class="event-tabs">
				<?php foreach ($tabs as $key => $tab){
					if($talent->$key) { ?>
					<label><?=$tab?></label>
				<?php }} ?>
			</div>
			<div class="event-contents">
				<?php foreach ($tabs as $key => $tab){
					if($talent->$key){?>
					<p class="hidden" name="<?=$tab?>" ><?=$talent->$key?></p>
				<?php }} ?>
			</div>
		</div>
	</div>
	
</div>