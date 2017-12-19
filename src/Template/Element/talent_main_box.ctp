<style type="text/css">
.pc .talent-profile {width: 100%;}
.pc .left {width: 400px; float: left;}
.pc .talent-profile .profile-image{height: 500px; background-color: blue;}
.pc .talent-profile .profile{margin: 20px 0;}
.pc .right {width: 540px; float: right;min-height: 300px; background-color: red;}
.pc .talent-profile .profile dl {font-size: 14px; font-weight: normal;}
.pc .talent-profile .profile dt {width: 100px;float: left;}
.pc .talent-profile .profile dd {margin-left: 125px;}
</style>
<?php 
$tabs = ['series'=>'TV番組','drama'=>'','magazine'=>'',''];
?>
<div class="title">
	<h1><?= $talent->name_jp?></h1>
	<p><?= $talent->name?></p>
</div>
<div class="talent-profile">
	<div class="left">
		<div class="profile-image">
		</div>
		<div class="profile">
			<dl>
				<dt>生年月日</dt><dd><?=date('Y年m月d日',strtotime($talent->birthday))?></dd>
				<dt>出身地</dt><dd><?=$talent->birthplace?></dd>
				<dt>血液型</dt><dd><?=$talent->bloodtype?></dd>
				<dt>サイズ</dt><dd><?=$this->echoThreeSize($talent->size)?></dd>
				<dt>趣味</dt><dd><?=$talent->hobby?></dd>
				<?php if($talent->skill){?><dt>趣味</dt><dd><?=$talent->skill?></dd><?php }?>
				<?php if($talent->description){?><dt>レギュラー情報</dt><dd><?=$talent->description?></dd><?php }?>
			</dl>
		</div>
	</div>
	<div class="right">
		<div class="event">
			<div class="event-tabs">
				<?php foreach ($tabs as $key => $value) {
					# code...
				}?>
			</div>
		</div>
	</div>
	
</div>