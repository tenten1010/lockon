<?php $this->layout = 'lockon'; ?>
<style type="text/css">
fieldset legend {color: #cc0033; border-color:#000;}
fieldset {width: 50%; margin: 50px auto; margin-bottom: 0}
.users.form button {background-color: #cc0033; border-radius: 10px; height: 30px; float: initial;display: block;margin: auto;line-height: 5px;}
fieldset input{border-radius: 10px !important;}
</style>
<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('ログイン') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('ログイン')); ?>
<?= $this->Form->end() ?>
</div>