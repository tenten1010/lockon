<?php $this->layout = 'lockon'; 
$this->start('meta');
$option = [
    "title" => 'カオス映像制作会｜最新情報',
    "description" => '最新情報一覧',
];
echo $this->element('meta',$option);
$this->end();?>
<h2 class="title">最新情報 News</h2>
<?php echo $this->element('article_list_box', array('articles' => $articles, ));?>