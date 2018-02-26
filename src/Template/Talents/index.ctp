<?php $this->layout = 'lockon'; 
$this->start('meta');
$option = [
    "title" => 'カオス映像制作会｜タレント一覧',
    "description" => 'タレント一覧',
];
echo $this->element('meta',$option);
$this->end();
?>
<h2 class="title">タレント一覧 Talents</h2>
<?php echo $this->element('talent_list_box', array('talents' => $talents, ));?>