<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'talent' => 'Talent']
        ]) ?>
   </fieldset>
<?= $this->Form->button(__('保存')); ?>
<?= $this->Form->end() ?>
</div>