<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('main.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php echo $this->Html->script('main_'.(($isMobile)?'sp':'pc').'.js'); ?>
</head>
<body class="<?php echo (($isMobile)?'sp':'pc')?>">
    <?php echo $this->element('header');?>
    <?php if($isMobile) echo $this->element('side_bar');?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
