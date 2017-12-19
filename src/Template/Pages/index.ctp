<?php $this->layout = 'lockon'; 
$this->start('meta');
$option = [
    "title" => 'Lock On芸能事務所｜ホーム',
    "description" => 'ホームページ',
];
echo $this->element('meta',$option);
$this->end();?>
<h2 class="title">最新情報 News</h2>
<?php echo $this->element('article_list_box', array('articles' => $articles, ));?>
<h2 class="title">タレント一覧 Talents</h2>
<?php echo $this->element('talent_list_box', array('talents' => $talents, ));?>